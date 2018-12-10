<?php
    
include'config.php';
    
//Getting values from previous page 



$sroll=$_POST['sroll'];
$_SESSION["Editroll"] = $sroll;


//Code completed for retrieving values


//Student details getting query code starts here

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

//Student Roll number search code Started.

if(isset($_SESSION["Editroll"]))

    {
         $sql = "SELECT  name , fname , sec , dob , year , smobile , fmobile , landline , Address , ssc , inter , eamcet,email  FROM  student  WHERE id='$sroll'";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0)
            {
                    // output data of each row
   
                while($array=mysqli_fetch_row($result)) 
                {
                    for($i=0;$i<13;$i++)
                    {
                        $arroll[]=$array[$i];
                    }
            
                }
            } 

    else {
        echo "<script type=\"text/javascript\">
        alert('I think there are no students with ".$sroll." . Please go  to Add Details and ADD them up')
     
     </script>";
  
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
else
    {
            echo "<script type=\"text/javascript\">
        alert('Here You can Update Any thing Except Roll Number')
            </script>";
   
       
        }

//Student Roll number search code Completed.
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SriInduDepartmentalWebsite</title>
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
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/css/buttoncss.css">
</head>

<body style="padding:0px;">
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
   <div style="height:20px;"></div>
    
    <div class="container" style="background-color:rgba(8,8,8,0.07);">
        <form id="studentrcord" name="studentrcord" action='EditDetails.php' method="post">
        <div class="row form-group" style="height:71px;margin:1px;">
            <div class="col-sm-4 col-xl-4 label-column"><label class="col-form-label" for="name-input-field" style="font-family: 'PT Serif', serif;font-size:22px;">Enter Student Roll Number</label></div>
            <div class="col-sm-6 col-xl-5 input-column">
                <input type="text" required="" maxlength="10" minlength="10" autofocus="" name='sroll' style="margin:10px;">
                <button class="btn btn-primary" form="studentrcord" value="submit" type="submit"  style="width:100px;height:40px;background-color:rgb(45,45,45);">Submit</button>

<!--                <button class="btn btn-primary" type="button" style="margin:16px;">Submit</button>-->
            </div>
        </div>
        </form>
    </div>
      <div>
        <div class="row"></div>
        <div class="row" style="margin:2px;">
            
            <div class="col-md-8">
                  <section class="card">
                    <h1>Student Details</h1>
                    <form  action="EditDetailsMain.php"  id='student' name='student' method="post" class="form-inline">
                        
                        <div data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Student Name</label><input class="form-control md-input" id="sname" name="sname"type="text" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Father Name</label><input class="form-control md-input" type="text" id="fname" name="fname" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Year</label><input class="form-control md-input" type="text" id="year" name="year" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Section</label><input class="form-control md-input" type="text" id="sec" name="sec" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Date of Birth</label><input class="form-control md-input" type="text" id="dob" name="dob" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Student Mobile Number</label><input class="form-control md-input" id="smob" name="smob" type="text" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Father Mobile Number</label><input class="form-control md-input" id="fmob" name="fmob" type="text" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Landline</label><input class="form-control md-input" id="land" name="land" type="text"></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">Address</label><input class="form-control md-input" type="text" name="address" id="address" required=""></div>
                        <div  data-aos="fade-up" data-aos-duration="850" class="md-input-group"><label class="md-input-label">E-mail Address</label><input class="form-control md-input" type="text" name="email" id="email" required=""></div>
                   
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
                     <button class="btn btn-link btn-lg border-pretty" type="submit" id="updatebutton" form="student" value="submit" style="color:#ce9c95;margin:24px;">Update Student Record&nbsp;<i class="icon ion-android-arrow-forward"></i></button>
                   </div>
                
            </div>
                         
             
        </div>
                        
        
                       
                      </form>
                      
                      
                      
                      
             
    
                      
                </section>
            </div>
           
        </div>
    </div>
    
        <div>
            <div class="container" style="100px;"></div>
        </div>
         
         
        
       
<!--
    <div style="height:15px;"></div><button class="btn btn-dark btn-block btn-lg" type="submit">Submit</button>
    <div style="height:15px;"></div>
-->
    <div class="footer-clean" style="background-color:rgb(49,55,58);">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item"><img style="background-image:url(&quot;assets/img/36929706_1044434599064256_6289139470734196736_n.png&quot;);background-size:cover;height:69px;width:397px;background-color:#31373a;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:50px;"></div>
                    <div class="col-sm-4 col-md-3 item" style="width:147px;"></div>
                    <div class="col-lg-3 item social" style="width:313px;">
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
    <p id="demo">sdfasdf</p>
    <script>
//        var list=["name" , "fname" , "sec" , "dob" , "year" , "smobile" , "fmobile" , "landline" , "Address" , "ssc" , "inter" , "eamcet","email"];
//        var inid=;
//        document.getElementById("demo").innerHTML = 231;
        
//        for(i=0;i<12;i++)
//            {
//               //document.getElementById(list[i]).setAttribute('value','inid');
//                inid=ppp echo $arroll[$arri]; $arri++; ?>
//                    $array[$i];
//                
//            }
         
    </script>
</body>

</html>

<?php

echo $sroll;
if( isset($sroll) ) 
{

    
     echo "
            <script type=\"text/javascript\">
             document.getElementById('updatebutton').disabled=false
            </script>
        ";
   }
else
{
     
   
    
    echo "
            <script type=\"text/javascript\">
             document.getElementById('updatebutton').disabled=true
            </script>
        ";
}


echo "<script type=\"text/javascript\">
           document.getElementById('sname').setAttribute('value','$arroll[0]')
           document.getElementById('fname').setAttribute('value','$arroll[1]')
           document.getElementById('sec').setAttribute('value','$arroll[2]')
           document.getElementById('dob').setAttribute('value','$arroll[3]')
           document.getElementById('year').setAttribute('value','$arroll[4]')
           document.getElementById('smob').setAttribute('value','$arroll[5]')
           document.getElementById('fmob').setAttribute('value','$arroll[6]')
           document.getElementById('land').setAttribute('value','$arroll[7]')
           document.getElementById('address').setAttribute('value','$arroll[8]')
           document.getElementById('ssc').setAttribute('value','$arroll[9]')
           document.getElementById('inter').setAttribute('value','$arroll[10]')
           document.getElementById('mcet').setAttribute('value','$arroll[11]')
           document.getElementById('email').setAttribute('value','$arroll[12]')
           
            </script>";
unset($sroll);
?>


