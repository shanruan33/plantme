<?php
?>
<header>
	<img src="assets/logo.svg" />
	<nav id="menu">
		<a href="index.php">Home</a>
		<a href="user-article.php">Plant Wiki</a>
		<a href="about.php">About</a>
		<a href="faq.php">FAQ</a>
	</nav>	
	<div id="user-menu">
		<a href="register.php">Sign Up</a>
		<!-- <div class="login"> -->
			<?php if (isset($_SESSION["userid"])) { ?>
			<a href="logout.php"> Logout </a>
			<?php } else { ?>
			<a href="login.php">Login</a>
			<?php } ?>
		<!-- </div> -->
		<div class="profile">
			<?php
		if (isset($_SESSION["userid"])) { ?><a href="show-profile.php">Profile</a>  <?php } else { ?>
      <?php } ?>
		</div>

	</div>
</header>
<?php
?>
