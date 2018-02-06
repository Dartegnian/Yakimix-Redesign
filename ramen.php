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
				<a id="current">Ramen</a>
				<a href="bibimbap.php">Bibimbap</a>
				<a href="contact.php">Contact</a>
				<a href="about.php">About</a>
			</nav>
		</div>
		<div class="fullbackground" id="first">
		</div>
		<div class="plainbackground" id="ramen">
			<h1>RAMEN BOWLS</h1>
			<ul>
				<li><img id="logo" src="files\photos\Bushi-Tonkotsu-Ramen-218x155.png"/>
					<h2>Bushi Ramen</h2>
					<button>Add for ₱190</button>
					<p>Our best meal. Premium taste for less. Medium-rare beef shoulders shopped thinly and coated with garlic, salt, and seasonings to deliver an exquisite delight to your senses.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Garlic-Ramen_small1-218x155.png"/>
					<h2>Garlic Ramen</h2>
					<button>Add for ₱350</button>
					<p>2 full eggs compliments the garlic-coated pork belly in this dish. With meat cooked so close to perfection, we can gurantee that this bowl will make you craving for more.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Tonkotsu-Ramen1-218x155.png"/>
					<h2>Tonkotsu Ramen</h2>
					<button>Add for ₱155</button>
					<p>Not too much meat? Watching your health and diet? On the more green side? We've got you covered. Our Tonkotsu Ramen bowl only contains freshly-cut vegetables.</p>
				</li>
			</ul>
			<ul>
				<li><img id="logo" src="files\photos\Uma-Uma-Ramen1-218x155.png"/>
					<h2>Shin Ramyun Ramen</h2>
					<button>Add for ₱190</button>
					<p>Filled with our best Shin Ramyun, this ramen add-on is for those who are getting into Japanese food and want to taste the best authentic experience any restaurant can offer.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Spicy-Chasiu-Ramen1-218x155.png"/>
					<h2>Blazit Ramen</h2>
					<button>Add for ₱420</button>
					<p>This bowl is for those looking to add a lot of heat into their lives. The Blazit Ramen bowl is not for the faint of heart. Rumors say, no one has entirely finished it.</p>
				</li>
			</ul>
		</div>
		<div class="fullbackground" id="promo">
		</div>
		<div class="plainbackground" id="footer">
			<p>&#169; 2017 Dartegnian Velarde</p>
		</div>
	</body>
</html>