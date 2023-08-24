<!DOCTYPE html>
<html lang="en">
<?php include_once '../init.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php include cssFiles; ?>

    <!-- ------------------------ -->
    <!-- Page style sheets here -->
    <!-- ------------------------ -->
    <link rel="stylesheet" href="<?= get_css() ?>home.css">

</head>

<body>
    <!-- ------------------------ -->
    <!-- Header starts here -->
    <!-- ------------------------ -->
    <?php include header ?>


    <!-- ------------------------ -->
    <!-- First section starts here -->
    <!-- ------------------------ -->
    <section class="home-first-section background-property">
        <div class="home-first-section-inside">
            <h2>
                Hire a world-class lawn care
                service in under two minutes.
            </h2>
            <p>
                Fully insured with a total satisfaction guarantee and amazing customer support.
            </p>
            <button>Our Pricing</button>
            <p>Rated 4.7/5 out of 100,000+ customer reviews</p>
            <div class="five-stars-rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
            </div>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- Images strip section -->
    <!-- ------------------------ -->
    <?php include featured_by_images; ?>

    <!-- ------------------------ -->
    <!-- Cre Posining thrid section -->
    <!-- ------------------------ -->
    <section class="home-second-section">
        <div class="parent-second-section grid">
            <div class="parent-second-left">
                <div class="flex">
                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                            <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                            <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                            <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                        </g>
                    </svg>
                    <h2 class="sub-heading">The Best Local
                        <br>
                        Lawn Care Services
                    </h2>
                </div>
                <div class="parent-second-content">
                    <p class="text">
                        If you’re looking for a fantastic, reliable lawn care service, you’ve come to the right place. We do things differently here at Lawn Love. We are taking a high-tech approach to a traditionally low tech sector, and are revolutionizing the lawn care industry. Our skilled, independent lawn pros will provide a lawn care service that is perfectly tailored to the needs of your lawn, from one-time lawn mowing to ongoing lawn care maintenance and yard clean up.
                    </p>
                    <p class="text">
                        Lawn care is a science, and we at Lawn Love pride ourselves in being on the cutting edge of the industry. We don’t believe that one size fits all, as every lawn is unique and has its particular challenges with regard to climate, grasses, growing seasons, and soil varieties. We’ll match you with a skilled, experienced lawn care provider that will work wonders on your yard.
                    </p>
                </div>
            </div>
            <div class="parent-second-right grid grid-center">
                <img src="<?= get_img() ?>/crew-posing.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- Call To Action Card -->
    <!-- ------------------------ -->

    <?php include cta; ?>


    <!-- ------------------------ -->
    <!-- Leaf Gatherer fourth section -->
    <!-- ------------------------ -->
    <section class="home-second-section">
        <div class="parent-second-section grid">
            <div class="parent-second-right grid grid-center">
                <img src="<?= get_img() ?>/pro-leaf-blower.jpg" alt="">
            </div>
            <div class="parent-second-left">
                <div class="flex">
                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                            <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                            <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                            <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                        </g>
                    </svg>
                    <h2 class="sub-heading">We Save You Time
                        and Money on Lawn Care
                    </h2>
                </div>
                <div class="parent-second-content">
                    <p class="text">
                        Lawn Love starts saving you time with an instant, personalized quote. Based on our satellite mapping technology, your location and preferred service type, we’ll provide a competitive price right away. No surprises, no hidden charges and no need to waste time calling around.

                        From there, we do all of the matchmaking for you. We match customers with lawn pros who are close by and waiting to complete the job. Based on your service type and plan, we’ll search our pro database to find you the perfect match. You’ll know the pros are qualified because they’ve passed Lawn Love requirements and because of our quality guarantee. Don’t like the way your lawn looks? Get your money back. It’s that simple.
                    </p>
                    <p class="text">
                        Our job’s not done yet. We take carefree lawn care services to the next level with service plans. You can customize your desired frequency of lawn services so that you automatically get notified when it’s time to get the job done again. But don’t worry, unlike most subscription models, you only pay after the job is completed. You can skip a service or schedule a one time service as needed depending on your schedule and the condition of your lawn.

                        We figure out everything from the scheduling, routing, and the payment processing so that you can sit back, relax, and enjoy your beautiful lawn.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- Services cards fifth section -->
    <!-- ------------------------ -->
    <section class="cta">
        <div class="fifth-card-parent grid grid-2   ">
            <div class="fifth-card-child">
                <div class="flex" style="align-items: center;">
                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                            <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                            <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                            <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                        </g>
                    </svg>
                    <h2 class="sub-heading">The Best Local
                        <br>
                        Lawn Care Services
                    </h2>
                </div>
                <div class="fifth-card-content">
                    <p class="text">
                        Our skilled, independent lawn pros cover all the bases from lawn mowing and yard maintenance service to specialty lawn services including aeration, fertilizing, gutter cleaning, and more. We even offer year-round support with snow removal services.
                    </p>
                </div>
            </div>
            <div class="fifth-card-child">
                <div class="flex" style="align-items: center;">
                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                            <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                            <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                            <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                        </g>
                    </svg>
                    <h2 class="sub-heading">The Best Local
                        <br>
                        Lawn Care Services
                    </h2>
                </div>
                <div class="fifth-card-content">
                    <p class="text">
                        Lawn Love operates in over 120 cities and 900 neighborhoods. Check out our <a href="#" class="green-underline-txt">locations</a> or enter your zip code in the <a href="#" class="green-underline-txt">quote form</a> to find your lawn care service provider.

                    </p>
                    <div>
                        <a href="#">Check out our locations →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- sixth card section section -->
    <!-- ------------------------ -->
    <section class="home-sixth-section grid grid-2">
        <div class="parent-second-left">
            <div class="flex">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>
                <h2 class="sub-heading">Are You A Lawn
                    Care Professional?
                </h2>
            </div>
            <div class="parent-second-content">
                <p class="text">
                    Lawn Love makes it easy to grow your business by finding lawn care services jobs near you. Our app helps you with everything from finding, quoting, and completing new lawn jobs. Lawn Love will also plan your routes to make scheduling your jobs easy and worthwhile. We also ensure that you make money instantly and simply at the time of service with our in-app payment processing. Spend more time doing the work you love to do and leave the rest up to us.
                </p>
            </div>
        </div>
        <div class="home-sixth-section-card">
            <div class="home-sixth-section-card-content flex-total-center">
                <p class="text">Find out more about
                    becoming a Lawn Love pro.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>


    <!-- ------------------------ -->
    <!-- Home Blog section cards -->
    <!-- ------------------------ -->
    <section class="blog-cards-section-parent">
        <h2 class="sub-heading">
            Check Out Our New Pro Resources!
        </h2>
        <p class="text">
            Get started with some of our most popular articles.
        </p>
        <div class="blog-cards-parent-box grid grid-3">
            <a href="#">
                <div class="blog-cards-parent">
                    <div class="blog-cards-img">
                        <img src="<?= get_img() ?>/open-sign-shop.jpg" alt="open sign shop">
                    </div>
                    <div class="blog-cards-content">
                        <div class="blog-cards-btn">Starting a company</div>
                        <h4>How to start a company</h4>
                        <p class="text">Lawn Love makes it easy to grow your business by finding lawn care services jobs near you.</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="blog-cards-parent">
                    <div class="blog-cards-img">
                        <img src="<?= get_img() ?>/gardening-supplies.jpg" alt="open sign shop">
                    </div>
                    <div class="blog-cards-content">
                        <div class="blog-cards-btn">Starting a company</div>
                        <h4>How to start a company</h4>
                        <p class="text">Lawn Love makes it easy to grow your business by finding lawn care services jobs near you.</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="blog-cards-parent">
                    <div class="blog-cards-img">
                        <img src="<?= get_img() ?>/hundred-dollar-bills-closeup.jpg" alt="open sign shop">
                    </div>
                    <div class="blog-cards-content">
                        <div class="blog-cards-btn">Starting a company</div>
                        <h4>How to start a company</h4>
                        <p class="text">Lawn Love makes it easy to grow your business by finding lawn care services jobs near you.</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- seventh features section  -->
    <!-- ------------------------ -->
    <section class="home-seventh-section">
        <h2 class="sub-heading">Why Lawn Love ?</h2>
        <div class="features-parent grid grid-3">
            <div class="features">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>
                <h4>Easy One-Time Setup</h4>
                <p class="text">View pricing options, select a service plan, and schedule your service in just 5 minutes or less.</p>
            </div>
            <div class="features">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>
                <h4>Easy One-Time Setup</h4>
                <p class="text">View pricing options, select a service plan, and schedule your service in just 5 minutes or less.</p>
            </div>
            <div class="features">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>
                <h4>Easy One-Time Setup</h4>
                <p class="text">View pricing options, select a service plan, and schedule your service in just 5 minutes or less.</p>
            </div>
            <div class="features">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>
                <h4>Easy One-Time Setup</h4>
                <p class="text">View pricing options, select a service plan, and schedule your service in just 5 minutes or less.</p>
            </div>
            <div class="features">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>
                <h4>Easy One-Time Setup</h4>
                <p class="text">View pricing options, select a service plan, and schedule your service in just 5 minutes or less.</p>
            </div>
            <div class="features">
                <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M4.72 14.018L22.678 2.646a8 8 0 018.412-.092l19.042 11.487A8 8 0 0154 20.89v18.752a8 8 0 01-3.985 6.92L30.97 57.612a8 8 0 01-8.177-.088L4.838 46.588A8 8 0 011 39.756V20.777a8 8 0 013.72-6.759z" class="stroke-current" stroke-linejoin="round" stroke-width="2"></path>
                        <path class="fill-current" d="M33.903 32a69.355 69.355 0 01-1.532 2.319c4.653.684 7.035 2.15 7.035 2.88 0 .971-4.22 3.248-12.406 3.248-8.185 0-12.406-2.277-12.406-3.248 0-.73 2.381-2.195 7.035-2.88A69.41 69.41 0 0120.097 32C15.506 32.852 12 34.603 12 37.199 12 41.007 19.547 43 27 43c7.454 0 15-1.993 15-5.801 0-2.596-3.504-4.347-8.097-5.199z"></path>
                        <path class="fill-current" d="M26.994 13.304c-4.781 0-8.657 3.91-8.657 8.734 0 3.46 4.453 10.08 6.972 13.549.394.542 1.02.862 1.685.862a2.08 2.08 0 001.685-.862c2.518-3.468 6.972-10.089 6.972-13.55 0-4.823-3.876-8.733-8.657-8.733zm0 14.157c-2.825 0-5.123-2.319-5.123-5.168 0-2.85 2.298-5.17 5.123-5.17s5.123 2.32 5.123 5.17-2.298 5.168-5.123 5.168z"></path>
                        <path class="fill-current" d="M26.994 19.149c-1.718 0-3.116 1.41-3.116 3.144 0 1.732 1.398 3.143 3.116 3.143 1.718 0 3.116-1.41 3.116-3.143 0-1.735-1.398-3.144-3.116-3.144z"></path>
                    </g>
                </svg>
                <h4>Easy One-Time Setup</h4>
                <p class="text">View pricing options, select a service plan, and schedule your service in just 5 minutes or less.</p>
            </div>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- Eight insured section -->
    <!-- ------------------------ -->
    <?php include assurance; ?>

    <!-- ------------------------ -->
    <!-- Customer support section-->
    <!-- ------------------------ -->
    <?php include customer_support; ?>

    <!-- ------------------------ -->
    <!-- Review tenth card section -->
    <!-- ------------------------ -->
    <?php include reviews; ?>

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