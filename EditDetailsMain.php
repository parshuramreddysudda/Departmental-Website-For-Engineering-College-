 
<?php
include'config.php';
    
//Getting values from previous page 

$Editroll=$_SESSION["Editroll"];
echo $Editroll;


//Values Assigned for the posted value
$Esroll=$_SESSION["sroll"];
$Esname= $_POST['sname'];
$Efname= $_POST['fname'];
$Eyear= $_POST['year'];
$Esec= $_POST['sec'];
$Edob= $_POST['dob'];
$Esmob= $_POST['smob'];
$Efmob= $_POST['fmob'];
$Eland=$_POST['land'];
$Eaddr=$_POST['address'];
$Emcet=$_POST['mcet'];
$Essc=$_POST['ssc'];
$Einter=$_POST['inter'];
$Eemail=$_POST['email'];

if(isset($Eyear))
{
    $_SESSION["Edityear"]=$Eyear;
}


// Check connection
 if(isset($Eaddr))
 {
    $sqlupdate = "UPDATE student SET name='$Esname',fname='$Efname',sec='$Esec',dob='$Edob',year='$Eyear',smobile='$Esmob',fmobile='$Efmob',landline='$Eland',address='$Eaddr',ssc='$Essc',inter='$Einter',eamcet='$Emcet',email='$Eemail' WHERE id='$Esroll'";

    
    if ($result=mysqli_query($conn,$sqlupdate)) 
    {
    echo "<script type=\"text/javascript\">
    alert(' Record for  ".$Esname." has been Updated ' )
    </script>";
         
       
    }
    else
    { 
        
            unset($Eaddr);
    }
 }
else
{
    echo "Error: " . $sqlupdate . "<br>" . mysqli_error($conn);
}
   
//Code completed for retrieving values

////////Image Upload PHP code Starts here ////////

function GetImageExtension($imagetype)
 	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
    
///Code to use image name with new customized  image name .
    
$imagename=$Editroll.$ext; 

	$target_path = "images/".$imagename;
    
if(move_uploaded_file($temp_name, $target_path)) 
{
    


 	$query_upload=" UPDATE `student` SET `imgpath` = '".$target_path."' WHERE `student`.`id` = '$roll'";    
        
	mysqli_query($conn,$query_upload);
    if ($conn->query($query_upload) === TRUE){
      echo "<script type=\"text/javascript\">
            alert('".$Editroll."  Pic has been Added  Successfully.')

            </script>";
    }
    else
    {
       echo "Error: " . $query_upload . "<br>" . $conn->error;
    }
	
}
    else{

   exit("Error While uploading image on the server");
} 

}

////////Image upload PHP code ends here ////////




  
?>


<!DOCTYPE html>
<html style="background-color:#3c4141;">

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
    <div>
        
        
            <div id="img" class="col" data-aos="fade-right" data-aos-duration="1450" style="margin:30px 0px 100px 0px;padding:39px;height:163px;"><label style="font-size:27px;">Upload <?php echo $Editroll ; ?> photo here to Update it:</label>
               
                <form action="addDetails.php" id=" picform" method="post" action="EditDetailsMain.php" enctype="multipart/form-data" method="post" >
                <input name="uploadedimage" type="file">
                <input name="Upload Now" type="submit" value="Upload Image">
                </form>
            </div>
            
    </div>           
    
    
    <div class="container" tyle="height:20px;">
        <p class="text-center" >Click here and update  <?php echo $Editroll;?> Academic Results  </p>
        </div>

    
<!--    Form sumit line -->
<!--        <button id="formsubmit"class="btn btn-dark btn-block btn-lg"  onclick="submitForms()" value="clickme">Submit</button>-->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href="editFIrstyear.php"  class="button" id="clickMe" target="_blank">First  Year  </a></div>
                <div class="col-md-3"><a href="editSecondyear.php"   class="button" id="clickMe" target="_blank">Second Year</a></div>
                <div class="col-md-3"><a href="editThirdyear.php"   class="button" id="clickMe" target="_blank">Third Year</a></div>
                <div class="col-md-3"><a href="editFouthyear.php"   class="button" id="clickMe" target="_blank">Fourth Year</a></div>
            </div>
        </div>
        </div>
    <div style="height:20px;"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        
    $("#formsubmit").click(function(){
    $.post($(this).attr("action"), $(this).serialize(), function (response) {
      alert(response);
    });
});
</script>
    
<!--    One time calling script for alerting-->
     <script type="text/javascript">
//    var alerted = localStorage.getItem('alerted') || '';
//    if (alerted != 'yes') {
//     alert("My alert.");
//     localStorage.setItem('alerted','yes');
//    }
</script>

    
</body>

</html>