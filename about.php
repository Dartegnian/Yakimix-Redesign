<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Yakimix</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="files/photos/yakilogo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="files/style.css" rel="stylesheet">
		<script>
			function Redirect() {
               window.location="register.php";
        	}
		</script>
	</head>
	<body>
		<div id="header">
		<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 14px; margin-right: 15px;" class="userbutt" onclick="Redirect()">Register</button>
		<form action="loggedindex.php" method="post" style="display: inline;    margin-top: 10px;">
				<table border="0" style="display: inline; float: right; margin-top: 10px;">
					<tr style="display: inline;">
					<td>Username</td>
					<td align="left"><input class="inputfield" type="text" name="username" size="20" maxlength="50" style="background-size: 30px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td >Password</td>
					<td align="left"><input class="inputfield" type="password" name="password" style="background-size: 30px; background-repeat: no-repeat;" size="20" maxlength="50" /></td>
					</tr>
					<tr style="display: inline;">
					<td style="border-right: 1px solid #e4e4e4; padding-right: 10px;" colspan="2" align="center"><input type="submit" value="Log In" class="button"/></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
			<div id="headwrapper">
				<div class="titlewrapper">
					<img id="logo" src="files\photos\yakimixlogo.png"/>
					
				</div>
			<div class="descriptionwrapper">
				<p class="description">
					Metro Manila's leading eat-all-you-can restaurant featuring Asian cuisine.
				</p>
			</div>
			</div>
			<nav id="headnav">
				<a href="index.php">Home Page</a>
				<a href="sushi.php">Sushi</a>
				<a href="sidedishes.php">Side Dishes</a>
				<a href="ramen.php">Ramen</a>
				<a href="bibimbap.php">Bibimbap</a>
				<a href="contact.php">Contact</a>
				<a id="current">About</a>
			</nav>
		</div>
		<div class="fullbackground" id="first">
		</div>
		<div class="plainbackground" id="sushichoices">
			<h1>ABOUT US</h1>
			<h3 style="color: white; font-size: 5px; margin: 2px; padding: 0px;"><a style="color: white; font-size: 5px; margin: 2px; padding: 0px; text-decoration: none;" href="mailto:nkayungao@student.apc.edu.ph" target="_top">nkayungao@student.apc.edu.ph</a></h3>
			<img id="logo" style="width: 500px; padding-bottom: 20px;" src="files\photos\yakimixlogo.png"/>
			<p style="width: 400px; font-size: 15px; color: black; font-weight: 600">Yakimix is an eat-all-you-can sushi and smokeless grill restaurant that offers Japanese, Korean, and Chinese cuisine. It is owned by the same company who runs Buffet 101. Its first branch, built in 2009, is located at Macapagal Ave., Pasay City. Currently, there are 13 Yakimix branches you can visit nationwide.

This project is made by Jordan Fernandez and Niles Ayungao to be presented in our WebProg class.We are currently studying in Asia Pacific College</p>
		</div>
		<div class="plainbackground" id="footer">
			<p>&#169; 2017 Jordan Fernandez, Niles Kim Ayungao</p>
		</div>
	</body>
</html>