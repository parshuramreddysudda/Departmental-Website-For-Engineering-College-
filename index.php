<?php 
include('server.php') ;
unset($_SESSION['username']);
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SriInduDepartmentalWebsite-Final</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="padding:0px;">
    <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-search" style="color:rgb(159,158,158);background-color:#545555;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="font-family:ABeeZee, sans-serif;font-size:21px;color:#d7d4d4;">Sri Indu College Of Engineering &amp; Technology</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-outline-dark" role="button" href="index.php" style="color:rgb(250,252,255);width:79px;margin:12px;">Login</a><span class="navbar-text"><a href="#" data-aos="fade" class="login" style="font-size:20px;">&nbsp;About Dev</a></span></div>
        </div>
    </nav>
    <div>
        <div class="header-dark" style="background-color:rgba(0,0,0,0.1);background-image:url(&quot;none&quot;);"></div>
    </div>
    <div class="highlight-clean" style="background-color:rgba(0,0,0,0.1);height:451px;">
        <div class="container-fluid" style="padding:0px;">
            <div class="intro" style="color:#fcfeff;background-color:rgba(0,0,0,0);">
                <h2 class="text-center" data-aos="fade-up" data-aos-duration="750" style="background-color:rgba(57,57,57,0.9);font-family:Bitter, serif;color:rgb(242,243,244);">Click here to Redirect</h2>
                <p class="text-center" style="font-family:ABeeZee, sans-serif;color:#111314;">If you are HOD click on the HOD Button or else if you are &nbsp;Staff &nbsp;then click on staff you will be asked for the repective year in the second page</p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="HodLogin.php" data-aos="fade-up" data-aos-duration="750" style="font-size:18px;background-color:rgb(85,85,85);height:50px;">&nbsp; &nbsp; &nbsp; &nbsp;HOD &nbsp; &nbsp; &nbsp;</a><a class="btn btn-light"
                    role="button" href="StaffLogin.php" data-aos="fade-up" data-aos-duration="750" data-aos-once="true" style="font-size:18px;background-color:rgb(217,209,209);height:50px;">STaff (I-IV)</a></div>
        </div>
    </div>
    <div class="footer-clean" style="background-color:rgb(49,55,58);">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item"><img class="pulse animated infinite" style="background-image:url(&quot;assets/img/36929706_1044434599064256_6289139470734196736_n.png&quot;);background-size:cover;height:69px;width:397px;background-color:#31373a;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:50px;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:147px;"></div>
                    <div class="col-lg-3 pulse animated infinite item social" style="width:313px;">
                        <h3 style="color:rgb(231,231,231);">E-mail Developers @</h3>
                        <ul>
                            <li><a href="mailto:parshuram.sudda@gmail.com" style="color:rgb(225,226,227);width:160px;">Parshuram[dot]sudda[at]gmail[dot]com</a></li>
                            <li style="width:274px;"><a href="mailto:vishnurapuru10@gmail.com" style="color:rgb(215,215,215);width:47px;">Vishnurapuru[(2+3)+5][at]gmail[dot]com</a></li>
                        </ul>
                        <p class="copyright" style="color:rgb(251,252,252);">AiPlus © 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>