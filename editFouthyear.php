
<?php
    
 include'config.php';
   
//Getting session values from previous page 

$Editroll=$_SESSION["Editroll"];
$Edityear=$_SESSION["Edityear"];
echo $Editroll;
echo $Edityear;

//Code completed for retrieving values


//Subject details getting query code starts here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sub410,sub411,sub412,sub413,sub414,sub415,sub416,sub417,sub418,sub419,sub420,sub421,sub422,sub423,sub424,sub425,sub426,sub427,sub428,sub429 FROM subjects WHERE subyear='$Edityear'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    // output data of each row
   
     while($array=mysqli_fetch_row($result)) 
    {
        for($i=0;$i<20;$i++)
        {
          $sub[]=$array[$i];
        }
         
    }
} 
else {
    echo "<script type=\"text/javascript\">
    alert('I think there are no subjects for ".$year." . Please go  to Subjects Page and ADD them up')
     window.location.href='EditSubDetails.php'
    </script>";
  
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  
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
        <div class="container" style="height:44px;"></div>
    </div>
<div class="container">
    <form id="fourthyear" name="fourthyear" action='fourtheditsuccess.php' method="post" >
        <h1 class="text-center" style="color:rgb(222,222,222);background-color:#8b8a8a;">IV Year Progress</h1>
        <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);">
                 <?php echo $Editroll;?>'s  7th sem Progress</h3>
        <div class="table-responsive" data-aos="fade-up" data-aos-duration="1000">
            <table class="table table-striped" >
                <thead>
                   <tr>
                        <th></th>
                        <th><?php echo $sub[0];?></th>
                        <th><?php echo $sub[1];?></th>
                        <th><?php echo $sub[2];?></th>
                        <th><?php echo $sub[3];?></th>
                        <th><?php echo $sub[4];?></th>
                        <th><?php echo $sub[5];?></th>
                        <th><?php echo $sub[6];?><br></th>
                        <th><?php echo $sub[7];?></th>
                        <th><?php echo $sub[8];?></th>
                        <th><?php echo $sub[9];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IV Year 1 Sem 1 Mid<br></td>
                        <td><input type="text" name="arr601" style="width:70px;"></td>
                        <td><input type="text" name="arr602" style="width:70px;"></td>
                        <td><input type="text" name="arr603" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr604" style="width:70px;"></td>
                        <td><input type="text" name="arr605" style="width:70px;"></td>
                        <td><input type="text" name="arr606" style="width:70px;"></td>
                        <td><input type="text" name="arr607" style="width:70px;"></td>
                        <td><input type="text" name="arr608" style="width:70px;"></td>
                        <td><input type="text" name="arr609" style="width:70px;"></td>
                        <td><input type="text" name="arr610" style="width:70px;"></td>
                        <td><input type="text" name="arr611" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td>IV Year 1 Sem 2 Mid<br></td>
                        <td><input type="text" name="arr612" style="width:70px;"></td>
                        <td><input type="text" name="arr613" style="width:70px;"></td>
                        <td><input type="text" name="arr614" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr615" style="width:70px;"></td>
                        <td><input type="text" name="arr616" style="width:70px;"></td>
                        <td><input type="text" name="arr617" style="width:70px;"></td>
                        <td><input type="text" name="arr618" style="width:70px;"></td>
                        <td><input type="text" name="arr619" style="width:70px;"></td>
                        <td><input type="text" name="arr620" style="width:70px;"></td>
                        <td><input type="text" name="arr621" style="width:70px;"></td>
                        <td><input type="text" name="arr622" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td>IV Year I Semester&nbsp;<br></td>
                        <td><input type="text" name="arr623" style="width:70px;"></td>
                        <td><input type="text" name="arr624" style="width:70px;"></td>
                        <td><input type="text" name="arr625" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr626" style="width:70px;"></td>
                        <td><input type="text" name="arr627" style="width:70px;"></td>
                        <td><input type="text" name="arr628" style="width:70px;"></td>
                        <td><input type="text" name="arr629" style="width:70px;"></td>
                        <td><input type="text" name="arr630" style="width:70px;"></td>
                        <td><input type="text" name="arr631" style="width:70px;"></td>
                        <td><input type="text" name="arr632" style="width:70px;"></td>
                        <td><input type="text" name="arr633" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td>Result&nbsp;<br></td>
                        <td><input type="text" name="arr634" style="width:70px;"></td>
                        <td><input type="text" name="arr635" style="width:70px;"></td>
                        <td><input type="text" name="arr636" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr637" style="width:70px;"></td>
                        <td><input type="text" name="arr638" style="width:70px;"></td>
                        <td><input type="text" name="arr639" style="width:70px;"></td>
                        <td><input type="text" name="arr640" style="width:70px;"></td>
                        <td><input type="text" name="arr641" style="width:70px;"></td>
                        <td><input type="text" name="arr642" style="width:70px;"></td>
                        <td><input type="text" name="arr643" style="width:70px;"></td>
                        <td><input type="text" name="arr644" style="width:70px;"></td>
                    </tr>
                     <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr645" style="width:70px;"></td>
                        <td><input type="text" name="arr646" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr647" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr648" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr649" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr650" style="width:70px;"></td>
                        <td><input type="text" name="arr651" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr652" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr653" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr654" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr655" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr656" style="width:70px;"></td>
                        <td><input type="text" name="arr657" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr658" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr659" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr660" style="width:70px;"></td>
                        <td><strong>CC</strong><input hidden type="text" name="arr661" style="width:70px;"></td>
                        <td><input type="text" name="arr662" style="width:70px;"></td>
                        <td>/168<input hidden type="text" name="arr663" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr664" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr665" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr666" style="width:70px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);">
                 <?php echo $Editroll;?>'s  8th sem Progress</h3>
            <table class="table table-striped" >
                <thead>
                     <tr>
                        <th></th>
                        <th><?php echo $sub[10];?></th>
                        <th><?php echo $sub[11];?></th>
                        <th><?php echo $sub[12];?></th>
                        <th><?php echo $sub[13];?></th>
                        <th><?php echo $sub[14];?></th>
                        <th><?php echo $sub[15];?></th>
                        <th><?php echo $sub[16];?><br></th>
                        <th><?php echo $sub[17];?></th>
                        <th><?php echo $sub[18];?></th>
                        <th><?php echo $sub[19];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IV Year 1 Sem 1 Mid<br></td>
                        <td><input type="text" name="arr667" style="width:70px;"></td>
                        <td><input type="text" name="arr668" style="width:70px;"></td>
                        <td><input type="text" name="arr669" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr670" style="width:70px;"></td>
                        <td><input type="text" name="arr671" style="width:70px;"></td>
                        <td><input type="text" name="arr672" style="width:70px;"></td>
                        <td><input type="text" name="arr673" style="width:70px;"></td>
                        <td><input type="text" name="arr674" style="width:70px;"></td>
                        <td><input type="text" name="arr675" style="width:70px;"></td>
                        <td><input type="text" name="arr676" style="width:70px;"></td>
                        <td><input type="text" name="arr677" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td>IV Year 1 Sem 2 Mid<br></td>
                        <td><input type="text" name="arr678" style="width:70px;"></td>
                        <td><input type="text" name="arr679" style="width:70px;"></td>
                        <td><input type="text" name="arr680" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr681" style="width:70px;"></td>
                        <td><input type="text" name="arr682" style="width:70px;"></td>
                        <td><input type="text" name="arr683" style="width:70px;"></td>
                        <td><input type="text" name="arr684" style="width:70px;"></td>
                        <td><input type="text" name="arr685" style="width:70px;"></td>
                        <td><input type="text" name="arr686" style="width:70px;"></td>
                        <td><input type="text" name="arr687" style="width:70px;"></td>
                        <td><input type="text" name="arr688" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td>IV Year I Semester&nbsp;<br></td>
                        <td><input type="text" name="arr689" style="width:70px;"></td>
                        <td><input type="text" name="arr690" style="width:70px;"></td>
                        <td><input type="text" name="arr691" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr692" style="width:70px;"></td>
                        <td><input type="text" name="arr693" style="width:70px;"></td>
                        <td><input type="text" name="arr694" style="width:70px;"></td>
                        <td><input type="text" name="arr695" style="width:70px;"></td>
                        <td><input type="text" name="arr696" style="width:70px;"></td>
                        <td><input type="text" name="arr697" style="width:70px;"></td>
                        <td><input type="text" name="arr698" style="width:70px;"></td>
                        <td><input type="text" name="arr699" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td>Result&nbsp;<br></td>
                        <td><input type="text" name="arr700" style="width:70px;"></td>
                        <td><input type="text" name="arr701" style="width:70px;"></td>
                        <td><input type="text" name="arr702" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr703" style="width:70px;"></td>
                        <td><input type="text" name="arr704" style="width:70px;"></td>
                        <td><input type="text" name="arr705" style="width:70px;"></td>
                        <td><input type="text" name="arr706" style="width:70px;"></td>
                        <td><input type="text" name="arr707" style="width:70px;"></td>
                        <td><input type="text" name="arr708" style="width:70px;"></td>
                        <td><input type="text" name="arr709" style="width:70px;"></td>
                        <td><input type="text" name="arr710" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr711" style="width:70px;"></td>
                        <td><input type="text" name="arr712" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr713" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr714" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr715" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr716" style="width:70px;"></td>
                        <td><input type="text" name="arr717" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr718" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr719" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr720" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr721" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr722" style="width:70px;"></td>
                        <td><input type="text" name="arr723" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr724" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr725" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr726" style="width:70px;"></td>
                        <td><strong>CC</strong><input hidden type="text" name="arr727" style="width:70px;"></td>
                        <td><input type="text" name="arr728" style="width:70px;"></td>
                        <td>/192<input hidden type="text" name="arr729" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr730" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr731" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr732" style="width:70px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-md-6">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">I Sem&nbsp;Attendance</h1>
                <div class="table-responsive table-bordered">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:156px;">Subject</th>
                                <th style="width:269px;">Total classes</th>
                                <th style="width:269px;">Classes attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $sub[0]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr733" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr734" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[1]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr735" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr736" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[2]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr737" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr738" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[3]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr739" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr740" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[4]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr741" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr742" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[5]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr743" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr744" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[6]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr745" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr746" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[7]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr747" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr748" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[8]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr749" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr750" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[9]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr751" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr752" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" type="text" name="arr753" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr754" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">II Sem Attendance</h1>
                <div class="table-responsive table-bordered">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:156px;">Subject</th>
                                <th style="width:269px;">Total classes</th>
                                <th style="width:269px;">Classes attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $sub[10]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr755" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr756" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[11]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr757" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr758" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[12]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr759" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr760" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[13]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr761" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr762" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[14]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr763" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr764" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[15]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr765" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr766" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[16]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr767" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr768" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[17]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr769" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr770" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[18]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr771" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr772" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[19]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr773" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr774" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" type="text" name="arr775" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr776" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-primary" class="btn btn-primary" type="submit"  form="fourthyear" value="submit"  style="width:151px;height:45px;background-color:rgb(45,45,45);margin:24px;">Submit</button>
                </div>
            </div>
        </div>
        </div>
    </form>
    </div>

    <div style="height:20px;"></div>

    
