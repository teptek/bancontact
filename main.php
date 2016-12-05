<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link href="./dist/css/style.css" rel="stylesheet">
</head>
<body>

<div class="row">
    <header>
        <div class="row">
            <div class="container">
                <div class="logo-bancontact col-md-6">
                    <?php include "img/logo-bancontact.svg" ?>
                </div>
                <div class="details col-md-6">
                    <ul>
                        <li>
                            <div class="details-title">Order reference</div>
                            <div class="details-infos">5741684516854</div>
                        </li>
                        <li>
                            <div class="details-title">Total price</div>
                            <div class="details-infos">35 EUR</div>
                        </li>
                        <li>
                            <div class="details-title">Beneficiary</div>
                            <div class="details-infos">Merchant</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="title">
        <div class="row">
            <div class="container">
                <h1>Choose your payment method</h1>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="row">
            <div class="container">
                <div class="page-content">
                    <div class="col-md-6 qr-content">
                        <div class="fa fa-mobile"></div>
                        <h2>
                            Pay with the app
                        </h2>
                        <?php include "template/qr.php" ?>
                    </div>
                    <div class="col-md-6 payment-content">
                        <div class="fa fa-credit-card"></div>
                        <h2>
                            Pay with your Bancontact Card
                        </h2>
                        <?php include "template/payment-form.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "template/dependencies.php" ?>
</body>
</html>