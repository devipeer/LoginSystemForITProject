<?php
 session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
		<meta charset="utf-8">
		<meta name="description" content="Arthub" />
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
		<link href="css/fontello.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrapper">
		<div class="header">
			<a href="index.php" class="sociallink">
				<div class="logo">
					<img src="img/arthub.png"
				</div>
			</a>
		</div>
		
		<div class="nav">
			<ol>
				<?php
					if(isset($_SESSION["useruid"])){
						echo "<li><a href='profile.php'>Profile</a></li>";
						echo "<li><a href='includes\logouts.inc.php'>Log out</a></li>";
					}
					else{
						echo "<li><a href='login.php'>Log in</a></li>";
						echo "<li><a href='signup.php'>Sign in</a></li>";
					}
				?>
			</ol>
		</div>
	</div>