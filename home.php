<!DOCTYPE html>
<?php session_start(); ?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="assets/images/sadaka-thumb.jpg">
        <title>SADAKA | Charity And Blood Donation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
    </head>
    <style>
      * {box-sizing: border-box}
      /* Style the tab */
      #tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 20%;
        height: 500px;
      }
      /* Style the buttons that are used to open the tab content */
      #tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
      }
      /* Change background color of buttons on hover */
      #tab button:hover {
        background-color: #ddd;
      }
      /* Create an active/current "tab button" class */
      #tab button.active {
        background-color: #ccc;
      }
      /* Style the tab content */
      #daftar {
        background-color: white;
        float: left;
        padding: 0px 12px;
        border: 1px solid #ccc;
        width: 80%;
        height: 500px;
        border-left: none;
      }
      #lihat {
        background-color: white;
        float: left;
        padding: 0px 12px;
        border: 1px solid #ccc;
        width: 80%;
        height: 500px;
        border-left: none;
      }
      div.scroll {
        background-color: white;
        overflow: auto;
        white-space: nowrap;
      }
      div.scroll a:hover {
        background-color: #777;
      }
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
                    <li><a class="is-active" href="home.php">HOME</a></li>
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
                  </form>
                </div>
              </form>
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
                  </form>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <br><br><br><br>
    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/images/slider/home-slider-1.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow">Karena mereka membutuhkan bantuan kita.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down!</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
            <div class="item ">
              <img src="assets/images/slider/home-slider-2.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow">Bersama kita dapat meningkatkan kehidupan mereka.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> So, let's do it!</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
            <div class="item ">
              <img src="assets/images/slider/home-slider-3.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow" >Tidak ada yang pernah menjadi miskin karena memberi.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence!</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
          </div>
          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div><!-- /.carousel -->
    <div class="section-home about-us fadeIn animated">
        <div class="container">
            <div class="row">
                  <!-- /.carousel untuk stok darah-->
                <div class="col-md-3 col-sm-6">
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/darah.png" alt="">
                        </div>
                        <h3 class="col-title">STOCK DARAH</h3>
                        <div class="col-details">
                          <p>Stock Darah sesuai dengan data yang terbaru.</p>
                        </div>
                        <a href="stokdarah.php" class="btn btn-primary">Lihat Stock</a>
                  </div>
                </div>
                  <!-- /.carousel untuk jadwal donor -->
                <div class="col-md-3 col-sm-6">
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/check.png" alt="">
                        </div>
                        <h3 class="col-title">JADWAL & TEMPAT</h3>
                        <div class="col-details">
                          <p>Jadwal donor sewaktu-waktu dapat berubah. Silahkan Klik "Lihat Jadwal" untuk melihat jadwal dan tempat donor darah.</p>
                        </div>
                        <a href="jadwaldonor.php" class="btn btn-primary">Lihat Jadwal</a>
                  </div>
                </div>
                  <!-- /.carousel unutk butuh darah --> 
                <div class="col-md-3 col-sm-6">
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/butuhdarah.png" alt="">
                        </div>
                        <h3 class="col-title">BUTUH DARAH</h3>
                        <div class="col-details">
                          <p>Informasi data pasien yang membutuhkan darah.</p>
                        </div>
                        <a href="butuhdarah.php" class="btn btn-primary">Butuh Darah</a>
                  </div>
                </div>
                  <!-- /.carousel untuk pendonor -->
                <div class="col-md-3 col-sm-6">
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/pendonor.png" alt="">
                        </div>
                        <h3 class="col-title">PENDONOR</h3>
                        <div class="col-details">
                          <p>Informasi mengenai data pendonor, baik data personal maupun data yang terkait dengan pendonoran.</p>
                        </div>
                        <?php
                        if(isset($_SESSION['email'])){
                          echo "<button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#pendonorModal\">Lihat/Daftar</button>";
                        }else{
                          echo "<button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#login\">Login Pengguna</button>";
                        }
                        ?>
                  </div>
                </div>
            </div>
        </div>
    </div> <!-- /.about-us -->
    <div class="section-home home-reasons">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/charity.jpg" alt="">
                        <div class="reasons-titles">
                            <h3 class="reasons-title">We fight together</h3>
                            <h5 class="reason-subtitle">We are human</h5>
                        </div>
                        <div class="on-hover hidden-xs">
                                <p>Anda belum hidup hari ini sampai Anda melakukan sesuatu untuk seseorang yang tidak pernah bisa membalas Anda. - John Bunyan.</p>
                                <p>Nilai seseorang terletak pada apa yang ia berikan dan bukan dalam apa yang mampu ia terima. - Albert Einstein.</p>
                                <p>Jangan pernah merasa malu ketika hanya mampu memberi sedikit untuk bersedekah, karena selalu ada kebaikan dalam berbagi, tidak peduli seberapa kecil yang kamu berikan. – Ali bin Abi Thalib.</p>
                                <p>The only disability in life is a bad attitude! - Pramudito Ramadhan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/donor.jpg" alt="">
                        <div class="reasons-titles">
                            <h3 class="reasons-title">We care about each other</h3>
                            <h5 class="reason-subtitle">We are human</h5>
                        </div>
                        <div class="on-hover hidden-xs">
                                <p>Darah untuk kehidupan. Mendonor darah berarti kita telah menolong sesama untuk hidup. Setetes darah kita, berarti bagi mereka. Donor darah adalah sesuatu yang bermanfaat, bukan hanya untuk yang mendapatkan, akan tetapi untuk pendonornya juga. Menurut ahli medis, donor darah dapat meningkatkan kesehatan dan kebugaran. Artinya ketika kita melakukan donor darah, kita sudah peduli terhadap sesama dan kesehatan sendiri. Sudah saatnya kita peduli terhadap sesama, berbagi apa yang dimiliki. Berdonor darah tidak harus menunggu punya dan kaya.</p>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div> <!-- /.home-reasons -->
    <div class="section-home our-causes animate-onscroll fadeIn">
        <div class="container">
            <h2 class="title-style-1" id="our_causes">Our Causes<span class="title-under"></span></h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">
                        <div class="progress cause-progress">
                          <?php
                            $con = mysqli_connect("localhost","root");
                            if (!$con){ die('Could not connect: ' . mysqli_error()); }
                            mysqli_select_db($con, "db_sadaka");
                            $hgr = "SELECT SUM(amount) FROM donation WHERE causes='hunger'";
                            $result = mysqli_fetch_row(mysqli_query($con, $hgr));
                            $percent = $result[0];
                            $progress = ($percent * 100) / 100000000;
                            echo "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"".$progress."\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ".$progress."%;\">".$progress."%</div>";
                          ?>                          
                        </div>
                        <h4 class="cause-title"><a>HUNGER AND POVERTY</a></h4>
                        <div class="cause-details">
                            Ada banyak orang yang kelaparan di dunia ini, namun Tuhan tidak dapat muncul di hadapan mereka kecuali dalam bentuk roti. Donasi ini akan ditujukan kepada mereka yang miskin dan tidak punya apa apa.
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>                          
                        </div>
                    </div> <!-- /.cause -->                    
                </div> 
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">
                        <div class="progress cause-progress">
                          <?php
                            $con = mysqli_connect("localhost","root");
                            if (!$con){ die('Could not connect: ' . mysqli_error()); }
                            mysqli_select_db($con, "db_sadaka");
                            $edu = "SELECT SUM(amount) FROM donation WHERE causes='education'";
                            $result = mysqli_fetch_row(mysqli_query($con, $edu));
                            $percent = $result[0];
                            $progress = ($percent * 100) / 100000000;
                            echo "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"".$progress."\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ".$progress."%;\">".$progress."%</div>";
                          ?> 
                        </div>
                        <h4 class="cause-title"><a>EDUCATION AND TRAINING</a></h4>
                        <div class="cause-details">
                            Jika seseorang bepergian dengan tujuan mencari ilmu, maka Allah akan menjadikan perjalanannya seperti perjalanan menuju surga. Donasi ini akan ditujukan untuk membantu dibidang pendidikan dan pelatihan.
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                        </div>
                    </div> <!-- /.cause -->                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">
                        <div class="progress cause-progress">
                          <?php
                            $con = mysqli_connect("localhost","root");
                            if (!$con){ die('Could not connect: ' . mysqli_error()); }
                            mysqli_select_db($con, "db_sadaka");
                            $rgt = "SELECT SUM(amount) FROM donation WHERE causes='rights'";
                            $result = mysqli_fetch_row(mysqli_query($con, $rgt));
                            $percent = $result[0];
                            $progress = ($percent * 100) / 100000000;
                            echo "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"".$progress."\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ".$progress."%;\">".$progress."%</div>";
                          ?> 
                        </div>
                        <h4 class="cause-title"><a>HUMAN RIGHTS</a></h4>
                        <div class="cause-details">
                            Hak asasi dimulai dari tempat dimana semua manusia mendapat perlakuan sama, kesempatan sama, tanpa diskriminasi. Donasi ini ditujukan untuk membela hak asasi manusia.
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                        </div>
                    </div> <!-- /.cause -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-culture.jpg" alt="" class="cause-img">
                        <div class="progress cause-progress">
                          <?php
                            $con = mysqli_connect("localhost","root");
                            if (!$con){ die('Could not connect: ' . mysqli_error()); }
                            mysqli_select_db($con, "db_sadaka");
                            $art = "SELECT SUM(amount) FROM donation WHERE causes='culture'";
                            $result = mysqli_fetch_row(mysqli_query($con, $art));
                            $percent = $result[0];
                            $progress = ($percent * 100) / 100000000;
                            echo "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"".$progress."\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ".$progress."%;\">".$progress."%</div>";
                          ?> 
                        </div>
                        <h4 class="cause-title"><a>ARTS AND CULTURE</a></h4>
                        <div class="cause-details">
                            Seni budaya adalah cara hidup dan berkembang secara bersama-sama yang mempunyai unsur keindahan (estetika). Donasi ini ditujukan untuk membantu dan mengembangkan dibidang seni dan budaya.</div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                        </div>
                    </div> <!-- /.cause -->      
                </div>
            </div>
        </div>    
    </div> <!-- /.our-causes -->
    <!-- /.our-Sponsor image -->
    <div class="section-home our-sponsors animate-onscroll fadeIn">   
        <div class="container">
            <h2 class="title-style-1">Our Sponsors<span class="title-under"></span></h2>
            <ul class="owl-carousel list-unstyled list-sponsors">
              <li> <img src="assets/images/sponsors/bus.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/wikimedia.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/one-world.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/wikiversity.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/united-nations.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/pmi.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/uni.jpg" alt=""> </li>
              <li> <img src="assets/images/sponsors/tos.jpg" alt=""> </li>
              <li> <img src="assets/images/sponsors/yarsi.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/rscm.png" alt=""> </li>
              <li> <img src="assets/images/sponsors/rsij.png" alt=""> </li>
            </ul>
        </div>
    </div> <!-- /.our-sponsors -->
    <footer class="main-footer" id="contact_us">
        <div class="footer-top">
        </div>
        <div class="footer-main">
            <div class="container">  
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4 class="footer-title">About us <span class="title-under"></span></h4>
                            <div class="footer-content">
                                <p>
                                    <strong>Sadaka</strong> adalah website yang bertujuan untuk membantu para donatur dalam melakukan donasi atau donor darah dengan mudah dan dapat dilakukan dimanapun kapanpun.
                                </p> 
                                <p>
                                    Serta memberi informasi untuk melihat stok darah, jadwal donor darah, dan data pasien yang membutuhkan darah dan juga info untuk charity diberbagai bidang.
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
    </footer> <!-- main-footer -->
    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">
                <form class="form-donation" name="donation" id="donation" action="donation.php" method="post" onsubmit="resetdonation()">
                  <h3 class="title-style-1 text-center">Thank you for your donation<span class="title-under"></span></h3>
                  <div class="row">
                      <div class="form-group col-md-12">
                          <select class="form-control" form="donation" id="causes" name="causes" required="required">
                             <option value="hunger">HUNGER AND POVERTY</option>
                             <option value="education">EDUCATION AND TRAINING</option>
                             <option value="rights">HUMAN RIGHTS</option>
                             <option value="culture">ARTS AND CULTURE</option>
                          </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-12">
                          <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount (Rp.)" required="required">
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name*" required="required">
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name*" required="required">
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email*" required="required">
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-12">
                          <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-12">
                          <textarea cols="30" rows="4" class="form-control" id="note" name="note" placeholder="Additional Note"></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-12">
                          <button type="submit" class="btn btn-primary pull-right" id="donateNow" name="donateNow">DONATE NOW</button>
                      </div>
                  </div>
                </form>
                <script> 
                  function resetdonation() {
                    if (document.forms["donation"]["amount"].value != "" || document.forms["donation"]["firstName"].value != "" || document.forms["donation"]["lastName"].value != "" || document.forms["donation"]["email"].value != "") {
                      alert("Thank You For Donating");
                    }    
                  }  
                </script>           
          </div>
        </div>
      </div>
    </div> <!-- /.modal -->
    <!-- Data Pendonor Modal -->
    <div class="modal fade" id="pendonorModal" tabindex="-1" role="dialog" aria-labelledby="pendonorModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width: 1250px">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DATA PENDONOR</h4>
          </div>
          <div class="modal-body" id="tab">
            <button class="tablinks" onclick="pilihanDonor(event, 'daftar')" id="defaultOpen">Daftar Pendonor/Resipien</button>
            <button class="tablinks" onclick="pilihanDonor(event, 'lihat')">Lihat Data Pendonor</button>
          </div>
          <div id="daftar" class="tabcontent">
            <form role="form" action="insert.php" method="post">
              <div class="form-group">
                <form action="insert.php" method="post">
                  <table width="80%">
                    <tr>
                    <div class="form-group">
                       <td><label>Status: </label></td>
                       <td><input type="radio" id="donor" name="status" value="Donor" required="required" onclick="pendonorClicked()"> Donor &nbsp;<input type="radio" id="resipien" name="status" value="Resipien" required="required" onclick="pendonorClicked()"> Resipien</td>
                    </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                     <td><label>Date Needed: </label></td>
                     <td><input type="date" name="tglbutuh" required="required" disabled="disabled" id="tglbutuh" />
                     <font color="azure">(mm-dd-yyyy)</font></td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                     <td><label>Name: </label></td>
                     <td><input type="text" name="nama" required="required" placeholder="Your Name"></td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                     <td><label>Birth Date: </label></td>
                     <td><input type="date" name="tgllahir" required="required"/>
                     <font color="azure">(mm-dd-yyyy)</font></td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                     <td><label>Gender: </label></td>
                     <td><input type="radio" id="laki" name="jk" value="L" required="required"> Male &nbsp;<input type="radio" id="perempuan" name="jk" value="P" required="required"> Female</td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                     <td><label>Blood Group: </label></td>
                     <td><input type="radio" name="goldar" value="A" required="required"> A <input type="radio" name="goldar" value="B" required="required"> B <input type="radio" name="goldar" value="AB" required="required"> AB <input type="radio" name="goldar" value="O" required="required"> O</td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                     <td><label>Rhesus: </label></td>
                     <td><input type="radio" name="rhesus" value="+" required="required"> + <input type="radio" name="rhesus" value="-" required="required"> -</td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                    <td><label>Blood Needed: </label></td>
                    <td><input type="number" name="jumlah" required="required" disabled="disabled" id="jumlah" min="1" max="10" value="1"></td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                     <td><label>Telephone: </label></td>
                     <td><input type="text" name="nohp" required="required" placeholder="085XXXXXXXXX"></td>
                  </div>
                  </tr>
                  <tr>
                  <div class="form-group">
                    <td><label>Email: </label></td>
                    <td><input type="text" name="email" placeholder="example@email.com"></td>
                  </div>
                  </tr>
                  <tr>
                  <td></td>
                  <td><button type="reset" class="btn btn-default">Reset</button>
                  <button type="submit" class="btn btn-default">Submit</button></td>
                  </tr>
                  </div>
                  </table>
                  <script>
                    function pendonorClicked() {
                      if (document.getElementById("resipien").checked) {
                        document.getElementById("tglbutuh").disabled = false;
                        document.getElementById("jumlah").disabled = false;
                      } else {
                        document.getElementById("tglbutuh").disabled = true;
                        document.getElementById("jumlah").disabled = true;
                      }
                    }
                  </script>
                </form>
              </div>
            </form>
          </div>
          <div id="lihat" class="tabcontent" style="overflow-x:auto; overflow-y: auto;">
            <div class="scroll" style="overflow-x:auto; overflow-y: auto;">
              <br>
            <?php
              $con = mysqli_connect("localhost","root");
              if (!$con){ die('Could not connect: ' . mysqli_error()); }
              mysqli_select_db($con, "db_sadaka");
              $getdb = "SELECT * FROM pendonor";
              $formattgl = mysqli_query($con, "SELECT tgllahir FROM pendonor");
              $resultdb = mysqli_query($con, $getdb);
              // No. | Nomor Formulir | Nama | Tgl Lahir | Jenis Kelamin | Golongan Darah | Rhesus | No. HP | Email
              echo "<table border=\"1\" align=\"center\" width=\"100%\">";
              echo "<tr><td><p align=\"center\"><b>&nbsp;No.&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;Nomor Formulir&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;Nama&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;Tgl Lahir&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;Jenis Kelamin&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;Golongan Darah&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;Rhesus&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;No. HP&nbsp;</b></p></td><td><p align=\"center\"><b>&nbsp;Email&nbsp;</b></p></td></tr>";
              $count = 1;    
              // mencetak setiap data dalam bentuk row    
              while ($row = mysqli_fetch_row($resultdb)) {
                  print( "<tr><td><p align=\"center\">&nbsp;$count&nbsp;</p></td>");   
                  print("<td><p align=\"center\">&nbsp;$row[0]&nbsp;</p></td>");
                  print("<td><p align=\"center\">&nbsp;$row[1]&nbsp;</p></td>");
                  // format tgl indo
                  while ($tgl = mysqli_fetch_row($formattgl)) {
                    print("<td><p align=\"center\">&nbsp;");
                    setlocale(LC_ALL, 'id-ID', 'id_ID');
                    echo (strftime("%e %B %Y", strtotime($tgl[0])));
                    print("&nbsp;</p></td>");
                    break;
                  }
                  print("<td><p align=\"center\">&nbsp;$row[3]&nbsp;</p></td>");
                  print("<td><p align=\"center\">&nbsp;$row[4]&nbsp;</p></td>");
                  print("<td><p align=\"center\">&nbsp;$row[5]&nbsp;</p></td>");
                  print("<td><p align=\"center\">&nbsp;$row[6]&nbsp;</p></td>");
                  print("<td><p align=\"center\">&nbsp;$row[7]&nbsp;</p></td>");
                  print( "</tr>");
                  $count++;
              }
              echo "</table>";
            ?>
            <script>
              // mencetak tgl hari ini
              var d = new Date();
              var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
              document.write("<p>Update per tanggal " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear() + "</p>");
            </script>
          </div>
          </div>            
        </div>
      </div>
    </div>
      <script>
      function pilihanDonor(evt, pilihan) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(pilihan).style.display = "block";
        evt.currentTarget.className += " active";
      }
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      </script>
    </div> <!-- /.modal -->
    <!--  Scripts
    ================================================== -->
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>
    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>
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