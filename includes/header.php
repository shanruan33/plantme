<?php
?>
<header>
	<div class="menu">
		<div class="logo"><img src="assets/logo.svg" /></div>
		<div clas="home"><a href="index.php">Home</a></div>
		<div class="about"><a href="about.php">About</a></div>
		<div class="wiki"><a href="user-article.php">Plant Wiki</a></div>
		<div class="faq"><a href="faq.php">FAQ</a></div>
		<div class="signup"><a href="register.php">Sign Up</a></div>
		<div class="login">
			<?php if (isset($_SESSION["userid"])) { ?>
			<a href="logout.php"> Logout </a>
			<?php } else { ?>
			<a href="login.php">Login</a>
			<?php } ?>
		</div>
		<div class="profile"><?php
		if (isset($_SESSION["userid"])) { ?><a href="profile.php">Profile</a>  <?php } else { ?>
      <?php } ?>
		</div>

	</div>
</header>
<?php
?>
