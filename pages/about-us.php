<!DOCTYPE html>
<html lang="en">
<?php include_once '../init.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <?php include cssFiles; ?>

    <!-- ------------------------ -->
    <!-- Page style sheets here -->
    <!-- ------------------------ -->
    <link rel="stylesheet" href="<?= get_css() ?>about-us.css">
</head>

<body>
    <!-- ------------------------ -->
    <!-- Header starts here -->
    <!-- ------------------------ -->
    <?php include header ?>

    <!-- ------------------------ -->
    <!-- About section starts here -->
    <!-- ------------------------ -->
    <section class="about-us-first-section background-property">

    </section>

    <!-- ------------------------ -->
    <!-- About section 2 starts here -->
    <!-- ------------------------ -->
    <section class="about-second-section">
        <h2 class="sub-heading">
            About Us
        </h2>
        <p class="text"><span>It’s simple, the lawn care industry is outdated.</span> It’s hard for homeowners to find quality, reliable lawn care. Lawn care providers are still planning their routes on whiteboards and spending more time driving between jobs than actually mowing lawns.</p>

        <div class="about-pro-desc grid">
            <div class="about-pro-desc-img">
                <img src="<?= get_img() ?>lawnlovepro.jpg" alt="">
            </div>
            <div class="about-pro-desc-content grid-center">
                <p class="text">The current state of the industry is a little crazy. It takes multiple phone calls, hours of back-and-forth, and an in-person visit from a service provider just to get a quote for your lawn service. <span>We can do better</span>. Our mission is to build a smarter lawn care marketplace. In doing so, we can provide customers with a more modern, streamlined experience, while also helping our partner lawn pros operate more efficiently, leverage technology, and thrive.</p>
            </div>
        </div>
    </section>



    <!-- ------------------------ -->
    <!-- About section 3 starts here -->
    <!-- ------------------------ -->
    <section class="home-eight-section">
        <div class="insure-parent-about grid">
            <div class="insure-parent-about-img">
                <span class="blockquote"></span>
            </div>
            <div class="insure-parent-about-content">
                <span>
                    We started Lawn Love with one primary goal. To revolutionize the traditional lawn care industry. We've paired our technology knowledge with our industry expertise, and are bringing the love to lawns everywhere.
                </span>
                <p>Jeremy Yamaguchi, CEO</p>
            </div>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- About section 4 starts here -->
    <!-- ------------------------ -->
    <section class="about-fourth-section">

        <h2 class="sub-heading">
            Our Mission
        </h2>
        <p class="text">

            Our mission is simple: We’re bringing technology leverage to the lawn care industry, with the goal of improving the lives of both our customers and the lawn pros we partner with.
            <br><br>
            The lawn care business has been around for hundreds of years, but it’s remained a largely low-tech service. As a result, the process of finding reliable, professional lawn services has been inefficient and frustrating. We can fix this, and our goal is to build the largest high-tech lawn care marketplace on planet earth.
        </p>

    </section>


    <!-- ------------------------ -->
    <!-- Eight insured section -->
    <!-- ------------------------ -->
    <?php include assurance; ?>

    <!-- ------------------------ -->
    <!-- Footer card section -->
    <!-- ------------------------ -->
    <?php include page_bottom; ?>

    <!-- ------------------------ -->
    <!-- JS Files used in page  -->
    <!-- ------------------------ -->

    <script src="../assets/js/header.js"></script>
</body>

</html>