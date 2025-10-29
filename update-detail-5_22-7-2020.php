<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/fvicon.ico">
    <title>Metrio Group</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="page-wrapper chiller-theme"><a id="show-sidebar" class="btn btn-sm btn-dark show-sidebar">    <i class="fas fa-bars metrio-menu-bar">Menu</i></a>
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="row desktop-menu">
            <div class="col-md-2 menu-col-1">
                <center><a href="index.php"><img src="image/menu-logo.png" class="img-fluid menu-logo" /></a></center>
            </div>
            <hr class="metrio-menu-hr-vertical" />
            <div class="col-md-7 menu-col-2">
                <ul>
                    <li class="metrio-menu-item"><a href="about.php"><span>ABOUT</span></a></li>
                    <li class="sidebar-dropdown metrio-menu-item">
                        <a href="#"><span>PROJECTS</span></a>
                        <div class="sidebar-submenu" style="display:none;">
                            <ul>
                                <li><a href="project-1.php">Northern</a></li>
                                <!--<li><a href="project-2.php">Central</a></li>-->
                            </ul>
                        </div>
                    </li>
                    <li class="metrio-menu-item active"><a href="update.php"><span>UPDATES</span></a></li>
                    <li class="metrio-menu-item"><a href="career.php"><span>CAREER</span></a></li>
                    <li class="metrio-menu-item"><a href="contact.php"><span>CONTACT</span></a></li>
                </ul>
            </div>
            <div class="col-md-2 text-right menu-col-3">
                <div id="close-sidebar" class="close-sidebar">
                    Close <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
        <div class="row mobile-menu">
            <div class="col-md-4 menu-col-1">
               <center><a href="index.php"><img src="image/menu-logo.png" class="img-fluid menu-logo" /></a></center>
            </div>
            <div class="col-md-6 menu-col-2" style=" border-left: .1rem solid #b1b1b3;">
                <ul>
                    <li class="metrio-menu-item"><a href="about.php"><span>ABOUT</span></a></li>
                    <li class="sidebar-dropdown metrio-menu-item">
                        <a href="#"><span>PROJECTS</span></a>
                        <div class="sidebar-submenu" style="display:none;">
                            <ul>
                                <li><a href="project-1.php">Northern</a></li>
                                <!--<li><a href="project-2.php">Central</a></li>-->
                            </ul>
                        </div>
                    </li>
                    <li class="metrio-menu-item active"><a href="update.php"><span>UPDATES</span></a></li>
                    <li class="metrio-menu-item"><a href="career.php"><span>CAREER</span></a></li>
                    <li class="metrio-menu-item"><a href="contact.php"><span>CONTACT</span></a></li>
                </ul>
            </div>
            <div class="col-md-2 text-right menu-col-3">
                <div id="close-sidebar" class="close-sidebar">
                    Close <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
        <div class="row mobile-menu-2">
            <div class="col-md-12">
                <p>
                    <a href="index.php"><img src="image/menu-logo.png" class="img-fluid menu-logo" /></a>
                    <span id="close-sidebar" class="close-sidebar float-right">
                        Close <i class="fas fa-times"></i>
                    </span>
                </p>
            </div>
            <div class="col-md-12">
                <ul>
                    <li class="metrio-menu-item"><a href="about.php"><span>ABOUT</span></a></li>
                    <li class="sidebar-dropdown metrio-menu-item">
                        <a href="#"><span>PROJECTS</span></a>
                        <div class="sidebar-submenu" style="display:none;">
                            <ul>
                                <li><a href="project-1.php">Northern</a></li>
                                <!--<li><a href="project-2.php">Central</a></li>-->
                            </ul>
                        </div>
                    </li>
                    <li class="metrio-menu-item active"><a href="update.php"><span>UPDATES</span></a></li>
                    <li class="metrio-menu-item"><a href="career.php"><span>CAREER</span></a></li>
                    <li class="metrio-menu-item"><a href="contact.php"><span>CONTACT</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- page-content -->
<main class="page-content">

<section class="detail-header">
<img src="image/update-detail-6.png" class="img-fluid mx-auto d-block"/>
</section>

<section class="detail-content">
    <div class="container">
        <div class="clear-1-5"></div>
        <p><strong>15 / 02 / 2019</strong><span class="float-right"><a class="back" href="update.php"><i class="fas fa-caret-left"></i> Back</a></span></p>
        <hr/>
        <div class="clear-1-5"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="metrio-title-1">Taman Mengkuang Jaya</p>
                <p>Latest Construction Progress</p>

                <p>83 units of 2 storey & 3 storey terrace house (Sold Out).</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php for ($i=1; $i <= 8; $i++) { ?>
                        <div class="col-md-4 col-content">
                            <img src="<?php echo 'image/update-detail-5/'.$i.'.jpeg' ?>" class="img-fluid" />
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include('component/contact.php'); ?>


</main>
<!-- page-content -->

</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
<!-- custom JavaScript -->
<script src="js/custom.js"></script>
</body>
</html>