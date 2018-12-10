<?php 

include'config.php';
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['pass']))
{
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0)
  {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "UPDATE users SET password='$password'   WHERE email='$email'";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "You Canged Password";
      
      
   echo "<script type=\"text/javascript\">
    alert('Password for ".$email." has been changed')
    </script>";

//  	header('location: index.php');
  }
}
?>
<!DOCTYPE html>
<html style="background-color:#3c4141;">

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

<body style="background-image:url(&quot;none&quot;);padding:0px;">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="color:rgb(159,158,158);background-color:#545555;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="font-family:ABeeZee, sans-serif;font-size:16px;color:#d7d4d4;">Sri Indu College Of Engineering &amp; Technology</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-outline-dark" role="button" href="HodIndex.php" style="color:rgb(250,252,255);width:79px;margin:12px;border:none;">Home</a><a class="btn btn-outline-dark" role="button" href="index.php" style="color:rgb(250,252,255);width:79px;margin:12px;">Logout</a>
                <span
                    class="navbar-text"><a href="Developer.php" class="login" style="font-size:20px;">&nbsp;About Dev</a></span>
        </div>
        </div>
    </nav>
    <div style="height:25px;"></div>
    <div>  
       
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-12 align-self-center" style="background-color:#eae9e9;">
  	
                    <form method="post" action="passwordChange.php" class="custom-form" style="width:75%;margin:76px;padding:115px;background-color:#fbf7f7;">
                        <?php include('errors.php'); ?>
                        <h1 class="text-center" data-aos="fade-up" data-aos-duration="900" style="background-color:#c6c6c6;font-family:Adamina, serif;"> Change Password</h1>
                        <div class="form-row form-group" data-aos="fade-up" data-aos-duration="1100">
                            <div class="col-sm-4 label-column" style="background-color:#dcdbdb;"><label class="col-form-label" >Email </label></div>
                            <div class="col-sm-6 input-column"><input class="form-control" name="email"></div>
                        </div>
                        <div class="form-row form-group" data-aos="fade-up" data-aos-duration="1350">
                            <div class="col-sm-4 label-column" style="background-color:#d9d8d8;"><label class="col-form-label" for="password-input-field">Password </label></div>
                            <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password_1"></div>
                        </div>
                        <div class="form-row form-group" data-aos="fade-up" data-aos-duration="1350">
                            <div class="col-sm-4 label-column" style="background-color:#d9d8d8;"><label class="col-form-label" for="password-input-field">Confirm Password </label></div>
                            <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password_2"></div>
                        </div>
                    	<button type="submit" class="btn" name="pass">Login</button></form>
                </div>
            </div>
        </div>
    </div>
    <div style="height:25px;"></div>
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