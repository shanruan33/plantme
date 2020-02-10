<?php session_start();

?>
<body>
<head>
	<link rel="stylesheet" href="../css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>



	<?
	include("../includes/header.php");

	?>


<main>

	<?include("../includes/dbconfig.php");?>


	<p class="instructions">Register</p>
	<div class="form">
	<form action="process-register.php" method="POST" class="holder">
		<div class="fullq">
		 <div class="halfq">
			 <div class="quartq">
				 <label> Name:</label>
			 </div>
			 <div class="quartq">
				 <input type="text" name="username" placeholder="Mickey Mouse" required>
			 </div>
		 </div>
		 <div class="halfq">
			 </div>
	 </div><br />

	<div class="fullq">
		 <div class="halfq">
			 <div class="quartq">
				 <label>Email:</label>
			 </div>
			 <div class="quartq">
				 <input type="email" name="email" placeholder="mickeymouse@disney.com" required>
			 </div>
		 	</div>
			 <div class="halfq">
				 </div>
		</div><br />

		<div class="fullq">
			 <div class="halfq">
				 <div class="quartq">
					 <label>Password:</label>
				 </div>
				 <div class="quartq">
					 <input type="password" name="password" placeholder="456!ecv" required><br><br>
				 </div>
			 	</div>
				 <div class="halfq">
					 </div>
			</div><br />

			<div class="fullq">
				<input type="submit"/>
			</div>
</div>
  </form>
</main>


	</form>

</main>


<?php

include("../includes/footer.php");

?>

</body>
