<?php require_once 'config.php'; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>RSHOP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Beg - compiled -->
        <link rel="stylesheet" href="webroot/css/styles_min.css">
        <script src="webroot/js/scripts.js"></script>
        <!-- End - compiled -->
    </head>
    <body>
        <div class="wrapper">
            <!-- Beg - header -->
            <?php include('boxes/header.php'); ?>
            <!-- End - header -->

            <section class="content">
                <div class="container">
                    <!-- Beg - contact -->
                    <div class="row contact__wrapper">
                        <?php include('boxes/contact_general.php'); ?>
                    </div>

                    <div class="row contact__wrapper">
                        <?php include('boxes/contact_media.php'); ?>
                    </div>

                    <div class="row">
                        <?php include('boxes/contact_personal.php'); ?>
                    </div>
                    <!-- End - contact -->
                </div>
            </section>

            <!-- Beg - footer -->
            <?php include('boxes/footer.php'); ?>
            <!-- End - footer -->

            <div class="overlay overlay--white"></div>
        </div>

        <!-- Beg - aside stuff -->
        <?php include('boxes/footer_stuff.php'); ?>
        <!-- End - aside stuff -->
    </body>
</html>