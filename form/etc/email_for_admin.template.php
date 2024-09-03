ラクハブからのお問い合わせ

ラクハブから下記の内容でお問い合わせがありました。
内容を確認したのち、対応が必要な場合はご対応をお願いいたします。
<?php
function sanitizeAndEcho($inputText)
{
    $decodedText = html_entity_decode($inputText);
    echo $decodedText;
}
?>

<?php if ($input['company_name']['value'] !== "") { ?>
会社名：<?php echo sanitizeAndEcho($input['company_name']['value']); ?><?php echo "\n"; ?>
<?php } ?>
<?php if ($input['name']['value'] !== "") { ?>
お名前：<?php echo sanitizeAndEcho($input['name']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['phno']['value'] !== "") { ?>
電話番号：<?php echo sanitizeAndEcho($input['phno']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['email']['value'] !== "") { ?>
メールアドレス：<?php echo sanitizeAndEcho($input['email']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['content_inquiry']['value'] !== "") { ?>
お問い合わせ内容：<?php echo sanitizeAndEcho($input['content_inquiry']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['company_name_modal']['value'] !== "") { ?>
会社名：<?php echo sanitizeAndEcho($input['company_name_modal']['value']); ?><?php echo "\n"; ?>
<?php } ?>
<?php if ($input['name_modal']['value'] !== "") { ?>
お名前：<?php echo sanitizeAndEcho($input['name_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['phno_modal']['value'] !== "") { ?>
電話番号：<?php echo sanitizeAndEcho($input['phno_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['email_modal']['value'] !== "") { ?>
メールアドレス：<?php echo sanitizeAndEcho($input['email_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['content_inquiry_modal']['value'] !== "") { ?>
お問い合わせ内容：<?php echo sanitizeAndEcho($input['content_inquiry_modal']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['company_name_modal_doc']['value'] !== "") { ?>
会社名・お名前：<?php echo sanitizeAndEcho($input['company_name_modal_doc']['value']); ?> <?php echo "\n"; ?>
<?php } ?>
<?php if ($input['email_modal_doc']['value'] !== "") { ?>
メールアドレス：<?php echo sanitizeAndEcho($input['email_modal_doc']['value']); ?> <?php echo "\n"; ?>
<?php } ?>

---
このメールはラクハブから自動で送信されています。