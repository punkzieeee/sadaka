<!DOCTYPE html>
<?php session_start(); ?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="assets/images/sadaka-thumb.jpg">
        <title>Stock Darah | SADAKA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Modern -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
    </head>
    <style>
      header{
        position: fixed;
        top: 0;
        z-index: 1000;
        width: 100%;
      }
    </style>
    <body>
    <header class="main-header">  
        <nav class="navbar navbar-static-top">
            <div class="navbar-top">
              <div class="container">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a>+62 877 8654 8377 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a>bipel@sadaka.com</a> </li>
                       </ul> <!-- /.header-contact  -->                      
                    </div>
                    <div class="col-sm-6 col-xs-12 text-right">
                        <ul class="list-unstyled list-inline header-social">
                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-instagram"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                       </ul> <!-- /.header-social app  -->                  
                    </div>
                  </div>
              </div>
            </div>
            <div class="navbar-main">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="home.php"><img src="assets/images/sadaka-logo.png" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse pull-right">
                  <ul class="nav navbar-nav">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="home.php#our_causes">CAUSES</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="#contact_us">CONTACT</a></li>
                    <?php
                      if(isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        $con = mysqli_connect("localhost","root");
                        mysqli_select_db($con, "db_sadaka");
                        $result = mysqli_fetch_row(mysqli_query($con, "SELECT firstname,lastname FROM pengguna WHERE email='$email'"));
                        $name = $result[0]." ".$result[1];
                        echo "<li><a href=\"logout.php\"><button class=\"btn btn-info\">Log Out</button></a></li>";
                        echo "<li><a>Welcome, ".$name."</a></li>";
                      }else{
                        echo "<li><a href=\"#sign\"><button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#sign\">Sign Up</button></a></li>";
                        echo "<li><a href=\"#login\"><button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#login\">Login</button></a></li>";
                      }
                    ?>
                  </ul>
                </div> <!-- /#navbar -->
              </div> <!-- /.container -->
            </div> <!-- /.navbar-main -->
        </nav> 
    </header> <!-- /. main-header -->
    <!--Modal Sign Up-->
    <div class="modal fade" id="sign" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4><span class="glyphicon glyphicon-user"></span> Sign Up</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="register.php" method="post">
                <div class="form-group">
                  <form action="register.php" method="post">
                    <table width="80%">
                      <tr>
                      <div class="form-group">
                         <td><label>First Name: </label></td>
                         <td><input type="text" name="firstname" required="required"></td>
                      </div>
                      </tr>
                      <tr>
                      <div class="form-group">
                         <td><label>Last Name: </label></td>
                         <td><input type="text" name="lastname" required="required"></td>
                      </div>
                      </tr>
                      <tr>
                      <div class="form-group">
                        <td><label>Email: </label></td>
                        <td><input type="text" name="email" placeholder="example@email.com" required="required"></td>
                      </div>
                      </tr>
                      <tr>
                      <div class="form-group">
                       <td><label>Password: </label></td>  
                       <td><input type="password" name="password" placeholder="Password" required="required"><br></td>
                      </div>
                      </tr>
                      <tr><div class="form-group"><td><br></td><td><br></td></div></tr>
                      <tr>
                      <td></td>
                      <td><button type="reset" class="btn btn-default">Reset</button>
                      <button type="submit" class="btn btn-default">Submit</button></td>
                      </tr>
                    </table>
                  </form>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!--Modal Login-->
    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4><span class="fa fa-sign-in"></span> Login</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="checklogin.php" method="post">
                <div class="form-group">
                <form action="checklogin.php" method="post">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="forgot">
                    <label><a href="#forgotpass" data-dismiss="modal" data-toggle="modal" data-target="#forgotpass">Forgot Password?</a></label>
                  </div>
                  <br>
                  <button type="reset" class="btn btn-default">Reset</button>
                  <button type="submit" class="btn btn-default">Submit</button>
              </div>
                </form>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Forgot Password-->
    <div class="modal fade" id="forgotpass" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4><span class="fa fa-question"></span> Forgot Password?</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="forgotpass.php" method="post">
                <div class="form-group">
                <form action="forgotpass.php" method="post">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com">
                  </div>
                  <div class="form-group">
                    <label for="pwd">New Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                  <br>
                  <button type="reset" class="btn btn-default">Reset</button>
                  <button type="submit" class="btn btn-default">Submit</button>
              </div>
                </form>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <!-- NAVBAR
    ================================================== -->
  	<div class="page-heading text-center">
  		<div class="container zoomIn animated">
  			<h1 class="page-title">Stock Darah<span class="title-under"></span></h1>
  			<p class="page-description">
  				SADAKA | Charity And Blood Donation
  			</p>
  		</div>
  	</div>
    <div class="section-home about-us">
      <div id="mainContainer" class="container">
        <div class="shadowBox">
          <div class="page-container">
            <div class=" container">
            </div>     
          </div>
        </div>
      <table class="table table-bordered" border="1">
        <thead>
          <tr>
            <th scope="col" class="bg-success" width="20%">Rhesus / Golongan Darah</th>
            <th scope="col" class="bg-success">A</th>
            <th scope="col" class="bg-success">B</th>
            <th scope="col" class="bg-success">O</th>
            <th scope="col" class="bg-success">AB</th>
            <th scope="col" class="bg-success">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $con = mysqli_connect("localhost","root");
          if (!$con){ die('Could not connect: ' . mysqli_error()); }
          mysqli_select_db($con, "db_sadaka");
          // mengambil jumlah stok dari setiap golongan darah dan rhesus
          $rowaplus = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='A' AND rhesus = '+'")); // A+
          $rowbplus = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='B' AND rhesus = '+'")); // B+
          $rowabplus = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='AB' AND rhesus = '+'")); // AB+
          $rowoplus = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='O' AND rhesus = '+'")); // O+
          $rowaneg = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='A' AND rhesus = '-'")); // A-
          $rowbneg = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='B' AND rhesus = '-'")); // B-
          $rowabneg = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='AB' AND rhesus = '-'")); // AB-
          $rowoneg = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(goldar) FROM pendonor where goldar='O' AND rhesus = '-'")); // O-
          $rowplus = $rowaplus[0]+$rowbplus[0]+$rowabplus[0]+$rowoplus[0];
          $rowneg = $rowaneg[0]+$rowbneg[0]+$rowabneg[0]+$rowoneg[0];
          echo "<tr>
                  <th class=\"bg-success\">+</th>
                  <th>".$rowaplus[0]."</th>
                  <th>".$rowbplus[0]."</th>
                  <th>".$rowoplus[0]."</th>
                  <th>".$rowabplus[0]."</th>
                  <th>".$rowplus."</th>
                </tr>
                <tr>
                  <th class=\"bg-success\">-</th>
                  <th>".$rowaneg[0]."</th>
                  <th>".$rowbneg[0]."</th>
                  <th>".$rowoneg[0]."</th>
                  <th>".$rowabneg[0]."</th>
                  <th>".$rowneg."</th>
                </tr>
                <tr>
                  <th class=\"bg-success\">Sub Total</th>
                  <th>".($rowaplus[0]+$rowaneg[0])."</th>
                  <th>".($rowbplus[0]+$rowbneg[0])."</th>
                  <th>".($rowoplus[0]+$rowoneg[0])."</th>
                  <th>".($rowabplus[0]+$rowabneg[0])."</th>
                  <th>".($rowplus+$rowneg)."</th>
                </tr>";
          ?>
        </tbody>
      </table>
      <script>
        // mencetak tgl hari ini
        var d = new Date();
        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        document.write("<p>Update per tanggal " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear() + "</p>");
      </script>
      </div> <!-- /.row -->
    </div>
    <footer class="main-footer" id="contact_us">
          <div class="footer-top">       
          </div>
          <div class="footer-main">
              <div class="container">                 
                  <div class="row">
                      <div class="col-md-4">
                          <div class="footer-col">
                              <h4 class="footer-title">About us<span class="title-under"></span></h4>
                              <div class="footer-content">
                                  <p>
                                      <strong>Sadaka</strong>  adalah website yang bertujuan untuk membantu para donatur dalam melakukan donasi charity atau donor darah dengan mudah dan dapat dilakukan dimanapun kapanpun.
                                  </p> 

                                  <p>
                                      Serta memberi informasi untuk melihat stok darah,jadwal donor darah, dan data pasien yang membutuhkan darah dan juga info untuk charity diberbagai bidang.
                                  </p>
                              </div>                              
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="footer-col">
                              <h4 class="footer-title">VISI DAN MISI<span class="title-under"></span></h4>
                              <div class="footer-content">
                                   <p> 
                                    Visi:
                                    Menjadi suatu organisasi profesional yang memiliki tujuan ikut membantu dan memajukan serta mensejahterahkan masyarakat indonesia. Menjadi suatu organisasi profesional yang berlandaskan Pancasila dan UUD 1945.
                                </p>
                                <p> 
                                    Misi:
                                    Mengajak masyarakat umum, badan usaha & komunitas lain yang memiliki jiwa sosial untuk ikut serta dalam penggalangan bantuan berupa sumbangan materi, tenaga serta pikiran yang bermanfaat bagi masyarakat kurang mampu di Indonesia. Turut serta membantu pemerintah mensejahterahkan masyarakat indonesia yang kurang mampu dengan cara memberikan bantuan/sumbangan sembako, barang atau uang sesuai kebutuhan rutin Membantu mewujudkan masyarakat indonesia yang peduli akan lingkungan sekitar.
                                </p>
                              </div>                              
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="footer-col">
                              <h4 class="footer-title">Contact us<span class="title-under"></span></h4>
                              <div class="footer-content">
                                  <div class="footer-form">
                                    <div class="footer-form" >
                                    <form name="contact" action="contactus.php" class="ajax-form" onsubmit="resetform()">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                        </div>
                                         <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>
                                        </div>
                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                    </form>
                                    <script> 
                                       function resetform() {
                                        if (document.forms["contact"]["name"].value != "" || document.forms["contact"]["email"].value != "" || document.forms["contact"]["message"].value != ""){
                                          alert("Thank You For Contact Us");
                                          location.reload();
                                        }
                                      } 
                                    </script>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
          <div class="footer-bottom">
              <div class="container text-right">
                 Sadaka | Charity and Blood Donation &copy; BiPel
              </div>
          </div>          
    </footer>      
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>
    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
