<?php require('config/database.php');
$s = $db->query("SELECT * FROM service");
$bb = $db->query("SELECT * FROM blog  ORDER BY id desc LIMIT 4");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 22:05:41 GMT -->

<head>
    <title>NGENDO || HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'partials/_link.php' ?>
</head>

<body>
    <?php include 'partials/_menu.php' ?>
    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">
            <div class="item">
                <div class="work">
                    <div class="img img2 d-flex align-items-center js-fullheight"
                        style="background-image: url(images/one.jpg);">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-7">
                                    <div class="text text-center mt-lg-5">
                                        <h1 class="mb-4">We're Always Here To Give Financial Help!</h1>
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <p><a href="#" class="btn btn-white p-4 py-3">Get Started <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center justify-content-center js-fullheight"
                        style="background-image: url(images/ng.jpg);">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-7">
                                    <div class="text text-center mt-lg-5">
                                        <h1 class="mb-4">Build Your Financial Plan With Our Specialists</h1>
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <p><a href="#" class="btn btn-white p-4 py-3">Get Started <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                    l
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-image img" style="background-image: url(images/4.png);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">About Union Corporation</span>
                    <h2 class="mb-4">Quality Makes the Belief for Customers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>

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

    <section class="ftco-gallery ftco-no-pb ftco-section">
        <div class="container-xl-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Les cas deja traites</span>
                    <h2 class="mb-4">Nous etudions chaque cas serieusement</h2>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <a href="images/one.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/one.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <a href="images/gallery-1.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <a href="images/gallery-3.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="images/gallery-4.jpg"
                        class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
                        style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                        <div class="text">
                            <h2 class="mb-0">Business Finance Consulting</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-counter img" style="background-image: url(images/j.png);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 heading-section heading-section-white text-center mb-5" data-aos="fade-up"
                    data-aos-duration="1000">
                    <span class="subheading">Great Reviews for our services</span>
                    <h2 class="mb-0">Statistic technique</h2>
                </div>
            </div>
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">5</span></h2>
                        <span class="caption">Ans d'experience</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">200</span></h2>
                        <span class="caption">Client satusfait </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">80</span></h2>
                        <span class="caption">Realisation</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2 class="number"><span class="countup">20</span></h2>
                        <span class="caption">Merites</span>
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
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">President &amp; CEO</span>
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
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">Nos client disent</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="ps-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Blogs</span>
                    <h2>Blogs les plus recents</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php while ($o = $bb->fetch()) { ?>
                <div class="col-md-6 col-lg-3 d-flex">

                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-detail" class="block-20 img"
                            style="background-image: url('admin/blogs/<?= $o['avatar']; ?>');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i><?= $o['created_at']; ?></span> <span><a
                                        href="#"><i class="fa fa-comment me-1"></i> 0 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#"><?= $o['titre']; ?></a>
                            </h3>
                            <p><?= $o['contenue']; ?></p>
                            <a href="blog-detail"
                                class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-link"></span></a>
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
        data-cf-beacon='{"si":10,"rayId":"6431ace90f134fc4","version":"2021.4.0"}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 22:06:17 GMT -->

</html>