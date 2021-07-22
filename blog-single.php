<?php require('config/database.php');

$r = $db->query("SELECT * FROM blog  ORDER BY id desc LIMIT 3");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NGENDO || BLOGS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'partials/_link.php' ?>
</head>

<body>
    <?php include 'partials/_menu.php' ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 text-center mb-5">
                    <p class="breadcrumbs"><span class="me-2"><a href="acceuil">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span class="me-2"><a href="blog">Blog
                                <i class="fa fa-chevron-right"></i></a></span> <span>Blog detail
                            <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Blog Details</h1>
                </div>
            </div>
        </div>
    </section>
    <?php

    require 'config/database.php';
    $id = $_GET['id'];
    $req = $db->prepare('SELECT * FROM blog WHERE id = ?');
    $req->execute(array($id));


    ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row g-lg-5">
                <?php while ($g = $req->fetch()) { ?>
                <div class="col-lg-8">

                    <p>
                        <img src="admin/blogs/<?= $g['avatar']; ?>" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3"><?= $g['titre']; ?></h2>
                    <p>
                        <?= $g['contenue']; ?>




                    <div class="pt-5 mt-5">




                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-4 sidebar pl-md-4">
                    <div class="sidebar-box bg-light rounded">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <h3>Nos Services</h3>
                        <ul class="categories me-md-4">
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span>Saisie & impression</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span> Creation site et
                                    application sur mesure</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span>Maintenance & depanage</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span>Recyclage Cartouche</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span>Tirage livre</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span>Formation en
                                    Informatique</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span>Connexion Wifi</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward"></span>Vente Appareils et
                                    accessoirs informatique.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h3>Blog les plus recent</h3>
                        <?php while ($o = $r->fetch()) { ?>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img me-4"
                                style="background-image: url(admin/blogs/<?= $o['avatar']; ?>);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#"><?= $o['titre']; ?></a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> <?= $o['created_at']; ?></a>
                                    </div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                    <div><a href="#"><span class="fa fa-comment"></span> 0</a></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


                    </div>

                    <div class="sidebar-box">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
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

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 22:06:29 GMT -->

</html>