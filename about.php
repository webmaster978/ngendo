<?php require('config/database.php');

$team = $db->query("SELECT * FROM team  ORDER BY id desc LIMIT 4");
$o['id'] = 1;
$o['id'] = sha1(1);
// $id = sha1(1);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 22:06:21 GMT -->

<head>
    <title>NGENDO || ABOUT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'partials/_link.php' ?>
</head>

<body>
    <?php include 'partials/_menu.php' ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/0.png');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="acceuil">Acceuil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>A propos <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">A propos</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img w-100" style="background-image: url(images/boul.jpg);">
                    </div>
                </div>
                <div class="col-lg-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">About Union Corporation</span>
                        <h2 class="mb-4">More than 40M+ Trusted Our Financial &amp; Conusultation Institution</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="mt-4"><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <!-- <span class="subheading">Meet Our Brilliant Minds</span> -->
                    <h2 class="mb-5">Notre equipe</h2>
                </div>
            </div>
            <div class="row">
                <?php while ($t = $team->fetch()) { ?>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url(admin/img/<?= $t['image']; ?>);">
                            </div>
                        </div>

                        <div class="text text-center">
                            <h3 class="mb-2"><?= $t['nom']; ?></h3>
                            <span class="position mb-2"><?= $t['titre']; ?></span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p><?= $t['parole']; ?></p>
                            </div>
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
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"si":10,"rayId":"6431ad0eca2a4fc4","version":"2021.4.0"}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 22:06:21 GMT -->

</html>