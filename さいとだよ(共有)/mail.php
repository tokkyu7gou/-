<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<?php

   mb_language("Japanese");
   mb_internal_encoding("UTF-8");

   $yourname=$_POST['yourname'];
   $youremail=$POST['youremail'];
   $yourcase=$_POST['yourcase'];

   if(mb_send_mail($yourname,$youremail,$yourcase)){
     echo"メールを送信しました";
   }else{
     echo"メールの送信に失敗しました";
   }
?>
</body>
</html>
