<?php

?>
<head>
	<link rel="stylesheet" href="css/main.css" />
	<!-- <link rel="stylesheet" href="css/homeAboutFaq.css" /> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<?
// session_start();
//
// $userid = $_SESSION["userid"];


// include("includes/dbconfig.php");

?>

<body>
	<?php include("includes/header.php");?>
	<main>
	<p class="instructions">Login</p>
	<div class="form">
	<form action="process-login.php" method="POST" class="holder">
		<div class="fullq">
		 <div class="halfq">
			 <div class="quartq">
				 <label> Username:</label>
			 </div>
			 <div class="quartq">
				 <input name="username" type="text" value="" placeholder="John Doe" style="width:100%;"/><br><br>
			 </div>
		 </div>
		 <div class="halfq">
			 </div>
	 </div>

	<div class="fullq">
		 <div class="halfq">
			 <div class="quartq">
				 <label>Password</label>
			 </div>
			 <div class="quartq">
				 <input name="password" type="password" style="width:100%;"	/><br><br>
			 </div>
		 	</div>
			 <div class="halfq">
				 </div>
		</div>

			<div class="fullq">
				<input type="submit"/>
			</div>
</div>
  </form>
</main>

	</body>

<?php

include("includes/footer.php");

?>
