<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//送信先アドレス
$to = $_POST['email'];
//メール件名
$subject = "お問い合わせありがとうございます。";
//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
$message = <<< EOM
お問い合わせありがとうございます。
内容を確認次第、折り返しご連絡させていただきます。
今しばらくお待ちくださいませ。

以下の内容で承りました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["name"]}

【 フリガナ 】
{$_POST["hurigana"]}

【 メールアドレス 】
{$_POST["email"]}

【 電話番号 】
{$_POST["tel"]}

【 お問い合わせ内容 】
{$_POST["message"]}

【 ご希望の連絡先 】
{$_POST["contact"]}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
//送信元
$headers = "From: wataai1009@gmail.com";

//メール送信
mb_send_mail ($to, $subject, $message, $headers); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>完了画面</title>
<style type="text/css">
	body {
		background-color: #f9fff2;
	}
</style>
</head>

<body>
	<h2>お問い合わせ完了</h2>
 	<p>お問い合わせありがとうございました。</p>
 	<p><a href="index.php">お問い合わせトップへ</p>
</body>
</html>