<?php
    
include'config.php';
    
// Check connection
 $postedyear = $_SESSION['postsubyear'];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$psub1 = $_POST['sub110'];
 $psub2 = $_POST['sub111'];
 $psub3 = $_POST['sub112'];
 $psub4 = $_POST['sub113'];
 $psub5 = $_POST['sub114'];
 $psub6 = $_POST['sub115'];
 $psub7 = $_POST['sub116'];
 $psub8 = $_POST['sub117'];
 $psub9 = $_POST['sub118'];
 $psub10 = $_POST['sub119'];
 $psub11 = $_POST['sub120'];
 $psub12 = $_POST['sub121'];
 $psub13 = $_POST['sub122'];
 $psub14 = $_POST['sub123'];
 $psub15 = $_POST['sub124'];
 $psub16 = $_POST['sub125'];
 $psub17 = $_POST['sub126'];
 $psub18 = $_POST['sub127'];
 $psub19 = $_POST['sub128'];
 $psub20 = $_POST['sub129'];
 $psub21 = $_POST['sub210'];
 $psub22 = $_POST['sub211'];
 $psub23 = $_POST['sub212'];
 $psub24 = $_POST['sub213'];
 $psub25 = $_POST['sub214'];
 $psub26 = $_POST['sub215'];
 $psub27 = $_POST['sub216'];
 $psub28 = $_POST['sub217'];
 $psub29 = $_POST['sub218'];
 $psub30 = $_POST['sub219'];
 $psub31 = $_POST['sub220'];
 $psub32 = $_POST['sub221'];
 $psub33 = $_POST['sub222'];
 $psub34 = $_POST['sub223'];
 $psub35 = $_POST['sub224'];
 $psub36 = $_POST['sub225'];
 $psub37 = $_POST['sub226'];
 $psub38 = $_POST['sub227'];
 $psub39 = $_POST['sub228'];
 $psub40 = $_POST['sub229'];
 $psub41 = $_POST['sub310'];
 $psub42 = $_POST['sub311'];
 $psub43 = $_POST['sub312'];
 $psub44 = $_POST['sub313'];
 $psub45 = $_POST['sub314'];
 $psub46 = $_POST['sub315'];
 $psub47 = $_POST['sub316'];
 $psub48 = $_POST['sub317'];
 $psub49 = $_POST['sub318'];
 $psub50 = $_POST['sub319'];
 $psub51 = $_POST['sub320'];
 $psub52 = $_POST['sub321'];
 $psub53 = $_POST['sub322'];
 $psub54 = $_POST['sub323'];
 $psub55 = $_POST['sub324'];
 $psub56 = $_POST['sub325'];
 $psub57 = $_POST['sub326'];
 $psub58 = $_POST['sub327'];
 $psub59 = $_POST['sub328'];
 $psub60 = $_POST['sub329'];
 $psub61 = $_POST['sub410'];
 $psub62 = $_POST['sub411'];
 $psub63 = $_POST['sub412'];
 $psub64 = $_POST['sub413'];
 $psub65 = $_POST['sub414'];
 $psub66 = $_POST['sub415'];
 $psub67 = $_POST['sub416'];
 $psub68 = $_POST['sub417'];
 $psub69 = $_POST['sub418'];
 $psub70 = $_POST['sub419'];
 $psub71 = $_POST['sub420'];
 $psub72 = $_POST['sub421'];
 $psub73 = $_POST['sub422'];
 $psub74 = $_POST['sub423'];
 $psub75 = $_POST['sub424'];
 $psub76 = $_POST['sub425'];
 $psub77 = $_POST['sub426'];
 $psub78 = $_POST['sub427'];
 $psub79 = $_POST['sub428'];
 $psub80 = $_POST['sub429'];

