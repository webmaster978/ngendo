<?php require('config/database.php');
$s = $db->query("SELECT * FROM service");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 22:06:21 GMT -->

<head>
    <title>NGENDO || SERVICES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'partials/_link.php' ?>
</head>

<body>
    <?php include 'partials/_menu.php' ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/n.png');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="acceuil">acceuil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Services <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Services</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">Nos Services Exclusives Que Nous Avons</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php while ($g = $s->fetch()) { ?>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flow-wrap flow-wrap-right">
                        <div class="icon">
                            <img class="im" src="images/<?= $g['image']; ?>">
                            <!-- <span class="flaticon-accounting"></span> -->
                        </div>
                        <div class="text">
                            <h2><?= $g['titre']; ?></h2>
                            <p class="mb-4"><?= $g['designation']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <?php include 'partials/_foot.php' ?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 22:06:21 GMT -->

</html>