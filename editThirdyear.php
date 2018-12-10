
<?php
    
include'config.php';
    
//Getting values from previous page 
$Editroll=$_SESSION["Editroll"];
$Edityear=$_SESSION["Edityear"];
//Code completed for retrieving values


//Subject details getting query code starts here

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sub310,sub311,sub312,sub313,sub314,sub315,sub316,sub317,sub318,sub319,sub320,sub321,sub322,sub323,sub324,sub325,sub326,sub327,sub328,sub329 FROM subjects WHERE subyear='$Edityear'";
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

//Code completed for retrieving values

  
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
            <form id="thirdyear" name="thirdyear" action='thirdeditsuccess.php' method="post">
        <h1 class="text-center" style="color:rgb(222,222,222);background-color:#8b8a8a;"><?php echo $Editroll;?> III Year Progress</h1>
                <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);">
                 <?php echo $Editroll;?>'s  5th sem Progress</h3>
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
                        <td><strong>III Year 1 Sem 1 Mid</strong></td>
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
                        <td><strong>III &nbsp;1 Sem 2 Mid</strong><br></td>
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
                        <td><strong>III Year I Semester&nbsp;</strong><br></td>
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
        <div class="table-responsive" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);">
                 <?php echo $Editroll;?>'s  6th sem Progress</h3>
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
                        <td><strong>III Year 2nd Sem 1st Mid</strong></td>
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
                        <td><strong>III Year 2nd Sem 2nd Mid</strong><br></td>
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
                        <td><strong>III Year 2nd Semester&nbsp;</strong><br></td>
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


<?php

