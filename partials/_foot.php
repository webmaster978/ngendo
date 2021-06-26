<?php require('config/database.php');

$r = $db->query("SELECT * FROM blog  ORDER BY id desc LIMIT 2");
?>
<footer class="ftco-footer img" style="background-image: url(images/one.jpg);">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row mb-5 justify-content-between">
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo d-flex">
                        <a class="navbar-brand" href="#">
                            Maison<small> Ngendo</small>
                            <span>Partenaire pour la vie</span>
                        </a>
                    </h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                    </p>
                    <ul class="ftco-footer-social mt-4">
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <div class="d-md-flex">
                        <ul class="list-unstyled w-100">
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Saisie &
                                    impression</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Creation site et
                                    application sur mesure</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Maintenance &
                                    depanage</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Recyclage
                                    Cartouche</a></li>
                        </ul>
                        <ul class="list-unstyled w-100">
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Tirage livre</a>
                            </li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Formation en
                                    Informatique</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Connexion Wifi</a>
                            </li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Vente Appareils et
                                    accessoirs informatique</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Publication recente</h2>
                    <?php while ($o = $r->fetch()) { ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img img rounded"
                            style="background-image: url(admin/blogs/<?= $o['avatar']; ?>);"></a>
                        <div class="text">
                            <div class="meta">
                                <div><a href="#"><span class="fa fa-calendar"></span> <?= $o['created_at']; ?></a></div>
                                <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                            </div>
                            <h3 class="heading"><a href="#"><?= $o['titre']; ?></a></h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Avez-vous des questions</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain
                                    View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929
                                        210</span></a></li>
                            <li><a href="mailto:jtjoel11@gmail.com"><span class="icon fa fa-paper-plane"></span><span
                                        class="text"><span class="__cf_email__"
                                            data-cfemail="">jtjoel11@gmail.com</span></span></a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-darken">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0" style="font-size: 14px;">Copyright &copy; 2020 -<script data-cfasync="false"
                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with Ngendo <i
                            class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                            rel="nofollow noopener">Ngendo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>