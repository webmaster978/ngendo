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
                    <h2 class="mb-3">Incorporation is A Big Milestone for Your Business</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit,
                        quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro
                        adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore
                        perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae
                        voluptates soluta architecto tempora.</p>
                    <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat
                        sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem
                        soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet
                        fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
                    <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
                    <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
                        Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque.
                        Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos
                        odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
                    <p>
                        <img src="images/image_3.jpg" alt="" class="img-fluid">
                    </p>
                    <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo
                        quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis
                        vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint.
                        Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">finance</a>
                            <a href="#" class="tag-cloud-link">funds</a>
                            <a href="#" class="tag-cloud-link">invest</a>
                            <a href="#" class="tag-cloud-link">business</a>
                        </div>
                    </div>

                    <div class="about-author d-flex p-4 bg-light rounded">
                        <div class="bio me-md-4 img" style="background-image: url(images/person_1.jpg);"></div>
                        <div class="desc">
                            <h3>John Henderson</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                                necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa
                                sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        </div>
                    </div>
                    <div class="pt-5 mt-5">
                        <h3 class="mb-5" style="font-size: 34px;">6 Comments</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">January 27, 2021 at 7:20am</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>


                        </ul>

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5" style="font-size: 34px;">Leave a comment</h3>
                            <form action="#" class="p-4 p-lg-5 comment-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input type="url" class="form-control" id="website">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="" id="message" cols="30" rows="10"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">finance</a>
                            <a href="#" class="tag-cloud-link">fund</a>
                            <a href="#" class="tag-cloud-link">consult</a>
                            <a href="#" class="tag-cloud-link">business</a>
                            <a href="#" class="tag-cloud-link">funding</a>
                            <a href="#" class="tag-cloud-link">money</a>
                            <a href="#" class="tag-cloud-link">invest</a>
                            <a href="#" class="tag-cloud-link">plan</a>
                            <a href="#" class="tag-cloud-link">tax</a>
                        </div>
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