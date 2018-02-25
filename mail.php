<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

$to = "mtngocthach1202@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From:matthewlewisnicolaw@gmail.com";
if(mail($to,$subject,$txt,$headers))
	echo "đã gửi";
else
	echo "no";
?>
<body>
</body>
</html>
