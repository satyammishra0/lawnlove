<?php include_once '../../init.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services- Lawn mowing</title>


    <?php include cssFiles; ?>

    <!-- ------------------------ -->
    <!-- Page style sheets here -->
    <!-- ------------------------ -->
    <link rel="stylesheet" href="<?= get_css() ?>/home.css">
</head>

<body>
    <!-- ------------------------ -->
    <!-- Header starts here -->
    <!-- ------------------------ -->
    <?php include header; ?>

    <!-- ------------------------ -->
    <!-- First section starts here  -->
    <!-- ------------------------ -->
    <section class="lawn-first-section">
        
    </section>


    <!-- ------------------------ -->
    <!-- Eight insured section -->
    <!-- ------------------------ -->
    <?php include assurance; ?>

    <!-- ------------------------ -->
    <!-- Customer support section-->
    <!-- ------------------------ -->
    <?php include customer_support ?>

    <!-- ------------------------ -->
    <!-- Review tenth card section -->
    <!-- ------------------------ -->
    <?php include reviews; ?>

    <!-- ------------------------ -->
    <!-- Footer card section -->
    <!-- ------------------------ -->

    <!-- ------------------------ -->
    <!-- JS Files used in page  -->
    <!-- ------------------------ -->
    <?php include page_bottom; ?>
</body>

</html>