<?php
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>PlantMe Home</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/homeAboutFaq.css" />
    <link rel="stylesheet" href="../css/slider.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("../includes/headerShan.php") ?>
    <div class="title">
        <img src="../image/title.png" />
        <div class="content">
            <h1>Find out the best<br>subscription plan for you</h1>
            <p>How are the light conditions in your house?<br>
                Do you have any allergies?<br>
                Do you live in a condo or a house?
            </p>
            <button type="submit"><a href="register.php">Sign Up</a></button>
        </div>
    </div>

    <main>
        <div class="main1">
            <img src="../image/main1.png" />
            <div>
                <h1 id="p1_h1">Our Core Philosophy</h1>
                <p id="p1_p">Each month we endeavour to select plants that are unique and different, so not every month will feature the same varieties. We source only the best plants from the current season and due to this our designs are constantly changing. So you get variety every single time and no two plants are ever the same.</p>
            </div>

        </div>
        <div class="main2">
            <img src="../image/main2.png" />
            <h1 id="p2_h1">Shipping & Cancellation</h1>
            <p id="p2_p">Our plant subscriptions are shipped the first Monday of your subscription. For example, for a monthly order, they will be shipped on the first Monday of the month. For a semi-monthly subscription, they will be shipped in two-week intervals, always on the Monday.
            </p>

        </div>
    </main>

    <section id="ins">
        <h1>Follow us on instagram @Plantme</h1>
        <div id="container">
            <div id="slider-box">
                <div id="parent">
                    <a href=""><img class="slide" src="../image/ins1.png" /></a>
                    <a href=""><img class="slide" src="../image/ins2.png" /></a>
                    <a href=""><img class="slide" src="../image/ins3.png" /></a>
                    <a href=""><img class="slide" src="../image/ins4.png" /></a>
                    <a href=""><img class="slide" src="../image/ins5.png" /></a>
                    <a href=""><img class="slide" src="../image/ins1.png" /></a>
                    <a href=""><img class="slide" src="../image/ins2.png" /></a>
                    <a href=""><img class="slide" src="../image/ins3.png" /></a>
                    <a href=""><img class="slide" src="../image/ins4.png" /></a>
                    <a href=""><img class="slide" src="../image/ins5.png" /></a>
                    <a href=""><img class="slide" src="../image/ins1.png" /></a>
                </div>
            </div>
            <div>
    </section>

    <div id="contact">
        <h1>Contact</h1>
        <p>497 Evergreen Rd. Roseville, CA 95673<br>
            +44 345 678 903<br>
            info@plantme.com</p>
    </div>
    <img id="contact_img" src="../image/contact.png" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../slider.js" type="text/javascript"></script>

    <?php include("../includes/footerShan.php") ?>

</body>

</html>
<?php
?>