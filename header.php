<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">

    <!-- google icon -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>smsAdel</title>
</head>

<body>


    <!-- topnav -->
    <div class="container-fluid" style="padding: 0 10% 0 10%">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="mailto:info@smsadel.com"></a><i class="bi bi-envelope"> info@smsadel.com</i></a>
                    <a href="tel:+919773926687" style="border-left: 1px solid black; text-decoration: none;"> <i class="bi bi-telephone-fill">
                            +919773926687</i></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-row-reverse">
                <div class="sicon">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- topnav end -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white" style="padding: 0 10% 0 10%">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="font-size: 30px; font-weight: bold;">SMS<span
                    style="color: blue;">Adel</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="bulk-sms.php" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="bulk-sms.php">BULK SMS</a></li>
                            <li><a class="dropdown-item" href="otp-api.php">OTP/API</a></li>
                            <li><a class="dropdown-item" href="whatsapp-bulk-sms.php">WhatsApp Bulk SMS</a></li>
                            <li><a class="dropdown-item" href="voice-call.php">Voice Call</a></li>
                            <li><a class="dropdown-item" href="bulk-mailer.php">Bulk Mailer</a></li>
                            <li><a class="dropdown-item" href="sim-base.php">Sim Base</a></li>
                            <li><a class="dropdown-item" href="database-pan-india.php">Database Pan India</a></li>
                            <li><a class="dropdown-item" href="ivr.php">IVR</a></li>
                            <li><a class="dropdown-item" href="toll-free-no.php">Toll Free Number</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="#contact">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        $('.dropdown').hover(function () {
            $('.dropdown-toggle', this).trigger('click');
        });
    </script>

    <!-- navbar end -->