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
				<a id="current">Bibimbap</a>
				<a href="contact.php">Contact</a>
				<a href="about.php">About</a>
			</nav>
		</div>
		<div class="fullbackground" id="first">
		</div>
		<div class="plainbackground" id="bibimbap">
			<h1>BIBIMBAP BOWLS</h1>
			<ul>
				<li><img id="logo" src="files\photos\bibimbowl-creamy-curry-beef.png"/>
					<h2>Cream Curry Beef</h2>
					<button>Add for ₱190</button>
					<p>Ever tasted original Korean bibimbap with a sweet creamy texture and a rich taste of beef? Now you can! Try our new cream curry beef.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\bibimbowl-creamy-curry-chicken.png"/>
					<h2>Cream Curry Chicken</h2>
					<button>Add for ₱350</button>
					<p>2 full eggs compliments the garlic-coated pork belly in this dish. With meat cooked so close to perfection, we can guarantee that this bowl will make you craving for more.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Spicy-Bibimbowl-chicken-top.png"/>
					<h2>Spicy Chicken</h2>
					<button>Add for ₱155</button>
					<p>Are you looking for thrill in your life? Want to live outside the lines? Ready for some action? Unleash the daredevil in you and try our spicy bibimbap chicken.</p>
				</li>
				<li><img id="logo" src="files\photos\Spicy-Bibimbowl-beef-top.png"/>
					<h2>Spicy Beef</h2>
					<button>Add for ₱190</button>
					<p>Beef got you down? Taste too bland? Want some spice? Are you waiting for that burst of flavor? We're sure you can't handle this. One bite alone will leave you running.</p>
				</li>
			</ul>
			<ul>
				<li>
					<img id="logo" src="files\photos\Spicy-Bibimbowl-beef-boxed-meal.png"/>
					<h2>Spicy Beef Set</h2>
					<button>Add for ₱225</button>
					<p>Want some spicy beef with a little more.. flavor? This set offers a wide range of senses that we're sure to definitely leave you craving for more.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Seafood-Bibimbowl-Meal.png"/>
					<h2>Seafood Set</h2>
					<button>Add for ₱120</button>
					<p>Fresh from the sea-that's what this bowl is. Featuring the freshest seafood you can ever find on the deep blue sea, with tasteful seaweed to bring you back to the ocean.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Taco-Bibimbowl-Meal.png"/>
					<h2>Taco Set</h2>
					<button>Add for ₱310</button>
					<p>Want the chili con carne found in Mexican food? Missing the spice of Jalapeño peppers? We've got you covered. We've blended the perfect mix of Korean and Mexican dishes.</p>
				</li>
			</ul>
		</div>
		<div class="plainbackground" id="footer">
			<p>&#169; 2017 Dartegnian Velarde</p>
		</div>
	</body>
</html>