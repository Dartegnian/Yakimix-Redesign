<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Yakimix</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="files/photos/yakilogo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="files/style.css" rel="stylesheet">
		<style>
			td {
			    margin-bottom: 10px;
			    padding-bottom: 10px;
			}
			td input.button {
			    margin-top: 10px;
			}
		</style>
	</head>
	<body>
		<div id="header">
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
				<a href="about.php">About</a>
			</nav>
		</div>
		<div class="plainbackground" id="sushichoices" style="padding-top: 250px; padding-bottom: 100px;">
			<h1>ABOUT US</h1>
			<h3 style="color: white; font-size: 5px; margin: 2px; padding: 0px;"><a style="color: white; font-size: 5px; margin: 2px; padding: 0px; text-decoration: none;" href="mailto:nkayungao@student.apc.edu.ph" target="_top">nkayungao@student.apc.edu.ph</a></h3>
			<form action="loggedindex.php" method="post">
			<table border="0" style="margin: 0 auto">
			<tr style="margin-bottom: 10px;">
			<td>Name</td>
			<td align="left"><input type="text" name="username" size="20" maxlength="50"  /></td>
			</tr>
			<tr>
			<td>Email</td>
			<td align="left"><input type="text" name="email" size="20" maxlength="30" /></td>
			</tr>
			<tr>
			<td>Password</td>
			<td align="left"><input type="password" name="password" size="20" maxlength="20" /></td>
			</tr>
			<tr>
			<td>Confirm Password</td>
			<td align="left"><input type="password" name="password" size="20" maxlength="20" /></td>
			</tr>
			<tr>
			<tr>
			<td style="" colspan="2" align="center"><input type="submit" value="Register account" class="button"/></td>
			</tr>
			</table>
			</form>
		</div>
		<div class="plainbackground" id="footer">
			<p>&#169; 2017 Dartegnian Velarde</p>
		</div>
	</body>
</html>