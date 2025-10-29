<!doctype html>

<html lang="en">

<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 0px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 860px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  left: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

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

<div class="page-wrapper chiller-theme">

<a id="show-sidebar" class="btn btn-sm btn-dark show-sidebar">

    <i class="fas fa-bars metrio-menu-bar">Menu</i>

</a>

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

<img src="image/update-detail-7.png" class="img-fluid mx-auto d-block"/>

</section>



<section class="detail-content">

    <div class="container">

        <div class="clear-1-5"></div>

        <p><strong>5 / 3 / 2021</strong><span class="float-right"><a class="back" href="update.php"><i class="fas fa-caret-left"></i> Back</a></span></p>

        <hr/>

        <div class="clear-1-5"></div>

        <div class="row">

            <div class="col-md-6">

                <p class="metrio-title-1">Taman Mengkuang Ria @ Bukit Mertajam</p>

                <p>Latest Construction Progress</p>



                <p>
					Only 62 units!<br/>
					Call : 1700 816 898 / 04 589 9887<br/>
					Waze : <a href="https://waze.com/ul/hw0zqyd1ft">https://waze.com/ul/hw0zqyd1ft</a> <br/>
					Google Map : <a href="https://maps.app.goo.gl/tJPbJ6u4R5XVr8EF9">https://maps.app.goo.gl/tJPbJ6u4R5XVr8EF9</a> <br/>
					<ul>
						<li>0 Entry</li>
						<li>Free Legal Fees</li>
					</ul>
					<br/>
					Strategic Location<br/>
					<ul>
						<li>1.5km to Butterworth- Kulim Expressway (2min)</li>
						<li>7km to Bukit Mertajam</li>
						<li>11km to Seberang Jaya</li>
						<li>16km to Penang Bridge</li>
						<li>13km to Kulim Town</li>
					</ul>
				</p>

            </div>

            <div class="col-md-6">

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> Mar 2023 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=210; $i <= 229; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpeg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
                        	  </div>

<div class="row">
              			<p style="font-size:16px; color:cyan;"> <b> Jan 2023 </b> </p>
                              </div>
              			<div class="row">
              	<?php for ($i=201; $i <= 208; $i++) { ?>
              		<div class="col-md-4 col-content">
              			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpeg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
              		</div>
              	<?php } ?>
                          </div>

<div class="row">
              			<p style="font-size:16px; color:cyan;"> <b> Dec 2022 </b> </p>
                              </div>
              			<div class="row">
              	<?php for ($i=193; $i <= 200; $i++) { ?>
              		<div class="col-md-4 col-content">
              			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
              		</div>
              	<?php } ?>
                          </div>

              			<p style="font-size:16px; color:cyan;"> <b> Nov 2022 </b> </p>
                              </div>
              			<div class="row">
              	<?php for ($i=186; $i <= 192; $i++) { ?>
              		<div class="col-md-4 col-content">
              			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
              		</div>
              	<?php } ?>
                          </div>

              <div class="row">
              			<p style="font-size:16px; color:cyan;"> <b> Oct 2022 </b> </p>
                              </div>
              			<div class="row">
              	<?php for ($i=175; $i <= 185; $i++) { ?>
              		<div class="col-md-4 col-content">
              			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpeg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
              		</div>
              	<?php } ?>
                          </div>

                <div class="row">
                			<p style="font-size:16px; color:cyan;"> <b> Sep 2022 </b> </p>
                                </div>
                			<div class="row">
                	<?php for ($i=165; $i <= 174; $i++) { ?>
                		<div class="col-md-4 col-content">
                			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                		</div>
                	<?php } ?>
                            </div>

                  <div class="row">
                  			<p style="font-size:16px; color:cyan;"> <b> Aug 2022 </b> </p>
                                  </div>
                  			<div class="row">
                  	<?php for ($i=155; $i <= 164; $i++) { ?>
                  		<div class="col-md-4 col-content">
                  			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                  		</div>
                  	<?php } ?>
                              </div>

                    <div class="row">
                    			<p style="font-size:16px; color:cyan;"> <b> Jul 2022 </b> </p>
                                    </div>
                    			<div class="row">
                    	<?php for ($i=140; $i <= 154; $i++) { ?>
                    		<div class="col-md-4 col-content">
                    			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                    		</div>
                    	<?php } ?>
                                </div>

                      <div class="row">
                      			<p style="font-size:16px; color:cyan;"> <b> Jun 2022 </b> </p>
                                      </div>
                      			<div class="row">
                      	<?php for ($i=124; $i <= 139; $i++) { ?>
                      		<div class="col-md-4 col-content">
                      			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                      		</div>
                      	<?php } ?>
                                  </div>

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> May 2022 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=118; $i <= 123; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
                                    </div>

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> Apr 2022 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=111; $i <= 117; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
                              </div>

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> Mar 2022 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=102; $i <= 110; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
                              </div>

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> Feb 2022 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=91; $i <= 101; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
                                    </div>

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> Jan 2022 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=78; $i <= 90; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
                                    </div>

                        <div class="row">
                                <p style="font-size:16px; color:cyan;"> <b> Dec 2021 </b> </p>
                                          </div>
                                <div class="row">
                            <?php for ($i=65; $i <= 77; $i++) { ?>
                              <div class="col-md-4 col-content">
                                <img src="<?php echo 'image/update-detail-6/'.$i.'.jpeg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                              </div>
                            <?php } ?>
                              </div>

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> Oct 2021 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=60; $i <= 64; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpeg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
                                  </div>

                        <div class="row">
                        			<p style="font-size:16px; color:cyan;"> <b> Sep 2021 </b> </p>
                                        </div>
                        			<div class="row">
                        	<?php for ($i=47; $i <= 59; $i++) { ?>
                        		<div class="col-md-4 col-content">
                        			<img src="<?php echo 'image/update-detail-6/'.$i.'.jpeg' ?>"  onclick="<?php echo 'openModal();currentSlide('.$i.')'?>" class="img-fluid hover-shadow cursor"/>
                        		</div>
                        	<?php } ?>
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

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>

</html>