<!--    Form sumit line -->
<!--        <button id="formsubmit"class="btn btn-dark btn-block btn-lg"  onclick="submitForms()" value="clickme">Submit</button>-->
    
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
    var alerted = localStorage.getItem('alerted') || '';
    if (alerted != 'yes') {
     alert("My alert.");
     localStorage.setItem('alerted','yes');
    }
</script>

    
</body>

</html>




<?php

$sqlval = "SELECT * FROM fouryear WHERE id='$Editroll'";
$resultval = mysqli_query($conn, $sqlval);

if (mysqli_num_rows($resultval) > 0){
    // output data of each row
   
     while($arrayval=mysqli_fetch_row($resultval)) 
    {
        for($i=0;$i<=176;$i++)
        {
          $subval[]=$arrayval[$i];
            
            
        }
         
    }
}
else {
    echo "Error: " . $sqlval . "<br>" . mysqli_error($conn);
}
echo "<script type=\"text/javascript\">
document.getElementsByName('arr601')[0].value = '$subval[1]'
 document.getElementsByName('arr602')[0].value = '$subval[2]'
 document.getElementsByName('arr603')[0].value = '$subval[3]'
 document.getElementsByName('arr604')[0].value = '$subval[4]'
 document.getElementsByName('arr605')[0].value = '$subval[5]'
 document.getElementsByName('arr606')[0].value = '$subval[6]'
 document.getElementsByName('arr607')[0].value = '$subval[7]'
 document.getElementsByName('arr608')[0].value = '$subval[8]'
 document.getElementsByName('arr609')[0].value = '$subval[9]'
 document.getElementsByName('arr610')[0].value = '$subval[10]'
 document.getElementsByName('arr611')[0].value = '$subval[11]'
 document.getElementsByName('arr612')[0].value = '$subval[12]'
 document.getElementsByName('arr613')[0].value = '$subval[13]'
 document.getElementsByName('arr614')[0].value = '$subval[14]'
 document.getElementsByName('arr615')[0].value = '$subval[15]'
 document.getElementsByName('arr616')[0].value = '$subval[16]'
 document.getElementsByName('arr617')[0].value = '$subval[17]'
 document.getElementsByName('arr618')[0].value = '$subval[18]'
 document.getElementsByName('arr619')[0].value = '$subval[19]'
 document.getElementsByName('arr620')[0].value = '$subval[20]'
 document.getElementsByName('arr621')[0].value = '$subval[21]'
 document.getElementsByName('arr622')[0].value = '$subval[22]'
 document.getElementsByName('arr623')[0].value = '$subval[23]'
 document.getElementsByName('arr624')[0].value = '$subval[24]'
 document.getElementsByName('arr625')[0].value = '$subval[25]'
 document.getElementsByName('arr626')[0].value = '$subval[26]'
 document.getElementsByName('arr627')[0].value = '$subval[27]'
 document.getElementsByName('arr628')[0].value = '$subval[28]'
 document.getElementsByName('arr629')[0].value = '$subval[29]'
 document.getElementsByName('arr630')[0].value = '$subval[30]'
 document.getElementsByName('arr631')[0].value = '$subval[31]'
 document.getElementsByName('arr632')[0].value = '$subval[32]'
 document.getElementsByName('arr633')[0].value = '$subval[33]'
 document.getElementsByName('arr634')[0].value = '$subval[34]'
 document.getElementsByName('arr635')[0].value = '$subval[35]'
 document.getElementsByName('arr636')[0].value = '$subval[36]'
 document.getElementsByName('arr637')[0].value = '$subval[37]'
 document.getElementsByName('arr638')[0].value = '$subval[38]'
 document.getElementsByName('arr639')[0].value = '$subval[39]'
 document.getElementsByName('arr640')[0].value = '$subval[40]'
 document.getElementsByName('arr641')[0].value = '$subval[41]'
 document.getElementsByName('arr642')[0].value = '$subval[42]'
 document.getElementsByName('arr643')[0].value = '$subval[43]'
 document.getElementsByName('arr644')[0].value = '$subval[44]'
 document.getElementsByName('arr645')[0].value = '$subval[45]'
 document.getElementsByName('arr646')[0].value = '$subval[46]'
 document.getElementsByName('arr647')[0].value = '$subval[47]'
 document.getElementsByName('arr648')[0].value = '$subval[48]'
 document.getElementsByName('arr649')[0].value = '$subval[49]'
 document.getElementsByName('arr650')[0].value = '$subval[50]'
 document.getElementsByName('arr651')[0].value = '$subval[51]'
 document.getElementsByName('arr652')[0].value = '$subval[52]'
 document.getElementsByName('arr653')[0].value = '$subval[53]'
 document.getElementsByName('arr654')[0].value = '$subval[54]'
 document.getElementsByName('arr655')[0].value = '$subval[55]'
 document.getElementsByName('arr656')[0].value = '$subval[56]'
 document.getElementsByName('arr657')[0].value = '$subval[57]'
 document.getElementsByName('arr658')[0].value = '$subval[58]'
 document.getElementsByName('arr659')[0].value = '$subval[59]'
 document.getElementsByName('arr660')[0].value = '$subval[60]'
 document.getElementsByName('arr661')[0].value = '$subval[61]'
 document.getElementsByName('arr662')[0].value = '$subval[62]'
 document.getElementsByName('arr663')[0].value = '$subval[63]'
 document.getElementsByName('arr664')[0].value = '$subval[64]'
 document.getElementsByName('arr665')[0].value = '$subval[65]'
 document.getElementsByName('arr666')[0].value = '$subval[66]'
 document.getElementsByName('arr667')[0].value = '$subval[67]'
 document.getElementsByName('arr668')[0].value = '$subval[68]'
 document.getElementsByName('arr669')[0].value = '$subval[69]'
 document.getElementsByName('arr670')[0].value = '$subval[70]'
 document.getElementsByName('arr671')[0].value = '$subval[71]'
 document.getElementsByName('arr672')[0].value = '$subval[72]'
 document.getElementsByName('arr673')[0].value = '$subval[73]'
 document.getElementsByName('arr674')[0].value = '$subval[74]'
 document.getElementsByName('arr675')[0].value = '$subval[75]'
 document.getElementsByName('arr676')[0].value = '$subval[76]'
 document.getElementsByName('arr677')[0].value = '$subval[77]'
 document.getElementsByName('arr678')[0].value = '$subval[78]'
 document.getElementsByName('arr679')[0].value = '$subval[79]'
 document.getElementsByName('arr680')[0].value = '$subval[80]'
 document.getElementsByName('arr681')[0].value = '$subval[81]'
 document.getElementsByName('arr682')[0].value = '$subval[82]'
 document.getElementsByName('arr683')[0].value = '$subval[83]'
 document.getElementsByName('arr684')[0].value = '$subval[84]'
 document.getElementsByName('arr685')[0].value = '$subval[85]'
 document.getElementsByName('arr686')[0].value = '$subval[86]'
 document.getElementsByName('arr687')[0].value = '$subval[87]'
 document.getElementsByName('arr688')[0].value = '$subval[88]'
 document.getElementsByName('arr689')[0].value = '$subval[89]'
 document.getElementsByName('arr690')[0].value = '$subval[90]'
 document.getElementsByName('arr691')[0].value = '$subval[91]'
 document.getElementsByName('arr692')[0].value = '$subval[92]'
 document.getElementsByName('arr693')[0].value = '$subval[93]'
 document.getElementsByName('arr694')[0].value = '$subval[94]'
 document.getElementsByName('arr695')[0].value = '$subval[95]'
 document.getElementsByName('arr696')[0].value = '$subval[96]'
 document.getElementsByName('arr697')[0].value = '$subval[97]'
 document.getElementsByName('arr698')[0].value = '$subval[98]'
 document.getElementsByName('arr699')[0].value = '$subval[99]'
 document.getElementsByName('arr700')[0].value = '$subval[100]'
 document.getElementsByName('arr701')[0].value = '$subval[101]'
 document.getElementsByName('arr702')[0].value = '$subval[102]'
 document.getElementsByName('arr703')[0].value = '$subval[103]'
 document.getElementsByName('arr704')[0].value = '$subval[104]'
 document.getElementsByName('arr705')[0].value = '$subval[105]'
 document.getElementsByName('arr706')[0].value = '$subval[106]'
 document.getElementsByName('arr707')[0].value = '$subval[107]'
 document.getElementsByName('arr708')[0].value = '$subval[108]'
 document.getElementsByName('arr709')[0].value = '$subval[109]'
 document.getElementsByName('arr710')[0].value = '$subval[110]'
 document.getElementsByName('arr711')[0].value = '$subval[111]'
 document.getElementsByName('arr712')[0].value = '$subval[112]'
 document.getElementsByName('arr713')[0].value = '$subval[113]'
 document.getElementsByName('arr714')[0].value = '$subval[114]'
 document.getElementsByName('arr715')[0].value = '$subval[115]'
 document.getElementsByName('arr716')[0].value = '$subval[116]'
 document.getElementsByName('arr717')[0].value = '$subval[117]'
 document.getElementsByName('arr718')[0].value = '$subval[118]'
 document.getElementsByName('arr719')[0].value = '$subval[119]'
 document.getElementsByName('arr720')[0].value = '$subval[120]'
 document.getElementsByName('arr721')[0].value = '$subval[121]'
 document.getElementsByName('arr722')[0].value = '$subval[122]'
 document.getElementsByName('arr723')[0].value = '$subval[123]'
 document.getElementsByName('arr724')[0].value = '$subval[124]'
 document.getElementsByName('arr725')[0].value = '$subval[125]'
 document.getElementsByName('arr726')[0].value = '$subval[126]'
 document.getElementsByName('arr727')[0].value = '$subval[127]'
 document.getElementsByName('arr728')[0].value = '$subval[128]'
 document.getElementsByName('arr729')[0].value = '$subval[129]'
 document.getElementsByName('arr730')[0].value = '$subval[130]'
 document.getElementsByName('arr731')[0].value = '$subval[131]'
 document.getElementsByName('arr732')[0].value = '$subval[132]'
 document.getElementsByName('arr733')[0].value = '$subval[133]'
 document.getElementsByName('arr734')[0].value = '$subval[134]'
 document.getElementsByName('arr735')[0].value = '$subval[135]'
 document.getElementsByName('arr736')[0].value = '$subval[136]'
 document.getElementsByName('arr737')[0].value = '$subval[137]'
 document.getElementsByName('arr738')[0].value = '$subval[138]'
 document.getElementsByName('arr739')[0].value = '$subval[139]'
 document.getElementsByName('arr740')[0].value = '$subval[140]'
 document.getElementsByName('arr741')[0].value = '$subval[141]'
 document.getElementsByName('arr742')[0].value = '$subval[142]'
 document.getElementsByName('arr743')[0].value = '$subval[143]'
 document.getElementsByName('arr744')[0].value = '$subval[144]'
 document.getElementsByName('arr745')[0].value = '$subval[145]'
 document.getElementsByName('arr746')[0].value = '$subval[146]'
 document.getElementsByName('arr747')[0].value = '$subval[147]'
 document.getElementsByName('arr748')[0].value = '$subval[148]'
 document.getElementsByName('arr749')[0].value = '$subval[149]'
 document.getElementsByName('arr750')[0].value = '$subval[150]'
 document.getElementsByName('arr751')[0].value = '$subval[151]'
 document.getElementsByName('arr752')[0].value = '$subval[152]'
 document.getElementsByName('arr753')[0].value = '$subval[153]'
 document.getElementsByName('arr754')[0].value = '$subval[154]'
 document.getElementsByName('arr755')[0].value = '$subval[155]'
 document.getElementsByName('arr756')[0].value = '$subval[156]'
 document.getElementsByName('arr757')[0].value = '$subval[157]'
 document.getElementsByName('arr758')[0].value = '$subval[158]'
 document.getElementsByName('arr759')[0].value = '$subval[159]'
 document.getElementsByName('arr760')[0].value = '$subval[160]'
 document.getElementsByName('arr761')[0].value = '$subval[161]'
 document.getElementsByName('arr762')[0].value = '$subval[162]'
 document.getElementsByName('arr763')[0].value = '$subval[163]'
 document.getElementsByName('arr764')[0].value = '$subval[164]'
 document.getElementsByName('arr765')[0].value = '$subval[165]'
 document.getElementsByName('arr766')[0].value = '$subval[166]'
 document.getElementsByName('arr767')[0].value = '$subval[167]'
 document.getElementsByName('arr768')[0].value = '$subval[168]'
 document.getElementsByName('arr769')[0].value = '$subval[169]'
 document.getElementsByName('arr770')[0].value = '$subval[170]'
 document.getElementsByName('arr771')[0].value = '$subval[171]'
 document.getElementsByName('arr772')[0].value = '$subval[172]'
 document.getElementsByName('arr773')[0].value = '$subval[173]'
 document.getElementsByName('arr774')[0].value = '$subval[174]'
 document.getElementsByName('arr775')[0].value = '$subval[175]'
 document.getElementsByName('arr776')[0].value = '$subval[176]'  
    </script>";
?>




