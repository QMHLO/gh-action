<?php
class MailConfig
{
	/*
*	設定ファイル
*	フォームの設定をするファイルです。
*	各項目の項目名や必須チェック設定はここでします。
*/
	public function get_columns()
	{
		return array(
			'company_name' => array( 
				'name'		=> 'company_name', 
				'type'		=> 'text', 
				'value'		=> '', 
				'required'	=> true, 
				'check'		=> NULL, 
				'group'		=> NULL 
			),
			'name' => array(
				'name'		=> 'name',
				'type'		=> 'text',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'email' => array(
				'name'		=> 'email',
				'type'		=> 'email',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'phno' => array(
				'name'     => 'phno',
				'type'     => 'text',
				'value'    => '',
				'required' => false,
				'target'   => 'mail',
			),
			'content_inquiry' => array(
				'name'		=> 'content_inquiry',
				'type'		=> 'text',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'company_name_modal' => array( 
				'name'		=> 'company_name_modal', 
				'type'		=> 'text', 
				'value'		=> '', 
				'required'	=> true, 
				'check'		=> NULL, 
				'group'		=> NULL 
			),
			'name_modal' => array(
				'name'		=> 'name_modal',
				'type'		=> 'text',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'email_modal' => array(
				'name'		=> 'email_modal',
				'type'		=> 'email',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'phno_modal' => array(
				'name'     => 'phno_modal',
				'type'     => 'text',
				'value'    => '',
				'required' => false,
				'target'   => 'mail',
			),
			'content_inquiry_modal' => array(
				'name'		=> 'content_inquiry_modal',
				'type'		=> 'text',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'company_name_modal_doc' => array(
				'name'		=> 'company_name_modal_doc',
				'type'		=> 'text',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'email_modal_doc' => array(
				'name'		=> 'email_modal_doc',
				'type'		=> 'email',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			'agree_modal_doc' => array(
				'name'		=> 'agree_modal_doc',
				'type'		=> 'text',
				'value'		=> '',
				'required'	=> true,
				'check'		=> NULL,
				'group'		=> NULL
			),
			/* △フォーム各項目の設定ここまで△ */
		);
	}

	public function get_email_return()
	{
		/*
		* お問い合わせしたユーザにメールを送るかどうか。
		* 送らないならfalse、送るならメールアドレスの項目の変数名（上記のフォーム各項目の設定参照）を書いてください。
		*/
		return 'email';
		//return 'mail';//送る場合の設定例。
	}

	public function get_modal_email_return()
	{
		/*
		* お問い合わせしたユーザにメールを送るかどうか。
		* 送らないならfalse、送るならメールアドレスの項目の変数名（上記のフォーム各項目の設定参照）を書いてください。
		*/
		return 'email_modal';
		//return 'mail';//送る場合の設定例。
	}

	public function get_modal_email_doc_return()
	{
		/*
		* お問い合わせしたユーザにメールを送るかどうか。
		* 送らないならfalse、送るならメールアドレスの項目の変数名（上記のフォーム各項目の設定参照）を書いてください。
		*/
		return 'email_modal_doc';
		//return 'mail';//送る場合の設定例。
	}

	public function get_from_adress()
	{
		/*
		*	送信元アドレス設定
		*	送信元アドレス欄に表示されるアドレスを指定します。
		*	（送信専用で受信できないアドレスでも構いません。)
		*/
		return 'info@rakuhub.jp';
	}

	public function get_send_to()
	{
		/*
		* 管理者メールアドレス設定（送信先）
		* カンマで区切って複数のメールアドレスを書くと複数の管理者に同時送信されます。
		*/
		return array(
			'inquiry@rakuhub.jp',
		);
	}
}


/*
* 基本設定ここまで
* これより下は開発用や特殊な環境下用の設定になります。
* 開発等しない場合は書き換えなくていいです。
*/

/*
	* デバッグモード
	* 基本的にfalseのままにしておいてください。
	* trueにした場合はphpのエラー表示が出るようになります。
	* !!!本番公開の際は絶対にfalseにすること!!!
	*/
define('DEBUG', false);

/* 言語・タイムゾーンなどの設定 */
setlocale(LC_TIME, 'ja_JP');
date_default_timezone_set('Asia/Tokyo');
