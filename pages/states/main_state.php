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
    <link rel="stylesheet" href="<?= get_css() ?>states/main_state.css">

</head>

<body>
    <!-- ------------------------ -->
    <!-- Header starts here -->
    <!-- ------------------------ -->
    <?php include header; ?>

    <!-- ------------------------ -->
    <!-- First state section -->
    <!-- ------------------------ -->
    <section class="section-first-stats">
        <h2 class="sub-heading">
            Pennsylvania Lawn Care Statistics
        </h2>

        <div class="state-table-1">
            <h2 class="sub-heading">
                Average price of lawn mowing in Pennsylvania
            </h2>

            <table class="w-full text-left">
                <thead>
                    <tr class="state-table-1-first-row">
                        <th class="px-4 py-2">Frequency</th>
                        <th class="px-4 py-2">1/8 Acre</th>
                        <th class="px-4 py-2">1/4 Acre</th>
                        <th class="px-4 py-2">1/3 Acre</th>
                        <th class="px-4 py-2">1/2 Acre</th>
                        <th class="px-4 py-2">1 Acre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-grey-500">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">Every Two Weeks</td>
                        <td class="px-4 py-2">N/A</td>
                        <td class="px-4 py-2">N/A</td>
                        <td class="px-4 py-2">N/A</td>
                        <td class="px-4 py-2">N/A</td>
                        <td class="px-4 py-2">N/A</td>
                    </tr>
                </tbody>
                <p class="text">
                    Overall average price of lawn mowing in Pennsylvania: $42.68
                </p>
            </table>
        </div>

        <div class="state-table-1 state-table-2">
            <h2 class="sub-heading">
                Most common lawn services in Pennsylvania
            </h2>

            <table class="w-full text-left">
                <thead>
                    <tr class="state-table-1-first-row">
                        <th class="px-4 py-2">Service Type </th>
                        <th class="px-4 py-2">Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-grey-500">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">Mowing & Maintenance</td>
                        <td class="px-4 py-2">100.00%</td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div class="state-table-1">
            <h2 class="sub-heading">
                How prices, yard sizes, and frequencies differ by city in Pennsylvania
            </h2>

            <table class="w-full mx-auto text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2">City</th>
                        <th class="px-4 py-2">Average Mowing Price</th>
                        <th class="px-4 py-2">Average Lawn Size</th>
                        <th class="px-4 py-2">% Weekly</th>
                        <th class="px-4 py-2">% Biweekly</th>
                        <th class="px-4 py-2">% Monthly</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/pittsburgh-lawn-care">
                                Pittsburgh
                            </a>
                        </td>
                        <td class="px-4 py-2">$44.00</td>
                        <td class="px-4 py-2">4,674 sqft</td>
                        <td class="px-4 py-2">20.30%</td>
                        <td class="px-4 py-2">65.43%</td>
                        <td class="px-4 py-2">5.92%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/philadelphia-lawn-care">
                                Philadelphia
                            </a>
                        </td>
                        <td class="px-4 py-2">$39.20</td>
                        <td class="px-4 py-2">2,757 sqft</td>
                        <td class="px-4 py-2">9.07%</td>
                        <td class="px-4 py-2">72.93%</td>
                        <td class="px-4 py-2">7.20%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/lehigh-valley-lawn-care">
                                Allentown
                            </a>
                        </td>
                        <td class="px-4 py-2">$44.80</td>
                        <td class="px-4 py-2">7,627 sqft</td>
                        <td class="px-4 py-2">29.69%</td>
                        <td class="px-4 py-2">58.52%</td>
                        <td class="px-4 py-2">3.93%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/harrisburg-lawn-care">
                                Harrisburg
                            </a>
                        </td>
                        <td class="px-4 py-2">$50.40</td>
                        <td class="px-4 py-2">8,097 sqft</td>
                        <td class="px-4 py-2">35.25%</td>
                        <td class="px-4 py-2">49.18%</td>
                        <td class="px-4 py-2">4.10%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/scranton-lawn-care">
                                Scranton
                            </a>
                        </td>
                        <td class="px-4 py-2">$42.40</td>
                        <td class="px-4 py-2">4,569 sqft</td>
                        <td class="px-4 py-2">19.10%</td>
                        <td class="px-4 py-2">69.66%</td>
                        <td class="px-4 py-2">4.49%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/lancaster-lawn-care">
                                Lancaster
                            </a>
                        </td>
                        <td class="px-4 py-2">$44.80</td>
                        <td class="px-4 py-2">6,828 sqft</td>
                        <td class="px-4 py-2">44.44%</td>
                        <td class="px-4 py-2">47.22%</td>
                        <td class="px-4 py-2">N/A</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/pittsburgh-lawn-care/butler-lawn-care">
                                Butler
                            </a>
                        </td>
                        <td class="px-4 py-2">$44.00</td>
                        <td class="px-4 py-2">4,694 sqft</td>
                        <td class="px-4 py-2">20.86%</td>
                        <td class="px-4 py-2">65.93%</td>
                        <td class="px-4 py-2">5.45%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/pittsburgh-lawn-care/connellsville-lawn-care">
                                Connellsville
                            </a>
                        </td>
                        <td class="px-4 py-2">$43.20</td>
                        <td class="px-4 py-2">4,707 sqft</td>
                        <td class="px-4 py-2">20.97%</td>
                        <td class="px-4 py-2">65.35%</td>
                        <td class="px-4 py-2">6.14%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/pittsburgh-lawn-care/kittanning-lawn-care">
                                Kittanning
                            </a>
                        </td>
                        <td class="px-4 py-2">$43.20</td>
                        <td class="px-4 py-2">4,692 sqft</td>
                        <td class="px-4 py-2">19.93%</td>
                        <td class="px-4 py-2">65.47%</td>
                        <td class="px-4 py-2">6.03%</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-4 py-2 whitespace-no-wrap state-table-anchor">
                            <a href="https://lawnlove.com/pennsylvania/pittsburgh-lawn-care/uniontown-lawn-care">
                                Uniontown
                            </a>
                        </td>
                        <td class="px-4 py-2">$44.80</td>
                        <td class="px-4 py-2">4,688 sqft</td>
                        <td class="px-4 py-2">20.88%</td>
                        <td class="px-4 py-2">64.50%</td>
                        <td class="px-4 py-2">6.03%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- ------------------------ -->
    <!-- JS Files used in page  -->
    <!-- ------------------------ -->
    <?php include page_bottom; ?>
</body>

</html>