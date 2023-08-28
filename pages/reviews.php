<!DOCTYPE html>
<html lang="en">
<?php include_once '../init.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews page</title>

    <?php include cssFiles; ?>

    <!-- ------------------------ -->
    <!-- Page style sheets here -->
    <!-- ------------------------ -->
    <link rel="stylesheet" href="<?= get_css() ?>reviews-page.css">
</head>

<body>
    <!-- ------------------------ -->
    <!-- Header starts here -->
    <!-- ------------------------ -->
    <?php include header ?>

    <!-- ------------------------ -->
    <!-- Review section starts here -->
    <!-- ------------------------ -->
    <section class="reviews-first-section">
        <h2 class="sub-heading">
            People say the nicest things
        </h2>
        <div class="reviews-first-section-grid grid grid-3">
            <div class="reviews-first-section-grid-1">
                <p class="text">
                    "I absolutely LOVE this service. Not only are they prompt, their prices are incredibly reasonable and they are just friendly and accommodating. They aren't pushy, but they have a lot of options to not only get your lawn cut, but to keep it healthy and/or get it healthy. I could not recommend them more. HIGHLY RECOMMENDED! No more calling around and getting flaky or inconsistent service. You can pay with a credit card-because who wants to leave a check in the mailbox these days? They bend over backward to make sure you are not just satisfied, but truly happy with the service."
                </p>
                <div class="user-info grid">
                    <div class="user-img grid-center">
                        <img src="<?= get_img() ?>/reviews_1.jpg" alt="Customer images">
                    </div>
                    <div class="user-detials">
                        <p class="name">Tina A.</p>
                        <p class="address">Los Angeles, USA</p>
                        <div class="five-stars-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews-first-section-grid-1">
                <p class="text">
                    "I absolutely LOVE this service. Not only are they prompt, their prices are incredibly reasonable and they are just friendly and accommodating. They aren't pushy, but they have a lot of options to not only get your lawn cut, but to keep it healthy and/or get it healthy. I could not recommend them more. HIGHLY RECOMMENDED! No more calling around and getting flaky or inconsistent service. You can pay with a credit card-because who wants to leave a check in the mailbox these days? They bend over backward to make sure you are not just satisfied, but truly happy with the service."
                </p>
                <div class="user-info grid">
                    <div class="user-img grid-center">
                        <img src="<?= get_img() ?>/reviews_1.jpg" alt="Customer images">
                    </div>
                    <div class="user-detials">
                        <p class="name">Tina A.</p>
                        <p class="address">Los Angeles, USA</p>
                        <div class="five-stars-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews-first-section-grid-1">
                <p class="text">
                    "Love, love, love the folks at Lawn Love! The company they matched me with doesn't just mow our yard, they truly manage our lawn service. We appreciate all they do to keep our landscape in tip-top shape. I highly recommend them and that says a lot as I previously owned a lawn maintenance company when I was younger." </p>
                <div class="user-info grid">
                    <div class="user-img grid-center">
                        <img src="<?= get_img() ?>/reviews_1.jpg" alt="Customer images">
                    </div>
                    <div class="user-detials">
                        <p class="name">Tina A.</p>
                        <p class="address">Los Angeles, USA</p>
                        <div class="five-stars-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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