$sql = "INSERT INTO subjects (subyear, sub110, sub111, sub112, sub113, sub114, sub115, sub116, sub117, sub118, sub119, sub120, sub121, sub122, sub123, sub124, sub125, sub126, sub127, sub128, sub129, sub210, sub211, sub212, sub213, sub214, sub215, sub216, sub217, sub218, sub219, sub220, sub221, sub222, sub223, sub224, sub225, sub226, sub227, sub228, sub229, sub310, sub311, sub312, sub313, sub314, sub315, sub316, sub317, sub318, sub319, sub320, sub321, sub322, sub323, sub324, sub325, sub326, sub327, sub328, sub329, sub410, sub411, sub412, sub413, sub414, sub415, sub416, sub417, sub418, sub419, sub420, sub421, sub422, sub423, sub424, sub425, sub426, sub427, sub428, sub429) VALUES ('$postedyear',
'$psub1', '$psub2', '$psub3', '$psub4', '$psub5', '$psub6', '$psub7', '$psub8', '$psub9', '$psub10', '$psub11', '$psub12', '$psub13', '$psub14', '$psub15', '$psub16', '$psub17', '$psub18', '$psub19', '$psub20', '$psub21', '$psub22', '$psub23', '$psub24', '$psub25', '$psub26', '$psub27', '$psub28', '$psub29', '$psub30', '$psub31', '$psub32', '$psub33', '$psub34', '$psub35', '$psub36', '$psub37', '$psub38', '$psub39', '$psub40', '$psub41', '$psub42', '$psub43', '$psub44', '$psub45', '$psub46', '$psub47', '$psub48', '$psub49', '$psub50', '$psub51', '$psub52', '$psub53', '$psub54', '$psub55', '$psub56', '$psub57', '$psub58', '$psub59', '$psub60', '$psub61', '$psub62', '$psub63', '$psub64', '$psub65', '$psub66', '$psub67', '$psub68', '$psub69', '$psub70', '$psub71', '$psub72', '$psub73', '$psub74', '$psub75', '$psub76', '$psub77', '$psub78', '$psub79', '$psub80')" ;


if ($conn->multi_query($sql) === TRUE) 
{

    echo "
            <script type=\"text/javascript\">
            alert('Subjects Inserted Succesfully for ".$postedyear." ')
            window.location.href='EditSubDetails.php'
            </script>
        ";
}
else 
{
    
    
   $sql =" UPDATE `subjects` SET  `sub110` = '$psub1',  `sub111` = '$psub2',  `sub112` = '$psub3',  `sub113` = '$psub4',  `sub114` = '$psub5',  `sub115` = '$psub6',  `sub116` = '$psub7',  `sub117` = '$psub8',  `sub118` = '$psub9',  `sub119` = '$psub10',  `sub120` = '$psub11',  `sub121` = '$psub12',  `sub122` = '$psub13',  `sub123` = '$psub14',  `sub124` = '$psub15',  `sub125` = '$psub16',  `sub126` = '$psub17',  `sub127` = '$psub18',  `sub128` = '$psub19',  `sub129` = '$psub20',  `sub210` = '$psub21',  `sub211` = '$psub22',  `sub212` = '$psub23',  `sub213` = '$psub24',  `sub214` = '$psub25',  `sub215` = '$psub26',  `sub216` = '$psub27',  `sub217` = '$psub28',  `sub218` = '$psub29',  `sub219` = '$psub30',  `sub220` = '$psub31',  `sub221` = '$psub32',  `sub222` = '$psub33',  `sub223` = '$psub34',  `sub224` = '$psub35',  `sub225` = '$psub36',  `sub226` = '$psub37',  `sub227` = '$psub38',  `sub228` = '$psub39',  `sub229` = '$psub40',  `sub310` = '$psub41',  `sub311` = '$psub42',  `sub312` = '$psub43',  `sub313` = '$psub44',  `sub314` = '$psub45',  `sub315` = '$psub46',  `sub316` = '$psub47',  `sub317` = '$psub48',  `sub318` = '$psub49',  `sub319` = '$psub50',  `sub320` = '$psub51',  `sub321` = '$psub52',  `sub322` = '$psub53',  `sub323` = '$psub54',  `sub324` = '$psub55',  `sub325` = '$psub56',  `sub326` = '$psub57',  `sub327` = '$psub58',  `sub328` = '$psub59',  `sub329` = '$psub60',  `sub410` = '$psub61',  `sub411` = '$psub62',  `sub412` = '$psub63',  `sub413` = '$psub64',  `sub414` = '$psub65',  `sub415` = '$psub66',  `sub416` = '$psub67',  `sub417` = '$psub68',  `sub418` = '$psub69',  `sub419` = '$psub70',  `sub420` = '$psub71',  `sub421` = '$psub72',  `sub422` = '$psub73',  `sub423` = '$psub74',  `sub424` = '$psub75',  `sub425` = '$psub76',  `sub426` = '$psub77',  `sub427` = '$psub78',  `sub428` = '$psub79',  `sub429` = '$psub80' where `subyear` = '$postedyear'";
    
if ($conn->multi_query($sql) === TRUE) 
{

    echo "
            <script type=\"text/javascript\">
            alert('Subjects Duplicated Succesfully for ".$postedyear." ')
            window.location.href='EditSubDetails.php'
            </script>
        ";
    
}
    else
    {
   
   echo $sql ."Error: " . $conn->error;
    }
}
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
    </body>
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

</html>