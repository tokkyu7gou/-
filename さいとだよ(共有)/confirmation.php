確認画面
<?php
echo 'uwaan';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<h2>問い合わせ内容</h2>
<form action="mail.php" method="post">
<table border="1">
<tr>
<td>名前</td>
<td><?php echo $_POST["yourname"]; ?></td>
</tr>
<tr>
<td>メールアドレス</td>
<td><?php echo $_POST["youremail"]; ?></td>
</tr>
<tr>
<td>問い合わせ内容</td>
<td><?php echo $_POST["yourcase"]; ?></td>
</tr>
</table>
<input type="submit" value="送信" />

<input name="youremail" type="hidden" value="youremail"/>
<input name="yourname" type="hidden" value="yourname"/>
<input name="yourcase" type="hidden" value="yourcase"/>
</form>
</body>
</html>
