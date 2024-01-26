<?php
$cn = mysqli_connect("localhost", "root", "", "ccbd_admission");
?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Student Registration System</title>
    <link rel="shourtcut icon" type="image/png" href="assets/img/student-profile.png">
</head>
  
<body>
    <!--================= Header-area ======================-->
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                        <i class="fa fa-graduation-cap"  style="font-size: 22px;"></i>
                            <span> AZ High School <span id="na"></span></span>
                        </a>
                    </div>
                </div>
    <!--================== Main menu-area ====================-->
                <div class="col-md-7">
                    <div class="main-menu">
                        <?php include('component/menu.php'); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>  
    <!-- main -->
    <br> <br> <br> <br> <br> <br>
    <style>
        .con-sec h3{
  
  background: #563d7c;
  padding: 10px;
  color: #fff;
  font-size: 30px;
  text-align: center;
  margin-bottom: 25px;
  
  width :650px;

}
    </style>
    <div class="con-sec">
					<h3>Contact Us</h3>
				</div>
    
    <form action="" method="post">
    
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
										<h5><label for="sname">Name</label>
										
										<p><input type="text" name="sname" value=""></p>
							
										<h5><label for="contact">contact</label><span class="error">
												
										<p><input type="text" name="contact" value=""></p>

										<h5><label for="email">email</label><span class="error">
												
										<p><input type="text" name="email" value=""></p>

                                            
										<button type="button" class="btn btn-info">Submit</button>
									</div>
								</div>
							</div>
						</form>
    <!--========================== Footer-area ===============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                            <i class="fa fa-graduation-cap"  style="font-size: 22px;"></i>
                                <span>AZ High School</span>
                            </a>
                            <p> AZ High school is both the educational institution and building designed to provide learning spaces and
                                 learning environments for the teaching of students under the direction of teachers.

                               
                            </p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="?a=student_add">admission</a></li>
                                <li><a href="?a=view">students</a></li>
                               
                                <li><a href="">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <span class="social-icon">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </span>
                </div>
                <p class="copy-right">Design & Development by <a href="">Sasindu Rashmika</a>  Copyright By <a href = "">AZ High School </a>
                  &copy;<?php echo date("M Y") ?> </p>
            </div>
        </div>
    </footer>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>  