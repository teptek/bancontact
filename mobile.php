<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link href="./dist/css/style.css" rel="stylesheet">
</head>
<body class="mobile">

<div class="row">
    <header>
        <div class="row">
            <div class="container">
                <div class="logo-bancontact col-md-12">
                    <?php include "img/logo-bancontact.svg" ?>
                </div>
                <div class="details col-md-12">
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
                    <a href="#" class="btn blue"><span class="fa fa-hand-o-right"></span>Open the app</a>
                    <p class="or">OR</p>
                    <a class="btn blue" role="button" data-toggle="collapse" href="#payment-form" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-credit-card"></span>Pay with your Bancontact Card</a>
                    <div class="collapse" id="payment-form">
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