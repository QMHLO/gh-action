<?php

require_once(dirname(__FILE__) . '/form/etc/config.php');
require_once(dirname(__FILE__) . '/form/lib/functions.php');
require_once(dirname(__FILE__) . '/form/lib/Session.php');
require 'vendor/autoload.php'; //For AWS SDK

use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

class SimpleFormController
{
	private $config;
	protected $input = array();
	protected $input_html = './index.template.php';
	protected $modal_contact = "./modalcontact.template.php";
	protected $modal_doc_contact = "./modaldoc.template.php";
	protected $email_for_admin = './form/etc/email_for_admin.template.php';
	protected $email_for_user = './form/etc/email_for_user.template.php';
	protected $email_return    = 'email';

	public function __construct()
	{
		$this->config = new MailConfig(); // Initialize $config with MailConfig instance
		session_cache_limiter('');
		Session::start('form_session');

		$paths = array('input_html', 'email_for_admin', 'email_for_user',);

		foreach ($paths as $p) {
			$this->{$p} = realpath(dirname(__FILE__) . '/' . $this->{$p});
		}

		$columns = $this->config->get_columns();
		foreach ($columns as $key => $value) {
			$columns[$key]['error'] = array();
		}
		$this->input = $columns;

		if (!empty($_POST)) {
			foreach ($_POST as $key => $val) {
				if (isset($this->input[$key])) {
					$this->input[$key]['value'] = $val;
				}
			}
		}
	}

	public function input()
	{
		$this->render($this->input_html);
	}

	public function submit()
	{
		$is_return = $this->config->get_email_return() && $this->input[$this->config->get_email_return()]['type'] === 'email' && strlen($this->input[$this->config->get_email_return()]['value']);

		$send_to = $this->config->get_send_to();
		foreach ($send_to as $value) {
			$this->sendTo($value, $this->email_for_admin, $is_return ? $this->input[$this->config->get_email_return()]['value'] : NULL);
		}

		if ($is_return) {
			$this->sendTo($this->input[$this->config->get_email_return()]['value'], $this->email_for_user);
		}

		$this->render($this->modal_contact);
		$this->clearSession(); 
	}

	public function submitModal()
	{
		$is_return = $this->config->get_modal_email_return() && $this->input[$this->config->get_modal_email_return()]['type'] === 'email' && strlen($this->input[$this->config->get_modal_email_return()]['value']);

		$send_to = $this->config->get_send_to();
		foreach ($send_to as $value) {
			$this->sendTo($value, $this->email_for_admin, $is_return ? $this->input[$this->config->get_modal_email_return()]['value'] : NULL);
		}

		if ($is_return) {
			$this->sendTo($this->input[$this->config->get_modal_email_return()]['value'], $this->email_for_user);
		}

		$this->render($this->modal_contact);
		$this->clearSession(); 
	}

	public function submitDocModal()
	{
		$is_return = $this->config->get_modal_email_doc_return() && $this->input[$this->config->get_modal_email_doc_return()]['type'] === 'email' && strlen($this->input[$this->config->get_modal_email_doc_return()]['value']);

		$send_to = $this->config->get_send_to();
		foreach ($send_to as $value) {
			$this->sendTo($value, $this->email_for_admin, $is_return ? $this->input[$this->config->get_modal_email_doc_return()]['value'] : NULL);
		}

		if ($is_return) {
			$this->sendTo($this->input[$this->config->get_modal_email_doc_return()]['value'], $this->email_for_user);
		}

		$this->render($this->modal_doc_contact);
		$this->clearSession(); 
	}

	// AWS SES Email Function
	protected function sendTo($address, $template_path, $reply_to = NULL)
	{
		$address = trim($address);

		ob_start();
		$input = $this->input;
		include($template_path);
		$message = explode("\n", trim(ob_get_clean()));

		// Prepare email data
		$subject = array_shift($message);
		$body = implode("\n", $message);
		
		// AWS SES configuration
		$SesClient = new SesClient([
			'version' => 'latest',
			'region'  => 'ap-northeast-1', // AWS region
		]);

		try {
			$result = $SesClient->sendEmail([
				'Destination' => [
					'ToAddresses' => [$address],
				],
				'Message' => [
					'Body' => [
						'Text' => [
							'Charset' => 'UTF-8',
							'Data' => $body,
						],
					],
					'Subject' => [
						'Charset' => 'UTF-8',
						'Data' => $subject,
					],
				],
				'Source' => $this->config->get_from_adress(), // Sender Email
				'ReplyToAddresses' => $reply_to ? [$reply_to] : [],
			]);

			echo "Email sent! Message ID: " . $result['MessageId'] . "\n";
		} catch (AwsException $e) {
			echo "Error sending email: " . $e->getAwsErrorMessage() . "\n";
		}
	}

	public function clearSession()
	{
		session_unset();
		session_destroy();
		Session::start('form_session');
	}

	public function render($file)
	{
		extract(['input' => $this->input]);
		include($file);
		exit;
	}
}

$form = new SimpleFormController();

// Handle form submission when 'mode' is 'submit'
$mode = isset($_POST['mode']) ? $_POST['mode'] : Session::get('mode');
switch ($mode) {
	case 'submit':
		$form->submit();
		break;
	case 'submit-modal':
		$form->submitModal();
		break;
	case 'doc-modal':
		$form->submitDocModal();
		break;
	default:
		$form->input();
		break;
}