$sqlval = "SELECT * FROM thirdyear WHERE id='$Editroll'";
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
document.getElementsByName('arr401')[0].value = '$subval[1]'
 document.getElementsByName('arr402')[0].value = '$subval[2]'
 document.getElementsByName('arr403')[0].value = '$subval[3]'
 document.getElementsByName('arr404')[0].value = '$subval[4]'
 document.getElementsByName('arr405')[0].value = '$subval[5]'
 document.getElementsByName('arr406')[0].value = '$subval[6]'
 document.getElementsByName('arr407')[0].value = '$subval[7]'
 document.getElementsByName('arr408')[0].value = '$subval[8]'
 document.getElementsByName('arr409')[0].value = '$subval[9]'
 document.getElementsByName('arr410')[0].value = '$subval[10]'
 document.getElementsByName('arr411')[0].value = '$subval[11]'
 document.getElementsByName('arr412')[0].value = '$subval[12]'
 document.getElementsByName('arr413')[0].value = '$subval[13]'
 document.getElementsByName('arr414')[0].value = '$subval[14]'
 document.getElementsByName('arr415')[0].value = '$subval[15]'
 document.getElementsByName('arr416')[0].value = '$subval[16]'
 document.getElementsByName('arr417')[0].value = '$subval[17]'
 document.getElementsByName('arr418')[0].value = '$subval[18]'
 document.getElementsByName('arr419')[0].value = '$subval[19]'
 document.getElementsByName('arr420')[0].value = '$subval[20]'
 document.getElementsByName('arr421')[0].value = '$subval[21]'
 document.getElementsByName('arr422')[0].value = '$subval[22]'
 document.getElementsByName('arr423')[0].value = '$subval[23]'
 document.getElementsByName('arr424')[0].value = '$subval[24]'
 document.getElementsByName('arr425')[0].value = '$subval[25]'
 document.getElementsByName('arr426')[0].value = '$subval[26]'
 document.getElementsByName('arr427')[0].value = '$subval[27]'
 document.getElementsByName('arr428')[0].value = '$subval[28]'
 document.getElementsByName('arr429')[0].value = '$subval[29]'
 document.getElementsByName('arr430')[0].value = '$subval[30]'
 document.getElementsByName('arr431')[0].value = '$subval[31]'
 document.getElementsByName('arr432')[0].value = '$subval[32]'
 document.getElementsByName('arr433')[0].value = '$subval[33]'
 document.getElementsByName('arr434')[0].value = '$subval[34]'
 document.getElementsByName('arr435')[0].value = '$subval[35]'
 document.getElementsByName('arr436')[0].value = '$subval[36]'
 document.getElementsByName('arr437')[0].value = '$subval[37]'
 document.getElementsByName('arr438')[0].value = '$subval[38]'
 document.getElementsByName('arr439')[0].value = '$subval[39]'
 document.getElementsByName('arr440')[0].value = '$subval[40]'
 document.getElementsByName('arr441')[0].value = '$subval[41]'
 document.getElementsByName('arr442')[0].value = '$subval[42]'
 document.getElementsByName('arr443')[0].value = '$subval[43]'
 document.getElementsByName('arr444')[0].value = '$subval[44]'
 document.getElementsByName('arr445')[0].value = '$subval[45]'
 document.getElementsByName('arr446')[0].value = '$subval[46]'
 document.getElementsByName('arr447')[0].value = '$subval[47]'
 document.getElementsByName('arr448')[0].value = '$subval[48]'
 document.getElementsByName('arr449')[0].value = '$subval[49]'
 document.getElementsByName('arr450')[0].value = '$subval[50]'
 document.getElementsByName('arr451')[0].value = '$subval[51]'
 document.getElementsByName('arr452')[0].value = '$subval[52]'
 document.getElementsByName('arr453')[0].value = '$subval[53]'
 document.getElementsByName('arr454')[0].value = '$subval[54]'
 document.getElementsByName('arr455')[0].value = '$subval[55]'
 document.getElementsByName('arr456')[0].value = '$subval[56]'
 document.getElementsByName('arr457')[0].value = '$subval[57]'
 document.getElementsByName('arr458')[0].value = '$subval[58]'
 document.getElementsByName('arr459')[0].value = '$subval[59]'
 document.getElementsByName('arr460')[0].value = '$subval[60]'
 document.getElementsByName('arr461')[0].value = '$subval[61]'
 document.getElementsByName('arr462')[0].value = '$subval[62]'
 document.getElementsByName('arr463')[0].value = '$subval[63]'
 document.getElementsByName('arr464')[0].value = '$subval[64]'
 document.getElementsByName('arr465')[0].value = '$subval[65]'
 document.getElementsByName('arr466')[0].value = '$subval[66]'
 document.getElementsByName('arr467')[0].value = '$subval[67]'
 document.getElementsByName('arr468')[0].value = '$subval[68]'
 document.getElementsByName('arr469')[0].value = '$subval[69]'
 document.getElementsByName('arr470')[0].value = '$subval[70]'
 document.getElementsByName('arr471')[0].value = '$subval[71]'
 document.getElementsByName('arr472')[0].value = '$subval[72]'
 document.getElementsByName('arr473')[0].value = '$subval[73]'
 document.getElementsByName('arr474')[0].value = '$subval[74]'
 document.getElementsByName('arr475')[0].value = '$subval[75]'
 document.getElementsByName('arr476')[0].value = '$subval[76]'
 document.getElementsByName('arr477')[0].value = '$subval[77]'
 document.getElementsByName('arr478')[0].value = '$subval[78]'
 document.getElementsByName('arr479')[0].value = '$subval[79]'
 document.getElementsByName('arr480')[0].value = '$subval[80]'
 document.getElementsByName('arr481')[0].value = '$subval[81]'
 document.getElementsByName('arr482')[0].value = '$subval[82]'
 document.getElementsByName('arr483')[0].value = '$subval[83]'
 document.getElementsByName('arr484')[0].value = '$subval[84]'
 document.getElementsByName('arr485')[0].value = '$subval[85]'
 document.getElementsByName('arr486')[0].value = '$subval[86]'
 document.getElementsByName('arr487')[0].value = '$subval[87]'
 document.getElementsByName('arr488')[0].value = '$subval[88]'
 document.getElementsByName('arr489')[0].value = '$subval[89]'
 document.getElementsByName('arr490')[0].value = '$subval[90]'
 document.getElementsByName('arr491')[0].value = '$subval[91]'
 document.getElementsByName('arr492')[0].value = '$subval[92]'
 document.getElementsByName('arr493')[0].value = '$subval[93]'
 document.getElementsByName('arr494')[0].value = '$subval[94]'
 document.getElementsByName('arr495')[0].value = '$subval[95]'
 document.getElementsByName('arr496')[0].value = '$subval[96]'
 document.getElementsByName('arr497')[0].value = '$subval[97]'
 document.getElementsByName('arr498')[0].value = '$subval[98]'
 document.getElementsByName('arr499')[0].value = '$subval[99]'
 document.getElementsByName('arr500')[0].value = '$subval[100]'
 document.getElementsByName('arr501')[0].value = '$subval[101]'
 document.getElementsByName('arr502')[0].value = '$subval[102]'
 document.getElementsByName('arr503')[0].value = '$subval[103]'
 document.getElementsByName('arr504')[0].value = '$subval[104]'
 document.getElementsByName('arr505')[0].value = '$subval[105]'
 document.getElementsByName('arr506')[0].value = '$subval[106]'
 document.getElementsByName('arr507')[0].value = '$subval[107]'
 document.getElementsByName('arr508')[0].value = '$subval[108]'
 document.getElementsByName('arr509')[0].value = '$subval[109]'
 document.getElementsByName('arr510')[0].value = '$subval[110]'
 document.getElementsByName('arr511')[0].value = '$subval[111]'
 document.getElementsByName('arr512')[0].value = '$subval[112]'
 document.getElementsByName('arr513')[0].value = '$subval[113]'
 document.getElementsByName('arr514')[0].value = '$subval[114]'
 document.getElementsByName('arr515')[0].value = '$subval[115]'
 document.getElementsByName('arr516')[0].value = '$subval[116]'
 document.getElementsByName('arr517')[0].value = '$subval[117]'
 document.getElementsByName('arr518')[0].value = '$subval[118]'
 document.getElementsByName('arr519')[0].value = '$subval[119]'
 document.getElementsByName('arr520')[0].value = '$subval[120]'
 document.getElementsByName('arr521')[0].value = '$subval[121]'
 document.getElementsByName('arr522')[0].value = '$subval[122]'
 document.getElementsByName('arr523')[0].value = '$subval[123]'
 document.getElementsByName('arr524')[0].value = '$subval[124]'
 document.getElementsByName('arr525')[0].value = '$subval[125]'
 document.getElementsByName('arr526')[0].value = '$subval[126]'
 document.getElementsByName('arr527')[0].value = '$subval[127]'
 document.getElementsByName('arr528')[0].value = '$subval[128]'
 document.getElementsByName('arr529')[0].value = '$subval[129]'
 document.getElementsByName('arr530')[0].value = '$subval[130]'
 document.getElementsByName('arr531')[0].value = '$subval[131]'
 document.getElementsByName('arr532')[0].value = '$subval[132]'
 document.getElementsByName('arr533')[0].value = '$subval[133]'
 document.getElementsByName('arr534')[0].value = '$subval[134]'
 document.getElementsByName('arr535')[0].value = '$subval[135]'
 document.getElementsByName('arr536')[0].value = '$subval[136]'
 document.getElementsByName('arr537')[0].value = '$subval[137]'
 document.getElementsByName('arr538')[0].value = '$subval[138]'
 document.getElementsByName('arr539')[0].value = '$subval[139]'
 document.getElementsByName('arr540')[0].value = '$subval[140]'
 document.getElementsByName('arr541')[0].value = '$subval[141]'
 document.getElementsByName('arr542')[0].value = '$subval[142]'
 document.getElementsByName('arr543')[0].value = '$subval[143]'
 document.getElementsByName('arr544')[0].value = '$subval[144]'
 document.getElementsByName('arr545')[0].value = '$subval[145]'
 document.getElementsByName('arr546')[0].value = '$subval[146]'
 document.getElementsByName('arr547')[0].value = '$subval[147]'
 document.getElementsByName('arr548')[0].value = '$subval[148]'
 document.getElementsByName('arr549')[0].value = '$subval[149]'
 document.getElementsByName('arr550')[0].value = '$subval[150]'
 document.getElementsByName('arr551')[0].value = '$subval[151]'
 document.getElementsByName('arr552')[0].value = '$subval[152]'
 document.getElementsByName('arr553')[0].value = '$subval[153]'
 document.getElementsByName('arr554')[0].value = '$subval[154]'
 document.getElementsByName('arr555')[0].value = '$subval[155]'
 document.getElementsByName('arr556')[0].value = '$subval[156]'
 document.getElementsByName('arr557')[0].value = '$subval[157]'
 document.getElementsByName('arr558')[0].value = '$subval[158]'
 document.getElementsByName('arr559')[0].value = '$subval[159]'
 document.getElementsByName('arr560')[0].value = '$subval[160]'
 document.getElementsByName('arr561')[0].value = '$subval[161]'
 document.getElementsByName('arr562')[0].value = '$subval[162]'
 document.getElementsByName('arr563')[0].value = '$subval[163]'
 document.getElementsByName('arr564')[0].value = '$subval[164]'
 document.getElementsByName('arr565')[0].value = '$subval[165]'
 document.getElementsByName('arr566')[0].value = '$subval[166]'
 document.getElementsByName('arr567')[0].value = '$subval[167]'
 document.getElementsByName('arr568')[0].value = '$subval[168]'
 document.getElementsByName('arr569')[0].value = '$subval[169]'
 document.getElementsByName('arr570')[0].value = '$subval[170]'
 document.getElementsByName('arr571')[0].value = '$subval[171]'
 document.getElementsByName('arr572')[0].value = '$subval[172]'
 document.getElementsByName('arr573')[0].value = '$subval[173]'
 document.getElementsByName('arr574')[0].value = '$subval[174]'
 document.getElementsByName('arr575')[0].value = '$subval[175]'
 document.getElementsByName('arr576')[0].value = '$subval[176]'
     </script>";
?>

