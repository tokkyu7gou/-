<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>うおお</title>
</head>
<body>
<?php

   mb_language("Japanese");
   mb_internal_encoding("UTF-8");

   $youremail=$_POST["youremail"];
   $yourname=$_POST["yourname"];
   $yourcase=$_POST["yourcase"];

   if(!empty($youremail)
&& !empty($yourname)
&& !empty($yourcase)){
     if(mb_send_mail($youremail,$yourname,$yourcase)){
     echo"メールを送信しました";
   }else{
     echo"メールの送信に失敗しました";
   }
 }
?>
</body>
</html>
