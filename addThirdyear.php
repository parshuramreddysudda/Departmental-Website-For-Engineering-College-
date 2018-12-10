<?php
  

include'config.php';
//Getting values from previous page 

$roll=$_SESSION["rollsession"];
$sname=$_SESSION["sname"];
$fname=$_SESSION["fname"];
$year=$_SESSION["year"];
//Code completed for retrieving values




//Subject details getting query code starts here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sub310,sub311,sub312,sub313,sub314,sub315,sub316,sub317,sub318,sub319,sub320,sub321,sub322,sub323,sub324,sub325,sub326,sub327,sub328,sub329 FROM subjects WHERE subyear=$year";
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
    alert('I think there are no subjects for ".$year." . Please got to Subject's Page and ADD them up')
     window.location.href='EditSubDetails.php'
    </script>";
}


  
?>


<!DOCTYPE html>
<html style="background-color:#3c4141;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SriInduDepartmentalWebsite-Final (1)</title>
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
            <form id="thirdyear" name="thirdyear" action='thirddetailsuccess.php' method="post">
        <h1 class="text-center" style="color:rgb(222,222,222);background-color:#8b8a8a;"><?php echo $roll;?> III Year Progress</h1>
        <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);"><?php echo $sname;?>'s 5th sem Progress</h3>
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
                        <td><strong>V Sem 1 Mid</strong></td>
                        <td><input type="text" name="arr401" style="width:70px;"></td>
                        <td><input type="text" name="arr402" style="width:70px;"></td>
                        <td><input type="text" name="arr403" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr404" style="width:70px;"></td>
                        <td><input type="text" name="arr405" style="width:70px;"></td>
                        <td><input type="text" name="arr406" style="width:70px;"></td>
                        <td><input type="text" name="arr407" style="width:70px;"></td>
                        <td><input type="text" name="arr408" style="width:70px;"></td>
                        <td><input type="text" name="arr409" style="width:70px;"></td>
                        <td><input type="text" name="arr410" style="width:70px;"></td>
                        <td><input type="text" name="arr411" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>III &nbsp;V Sem 2 Mid</strong><br></td>
                        <td><input type="text" name="arr412" style="width:70px;"></td>
                        <td><input type="text" name="arr413" style="width:70px;"></td>
                        <td><input type="text" name="arr414" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr415" style="width:70px;"></td>
                        <td><input type="text" name="arr416" style="width:70px;"></td>
                        <td><input type="text" name="arr417" style="width:70px;"></td>
                        <td><input type="text" name="arr418" style="width:70px;"></td>
                        <td><input type="text" name="arr419" style="width:70px;"></td>
                        <td><input type="text" name="arr420" style="width:70px;"></td>
                        <td><input type="text" name="arr421" style="width:70px;"></td>
                        <td><input type="text" name="arr422" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>V Semester&nbsp;</strong><br></td>
                        <td><input type="text" name="arr423" style="width:70px;"></td>
                        <td><input type="text" name="arr424" style="width:70px;"></td>
                        <td><input type="text" name="arr425" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr426" style="width:70px;"></td>
                        <td><input type="text" name="arr427" style="width:70px;"></td>
                        <td><input type="text" name="arr428" style="width:70px;"></td>
                        <td><input type="text" name="arr429" style="width:70px;"></td>
                        <td><input type="text" name="arr430" style="width:70px;"></td>
                        <td><input type="text" name="arr431" style="width:70px;"></td>
                        <td><input type="text" name="arr432" style="width:70px;"></td>
                        <td><input type="text" name="arr433" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td><input type="text" name="arr434" style="width:70px;"></td>
                        <td><input type="text" name="arr435" style="width:70px;"></td>
                        <td><input type="text" name="arr436" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr437" style="width:70px;"></td>
                        <td><input type="text" name="arr438" style="width:70px;"></td>
                        <td><input type="text" name="arr439" style="width:70px;"></td>
                        <td><input type="text" name="arr440" style="width:70px;"></td>
                        <td><input type="text" name="arr441" style="width:70px;"></td>
                        <td><input type="text" name="arr442" style="width:70px;"></td>
                        <td><input type="text" name="arr443" style="width:70px;"></td>
                        <td><input type="text" name="arr444" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr445" style="width:70px;"></td>
                        <td><input type="text" name="arr446" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr447" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr448" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr449" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr450" style="width:70px;"></td>
                        <td><input type="text" name="arr451" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr452" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr453" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr454" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr455" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr456" style="width:70px;"></td>
                        <td><input type="text" name="arr457" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr458" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr459" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr460" style="width:70px;"></td>
                        <td><strong>CC</strong><input hidden type="text" name="arr461" style="width:70px;"></td>
                        <td><input type="text" name="arr462" style="width:70px;"></td>
                        <td>/120<input hidden type="text" name="arr463" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr464" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr465" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr466" style="width:70px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);"><?php echo $sname;?>'s 6th sem Progress</h3>
        <div class="table-responsive" data-aos="fade-up" data-aos-duration="1000">
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
                        <td><strong>VI Sem 1st Mid</strong></td>
                        <td><input type="text" name="arr467" style="width:70px;"></td>
                        <td><input type="text" name="arr468" style="width:70px;"></td>
                        <td><input type="text" name="arr469" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr470" style="width:70px;"></td>
                        <td><input type="text" name="arr471" style="width:70px;"></td>
                        <td><input type="text" name="arr472" style="width:70px;"></td>
                        <td><input type="text" name="arr473" style="width:70px;"></td>
                        <td><input type="text" name="arr474" style="width:70px;"></td>
                        <td><input type="text" name="arr475" style="width:70px;"></td>
                        <td><input type="text" name="arr476" style="width:70px;"></td>
                        <td><input type="text" name="arr477" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>VI Sem 2nd Mid</strong><br></td>
                        <td><input type="text" name="arr478" style="width:70px;"></td>
                        <td><input type="text" name="arr479" style="width:70px;"></td>
                        <td><input type="text" name="arr480" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr481" style="width:70px;"></td>
                        <td><input type="text" name="arr482" style="width:70px;"></td>
                        <td><input type="text" name="arr483" style="width:70px;"></td>
                        <td><input type="text" name="arr484" style="width:70px;"></td>
                        <td><input type="text" name="arr485" style="width:70px;"></td>
                        <td><input type="text" name="arr486" style="width:70px;"></td>
                        <td><input type="text" name="arr487" style="width:70px;"></td>
                        <td><input type="text" name="arr488" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>VI Semester&nbsp;</strong><br></td>
                        <td><input type="text" name="arr489" style="width:70px;"></td>
                        <td><input type="text" name="arr490" style="width:70px;"></td>
                        <td><input type="text" name="arr491" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr492" style="width:70px;"></td>
                        <td><input type="text" name="arr493" style="width:70px;"></td>
                        <td><input type="text" name="arr494" style="width:70px;"></td>
                        <td><input type="text" name="arr495" style="width:70px;"></td>
                        <td><input type="text" name="arr496" style="width:70px;"></td>
                        <td><input type="text" name="arr497" style="width:70px;"></td>
                        <td><input type="text" name="arr498" style="width:70px;"></td>
                        <td><input type="text" name="arr499" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td><input type="text" name="arr500" style="width:70px;"></td>
                        <td><input type="text" name="arr501" style="width:70px;"></td>
                        <td><input type="text" name="arr502" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr503" style="width:70px;"></td>
                        <td><input type="text" name="arr504" style="width:70px;"></td>
                        <td><input type="text" name="arr505" style="width:70px;"></td>
                        <td><input type="text" name="arr506" style="width:70px;"></td>
                        <td><input type="text" name="arr507" style="width:70px;"></td>
                        <td><input type="text" name="arr508" style="width:70px;"></td>
                        <td><input type="text" name="arr509" style="width:70px;"></td>
                        <td><input type="text" name="arr510" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr511" style="width:70px;"></td>
                        <td><input type="text" name="arr512" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr513" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr514" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr515" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr516" style="width:70px;"></td>
                        <td><input type="text" name="arr517" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr518" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr519" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr520" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr521" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr522" style="width:70px;"></td>
                        <td><input type="text" name="arr523" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr524" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr525" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr526" style="width:70px;"></td>
                        <td><strong>CC</strong><input hidden type="text" name="arr527" style="width:70px;"></td>
                        <td><input type="text" name="arr528" style="width:70px;"></td>
                        <td>/144<input hidden type="text" name="arr529" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr530" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr531" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr532" style="width:70px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-md-6">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">V Sem&nbsp;Attendance</h1>
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
                                <td><input class="form-control-sm" type="text" name="arr533" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr534" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[1]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr535" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr536" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[2]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr537" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr538" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[3]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr539" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr540" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[4]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr541" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr542" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[5]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr543" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr544" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[6]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr545" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr546" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[7]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr547" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr548" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[8]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr549" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr550" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[9]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr551" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr552" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" type="text" name="arr553" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr554" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">VI Sem Attendance</h1>
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
                                <td><input class="form-control-sm" type="text" name="arr555" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr556" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[11]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr557" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr558" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[12]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr559" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr560" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[13]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr561" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr562" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[14]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr563" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr564" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[15]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr565" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr566" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[16]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr567" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr568" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[17]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr569" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr570" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[18]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr571" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr572" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[19]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr573" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr574" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" type="text" name="arr575" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr576" autofocus="" style="width:115px;"></td>
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
                    <button class="btn btn-primary" type="submit"  form="thirdyear" value="submit" style="width:151px;height:45px;background-color:rgb(45,45,45);margin:24px;">Submit</button>
                </div>
            </div>
        </div>
        </div>
        </form>
    </div>

    
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