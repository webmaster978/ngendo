<?php require('part/_header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN || NGENDO</title>

    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <link rel="icon" type="images/png" href="../images/n.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/style.css" type="image/x-icon">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> -->
    <link href="summernote/summernote.min.css" rel="stylesheet">
    <!-- CodeMirror -->
    <!-- <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css"> -->
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'part/_nav.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'part/_menu.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blogs</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Redaction blog</li>
                            </ol>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    rediger le blog

                                </h3>
                            </div>

                            <?php
                if(isset($_GET['effectuer'])){
                    $eff = $_GET['effectuer '];
                    if($eff ==0)
                       
                   ?>


                            <script type="text/javascript">
                            let timerInterval
                            Swal.fire({
                                title: 'Message envoyer avec succes',
                                html: 'Merci de votre confiance',
                                timer: 2000,
                                timerProgressBar: true,
                                willOpen: () => {
                                    Swal.showLoading()
                                    timerInterval = setInterval(() => {
                                        const content = Swal.getContent()
                                        if (content) {
                                            const b = content.querySelector('b')
                                            if (b) {
                                                b.textContent = Swal.getTimerLeft()
                                            }
                                        }
                                    }, 100)
                                },
                                onClose: () => {
                                    clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                /* Read more about handling dismissals below */
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    console.log('I was closed by the timer')
                                }
                            })
                            </script>
                            <?php 
                }

                ?>

                            <div class="card-body">
                                <form action="i.php" method="post" enctype="multipart/form-data">
                                    <div class=" row">
                                        <div class="col-6">
                                            <div class="form-control-groups">
                                                <input class="form-control" type="text" name="titre" id=""
                                                    placeholder="titre du blog" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <input type="file" name="img" required>
                                    <br>




                                    <div class="form-group mb-3">
                                        <textarea id="summernote" class="form-control" name="cont"></textarea>
                                    </div>


                                    <br>

                                    <input class="btn btn-primary" type="submit" value="Publier">
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->

                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include 'part/_footer.php' ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>


    <!-- suu new -->

    <script src="popper.js"></script>
    <script src="bootstrap.js"></script>
    <script src="summernote/summernote.min.js"></script>
    <script src="main.js"></script>
    <!-- suu -->
    <!-- Summernote -->
    <!-- <script src="plugins/summernote/summernote.min.js"></script> -->

    <!-- CodeMirror -->
    <!-- <script src="plugins/codemirror/codemirror.js"></script>
    <script src="plugins/codemirror/mode/css/css.js"></script>
    <script src="plugins/codemirror/mode/xml/xml.js"></script>
    <script src="plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->


</body>

</html>