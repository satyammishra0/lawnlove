<!DOCTYPE html>
<html lang="en">
<?php include_once '../init.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Lawnlove</title>

    <?php include cssFiles; ?>

    <!-- ------------------------ -->
    <!-- Page style sheets here -->
    <!-- ------------------------ -->
    <link rel="stylesheet" href="<?= get_css() ?>blog.css">
</head>

<body>
    <!-- ------------------------ -->
    <!-- Header starts here -->
    <!-- ------------------------ -->
    <?php include header ?>

    <!-- ------------------------ -->
    <!-- About section starts here -->
    <!-- ------------------------ -->
    <section class="blog-first-section grid">
        <div class="blog-listing">
            <h2 class="blog-heading">Slime Mold on Grass: What is It and How to Get Rid of It?</h2>
            <div class="blog-details flex ">
                <p class="blog-publisher">LaShonde Floure</p>
                <p class="publishing-status">Published: <span>
                        August 24 2023
                    </span>
                </p>
                <p class="comments">
                    <span>0 </span>Comments
                </p>
            </div>
            <p class="company-title">
                LawnLove
            </p>
            <p class="blog-starting-line">
                A slime mold is a single-celled organism that can grow on your grass and spreads through spores. It looks like […]
            </p>

            <p class="read-more-btn"><a href="">Read More <i class='bx bxs-right-arrow'></i></a></p>
        </div>

        <div class="why-us-section">
            <h2 class="why-use-heading">
                Why Lawn Love?
                Lawn Love Makes
                Lawn Care Easy
            </h2>

            <div class="why-us-card-1">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>

                <p class="why-us-tag">Instant Quotes</p>
                <p class="why-us-tag-desc">
                    We offer instant, personalized quotes based on the size of your lawn, location, and requested service.
                </p>
                <div>
                    <a href="#">Try us →</a>
                </div>
            </div>
            <div class="why-us-card-1">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>

                <p class="why-us-tag">Instant Quotes</p>
                <p class="why-us-tag-desc">
                    We offer instant, personalized quotes based on the size of your lawn, location, and requested service.
                </p>
                <div>
                    <a href="#">Try us →</a>
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