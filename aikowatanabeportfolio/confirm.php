<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//各項目を内容を取得
$name = $_POST['name'];
$hurigana = $_POST['hurigana'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$contact = $_POST['contact'];
?>

<!DOCTYPE html>
<meta charset="utf-8">
<body>
	<form action="thanks.php" method="POST">
		<h1>確認画面</h1>
		
		<style type="text/css">
	body {
		background-color: #f9fff2;
	}
	.input-area {
		margin-bottom: 20px;
	}
	p {
		font-weight: bold;
		font-size: 20px;
	}
	.btn-border {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #9ec34b;
		font-size: 15px;
		color: #9ec34b;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
	.btn-border:hover {
		background-color: #9ec34b;
		border-color: #cbe585;
		color: #FFF;
	}
</style>
 		<h2>お問い合わせ内容確認</h2>
	 	<div class="input-area">
		 	<p>名前</p>
		 	<?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
		</div>

		<div class="input-area">
		 	<p>フリガナ</p>
		 	<?php echo htmlspecialchars($hurigana,ENT_QUOTES,'UTF-8');?>
		</div>

		<div class="input-area">
		 	<p>メールアドレス</p>
		 	<?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
	 	</div>

		 <div class="input-area">
		 	<p>電話番号</p>
		 	<?php echo htmlspecialchars($tel,ENT_QUOTES,'UTF-8');?>
	 	</div>

	 	<div class="input-area">
	 		<p>お問い合わせ内容</p>
	 		<?php echo nl2br(htmlspecialchars($message,ENT_QUOTES,'UTF-8'));?>
		</div>

		<div class="input-area">
		 	<p>ご希望の連絡先</p>
		 	<?php echo htmlspecialchars($contact,ENT_QUOTES,'UTF-8');?>
	 	</div>

	 	<div class="input-area">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border">
	 		<input type="submit" name="submit" value="送信" class="btn-border">

	 		<input type="hidden" name="name" value="<?php echo $name;?>">
			<input type="hidden" name="hurigana" value="<?php echo $hurigana;?>">
      <input type="hidden" name="email" value="<?php echo $email;?>">
	 		<input type="hidden" name="tel" value="<?php echo $tel;?>">
	 		<input type="hidden" name="message" value="<?php echo $message;?>">
	 		<input type="hidden" name="contact" value="<?php echo $contact;?>">
	 	</div>
</form>
</body>
</html>