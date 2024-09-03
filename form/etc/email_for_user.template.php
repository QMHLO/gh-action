お問い合わせいただき、ありがとうございます。

この度はラクハブにお問い合わせいただきありがとうございます。
下記の内容で承っております。

お問い合わせに関する内容につきましては、確認の上、ご返信させていただきますので、今しばらくお待ちください。
*内容によってはご返信できない場合がございます。ご了承ください。

<?php
function sanitizeAndEchoUser($inputText)
{
    $decodedText = html_entity_decode($inputText);
    echo $decodedText;
}
?>

==
<?php if ($input['company_name']['value'] !== "") { ?>
会社名：<?php echo sanitizeAndEchoUser($input['company_name']['value']); ?><?php echo "\n"; ?>
<?php } ?>
<?php if ($input['name']['value'] !== "") { ?>
お名前：<?php echo sanitizeAndEchoUser($input['name']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['phno']['value'] !== "") { ?>
電話番号：<?php echo sanitizeAndEchoUser($input['phno']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['email']['value'] !== "") { ?>
メールアドレス：<?php echo sanitizeAndEchoUser($input['email']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['content_inquiry']['value'] !== "") { ?>
お問い合わせ内容：<?php echo sanitizeAndEchoUser($input['content_inquiry']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['company_name_modal']['value'] !== "") { ?>
会社名：<?php echo sanitizeAndEchoUser($input['company_name_modal']['value']); ?><?php echo "\n"; ?>
<?php } ?>
<?php if ($input['name_modal']['value'] !== "") { ?>
お名前：<?php echo sanitizeAndEchoUser($input['name_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['phno_modal']['value'] !== "") { ?>
電話番号：<?php echo sanitizeAndEchoUser($input['phno_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['email_modal']['value'] !== "") { ?>
メールアドレス：<?php echo sanitizeAndEchoUser($input['email_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['content_inquiry_modal']['value'] !== "") { ?>
お問い合わせ内容：<?php echo sanitizeAndEchoUser($input['content_inquiry_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['company_name_modal_doc']['value'] !== "") { ?>
会社名・お名前：<?php echo sanitizeAndEchoUser($input['company_name_modal_doc']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['email_modal_doc']['value'] !== "") { ?>
メールアドレス：<?php echo sanitizeAndEchoUser($input['email_modal_doc']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
==

<?php if (($input['email_modal_doc']['value'] !== "") && ($input['company_name_modal_doc']['value'] !== "")) { ?>
ダウンロード資料は、ご記入いただいたメールアドレスに送信させていただきます。
<?php } ?>

---
このメールはラクハブから自動で送信されています。