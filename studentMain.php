
<?php


include'config.php';

//Values Assigned for the posted value
$rollNumber= $_POST['roll'];
$sname= $_POST['sname'];
$fname= $_POST['fname'];
$year= $_POST['year'];
$sec= $_POST['sec'];
$dob= $_POST['dob'];
$smob= $_POST['smob'];
$fmob= $_POST['fmob'];
$land=$_POST['land'];
$addr=$_POST['address'];
$mcet=$_POST['mcet'];
$ssc=$_POST['ssc'];
$inter=$_POST['inter'];
$email=$_POST['email'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    if(isset($addr))
    $sql = "INSERT INTO student (id,name,fname,sec,dob,year,smobile,fmobile,landline,address,ssc,inter,eamcet,email) VALUES ('$rollNumber', '$sname', '$fname','$sec', '$dob', '$year','$smob', '$fmob', '$land','$addr','$ssc','$inter','$mcet','$email')";
    
    
    else
    {
        echo "<script type=\"text/javascript\">
        alert('Create a New Record and Then Continue to next Page')
            </script>";
        
             
    }
  
    if ($result=mysqli_query($conn,$sql)) 
    {
    echo "<script type=\"text/javascript\">
    alert('New Record for  ".$sname." has been Created Now Click on Next page to Continue Entering Data' )
    </script>";
       
    }
    else
    { 
        if(isset($land))
        {
           echo "<script type=\"text/javascript\">
    alert('I think You have same already created a record for ".$sname." ' )
    </script>";
            unset($addr);
    }
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
}
    
//Storing Session values for image name

$_SESSION["rollsession"] = $rollNumber;
$_SESSION["sname"] = $sname;
$_SESSION["fname"] = $fname;
$_SESSION["year"]=$year;
       
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SriInduDepartmentalWebsite</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
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
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Button-Outlines---Pretty.css">
    <link rel="stylesheet" href="assets/css/circle-progress-bar.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Header-Dark-2.css">
    <link rel="stylesheet" href="assets/css/Header-Dark-3.css">
    <link rel="stylesheet" href="assets/css/Header-Dark-4.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Material-Inputs.css">
    <link rel="stylesheet" href="assets/css/Material-Inputs1.css">
    <link rel="stylesheet" href="assets/css/Material-Inputs2.css">
    <link rel="stylesheet" href="assets/css/Material-Inputs3.css">
    <link rel="stylesheet" href="assets/css/Material-Inputs4.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body style="padding:1px;">
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
    <div>
        <div class="row"></div>
        <div class="row" style="margin:2px;">
            <div class="col-md-8">
                  <section class="card">
                    <h1>Student Details</h1>
                    <form  action="studentMain.php"  id='student' method="post" class="form-inline">
                        <div data-aos="fade-up" data-aos-duration="800"  class="md-input-group"><label class="md-input-label">Roll Number</label><input class="form-control md-input" id="roll" name='roll' type="text" required=""></div>
                        <div data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Student Name</label><input class="form-control md-input" id="sname" name="sname"type="text" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Father Name</label><input class="form-control md-input" type="text" id="fname" name="fname" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Year</label><input class="form-control md-input" type="text" id="year" name="year" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Section</label><input class="form-control md-input" type="text" id="sec" name="sec" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Date of Birth</label><input class="form-control md-input" type="text" id="dob" name="dob" required=""></div>
                         <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Email Address</label><input class="form-control md-input" type="email" id="email" name="email" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Student Mobile Number</label><input class="form-control md-input" id="smob" name="smob" type="text" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Father Mobile Number</label><input class="form-control md-input" id="fmob" name="fmob" type="text" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Landline</label><input class="form-control md-input" id="land" name="land" type="text"></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Address</label><input class="form-control md-input" type="text" name="address" id="address" required=""></div>
                   
                     <div class="container">

                    <h1 style="margin-top: 25px;">
                    Additional Details</h1>
                      </div>
                        
                        <div data-aos="fade-up" data-aos-duration="800"  class="md-input-group"><label class="md-input-label">SCC Marks</label><input class="form-control md-input" id="ssc" name='ssc' type="text" required=""></div> <div data-aos="fade-up" data-aos-duration="800"  class="md-input-group"><label class="md-input-label">Intermediate</label><input class="form-control md-input" id="inter" name='inter' type="text" required=""></div> <div data-aos="fade-up" data-aos-duration="800"  class="md-input-group"><label class="md-input-label">EAMCET</label><input class="form-control md-input" id="mcet" name='mcet' type="text" required=""></div>
                        
                        
                        
                     <div class="container">
            <div class="row">
                <div class="col-md-6">
                    </div>
                <div class="col-md-6">
                     <button class="btn btn-link btn-lg border-pretty" type="submit" form="student" value="submit" style="color:#ce9c95;margin:24px;" id="create">Create Student Record&nbsp;<i class="icon ion-android-arrow-forward"></i></button>
                   </div>
                
            </div>
                         
             
        </div>
                       
                      </form>
                      
                      
                      
                      <div class="container">
            <div class="row">
                 <div class="col-md-6">
                    
              
                </div>
                <div class="col-md-6">
                     <button onclick="location.href = 'addDetails.php';"  id="nextpage" name="nextpage"  class="btn btn-link btn-lg border-pretty" href="addDetails.php" style="color:#ce9c95;margin:24px;"> Continue to Next Page&nbsp;<i class="icon ion-android-arrow-forward"></i></button>
                   </div>
               
            </div>
                      </div>
                         
             
    
                      
                </section>
            </div>
            
        </div>
    </div>
    <div>
       
    </div>
    <div class="footer-clean" style="background-color:rgb(49,55,58);">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item"><img data-bs-hover-animate="pulse" style="background-image:url(&quot;assets/img/36929706_1044434599064256_6289139470734196736_n.png&quot;);background-size:cover;height:69px;width:397px;background-color:#31373a;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:50px;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:147px;"></div>
                    <div class="col-lg-3 item social" data-bs-hover-animate="pulse" style="width:313px;">
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Material-Inputs.js"></script>
    <script src="assets/js/style.js"></script>
    <script>
        

;    
    </script>
</body>

</html>

<?php


if( isset($addr) ) 
{

    
     echo "
            <script type=\"text/javascript\">
             document.getElementById('nextpage').disabled=false;
             document.getElementById('create').disabled=true
            </script>
        ";
   }
else
{
     
   
    
    echo "
            <script type=\"text/javascript\">
             document.getElementById('nextpage').disabled=true;
                document.getElementById('create').disabled=false
            </script>
        ";
}


?>