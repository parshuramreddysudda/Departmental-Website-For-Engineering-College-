<!--
This website is Developed by Parshuram Reddy (parshuram.sudda@gmail.com && VishnuVardhanReddy(vishnurapuru10@gmail.com)
This can be edited for free 
For More details and decsription contact Authors
This is Useful for Engineering Colleges Respectivly 
-->
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

$sql = "SELECT sub210,sub211,sub212,sub213,sub214,sub215,sub216,sub217,sub218,sub219,sub220,sub221,sub222,sub223,sub224,sub225,sub226,sub227,sub228,sub229 FROM subjects WHERE subyear=$year";
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
        <form id="secondyear" name="secondyear" action='seconddetailsuccess.php' method="post"  >
        <h1 class="text-center" style="color:rgb(222,222,222);background-color:#8b8a8a;"><?php echo $roll; ?> II Year Progress</h1>
        <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);"><?php echo $sname;?>'s  3rd sem Progress</h3>
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
                        <td><strong>III Sem 1 Mid</strong></td>
                        <td><input type="text" name="arr201" style="width:70px;"></td>
                        <td><input type="text" name="arr202" style="width:70px;"></td>
                        <td><input type="text" name="arr203" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr204" style="width:70px;"></td>
                        <td style="width:190px;"><input type="text" name="arr205" style="width:70px;"></td>
                        <td><input type="text" name="arr206" style="width:70px;"></td>
                        <td><input type="text" name="arr207" style="width:70px;"></td>
                        <td><input type="text" name="arr208" style="width:70px;"></td>
                        <td><input type="text" name="arr209" style="width:70px;"></td>
                        <td><input type="text" name="arr210" style="width:70px;"></td>
                        <td><input type="text" name="arr211" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>III Sem 2 Mid</strong><br></td>
                        <td><input type="text" name="arr212" style="width:70px;"></td>
                        <td><input type="text" name="arr213" style="width:70px;"></td>
                        <td><input type="text" name="arr214" style="width:70px;"></td>
                        <td><input type="text" name="arr215" style="width:70px;"></td>
                        <td><input type="text" name="arr216" style="width:70px;"></td>
                        <td><input type="text" name="arr217" style="width:70px;"></td>
                        <td><input type="text" name="arr218" style="width:70px;"></td>
                        <td><input type="text" name="arr219" style="width:70px;"></td>
                        <td><input type="text" name="arr220" style="width:70px;"></td>
                        <td><input type="text" name="arr221" style="width:70px;"></td>
                        <td><input type="text" name="arr222" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>III Semester&nbsp;</strong><br></td>
                        <td><input type="text" name="arr223" style="width:70px;"></td>
                        <td><input type="text" name="arr224" style="width:70px;"></td>
                        <td><input type="text" name="arr225" style="width:70px;"></td>
                        <td><input type="text" name="arr226" style="width:70px;"></td>
                        <td><input type="text" name="arr227" style="width:70px;"></td>
                        <td><input type="text" name="arr228" style="width:70px;"></td>
                        <td><input type="text" name="arr229" style="width:70px;"></td>
                        <td><input type="text" name="arr230" style="width:70px;"></td>
                        <td><input type="text" name="arr231" style="width:70px;"></td>
                        <td><input type="text" name="arr232" style="width:70px;"></td>
                        <td><input type="text" name="arr233" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td><input type="text" name="arr234" style="width:70px;"></td>
                        <td><input type="text" name="arr235" style="width:70px;"></td>
                        <td><input type="text" name="arr236" style="width:70px;"></td>
                        <td><input type="text" name="arr237" style="width:70px;"></td>
                        <td><input type="text" name="arr238" style="width:70px;"></td>
                        <td><input type="text" name="arr239" style="width:70px;"></td>
                        <td><input type="text" name="arr240" style="width:70px;"></td>
                        <td><input type="text" name="arr241" style="width:70px;"></td>
                        <td><input type="text" name="arr242" style="width:70px;"></td>
                        <td><input type="text" name="arr243" style="width:70px;"></td>
                        <td><input type="text" name="arr244" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr245" style="width:70px;"></td>
                        <td><input type="text" name="arr246" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr247" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr248" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr249" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr250" style="width:70px;"></td>
                        <td><input type="text" name="arr251" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr252" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr253" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr254" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr255" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr256" style="width:70px;"></td>
                        <td><input type="text" name="arr257" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr258" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr259" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr260" style="width:70px;"></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr261" style="width:70px;"></td>
                        <td><input type="text" name="arr262" style="width:70px;"></td>
                        <td>/72<input hidden type="text" name="arr263" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr264" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr265" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr266" style="width:70px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);"><?php echo $sname;?>'s  4th sem Progress</h3>
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
                        <td><strong>IV Sem 1st Mid</strong></td>
                        <td><input type="text" name="arr267" style="width:70px;"></td>
                        <td><input type="text" name="arr268" style="width:70px;"></td>
                        <td><input type="text" name="arr269" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr270" style="width:70px;"></td>
                        <td style="width:190px;"><input type="text" name="arr271" style="width:70px;"></td>
                        <td><input type="text" name="arr272" style="width:70px;"></td>
                        <td><input type="text" name="arr273" style="width:70px;"></td>
                        <td><input type="text" name="arr274" style="width:70px;"></td>
                        <td><input type="text" name="arr275" style="width:70px;"></td>
                        <td><input type="text" name="arr276" style="width:70px;"></td>
                        <td><input type="text" name="arr277" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>IV Sem 2nd Mid</strong><br></td>
                        <td><input type="text" name="arr278" style="width:70px;"></td>
                        <td><input type="text" name="arr279" style="width:70px;"></td>
                        <td><input type="text" name="arr280" style="width:70px;"></td>
                        <td><input type="text" name="arr281" style="width:70px;"></td>
                        <td><input type="text" name="arr282" style="width:70px;"></td>
                        <td><input type="text" name="arr283" style="width:70px;"></td>
                        <td><input type="text" name="arr284" style="width:70px;"></td>
                        <td><input type="text" name="arr285" style="width:70px;"></td>
                        <td><input type="text" name="arr286" style="width:70px;"></td>
                        <td><input type="text" name="arr287" style="width:70px;"></td>
                        <td><input type="text" name="arr288" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>IV Year 2nd Semester&nbsp;</strong><br></td>
                        <td><input type="text" name="arr289" style="width:70px;"></td>
                        <td><input type="text" name="arr290" style="width:70px;"></td>
                        <td><input type="text" name="arr291" style="width:70px;"></td>
                        <td><input type="text" name="arr292" style="width:70px;"></td>
                        <td><input type="text" name="arr293" style="width:70px;"></td>
                        <td><input type="text" name="arr294" style="width:70px;"></td>
                        <td><input type="text" name="arr295" style="width:70px;"></td>
                        <td><input type="text" name="arr296" style="width:70px;"></td>
                        <td><input type="text" name="arr297" style="width:70px;"></td>
                        <td><input type="text" name="arr298" style="width:70px;"></td>
                        <td><input type="text" name="arr299" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>Result&nbsp;</strong><br></td>
                        <td><input type="text" name="arr300" style="width:70px;"></td>
                        <td><input type="text" name="arr301" style="width:70px;"></td>
                        <td><input type="text" name="arr302" style="width:70px;"></td>
                        <td><input type="text" name="arr303" style="width:70px;"></td>
                        <td><input type="text" name="arr304" style="width:70px;"></td>
                        <td><input type="text" name="arr305" style="width:70px;"></td>
                        <td><input type="text" name="arr306" style="width:70px;"></td>
                        <td><input type="text" name="arr307" style="width:70px;"></td>
                        <td><input type="text" name="arr308" style="width:70px;"></td>
                        <td><input type="text" name="arr309" style="width:70px;"></td>
                        <td><input type="text" name="arr310" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr311" style="width:70px;"></td>
                        <td><input type="text" name="arr312" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr313" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr314" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr315" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr316" style="width:70px;"></td>
                        <td><input type="text" name="arr317" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr318" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr319" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr320" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr321" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr322" style="width:70px;"></td>
                        <td><input type="text" name="arr323" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr324" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr325" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr326" style="width:70px;"></td>
                        <td><strong>CC</strong><input hidden type="text" name="arr327" style="width:70px;"></td>
                        <td><input type="text" name="arr328" style="width:70px;"></td>
                        <td>/96<input hidden type="text" name="arr329" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr330" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr331" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr332" style="width:70px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-md-6">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">III Sem&nbsp;Attendance</h1>
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
                                <td><input class="form-control-sm" name="arr333" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr334" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[1]; ?></td>
                                <td><input class="form-control-sm" name="arr335" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr336" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[2]; ?></td>
                                <td><input class="form-control-sm" name="arr337" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr338" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[3]; ?></td>
                                <td><input class="form-control-sm" name="arr339" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr340" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[4]; ?></td>
                                <td><input class="form-control-sm" name="arr341" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr342" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[5]; ?></td>
                                <td><input class="form-control-sm" name="arr343" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr344" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[6]; ?></td>
                                <td><input class="form-control-sm" name="arr345" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr346" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[7]; ?></td>
                                <td><input class="form-control-sm" name="arr347" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr348" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[8]; ?></td>
                                <td><input class="form-control-sm" name="arr349" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr350" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" name="arr351" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr352" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">IV Sem Attendance</h1>
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
                                <td><input class="form-control-sm" name="arr353" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr354" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[11]; ?></td>
                                <td><input class="form-control-sm" name="arr355" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr356" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[12]; ?></td>
                                <td><input class="form-control-sm" name="arr357" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr358" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[13]; ?></td>
                                <td><input class="form-control-sm" name="arr359" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr360" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[14]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr361" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr362" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[15]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr363" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr364" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[16]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr365" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr366" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[17]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr367" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr368" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[18]; ?></td>
                                <td><input class="form-control-sm" type="text" name="arr369" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr370" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" type="text" name="arr371" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" type="text" name="arr372" autofocus="" style="width:115px;"></td>
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
                    <button class="btn btn-primary" form="secondyear" value="submit" type="submit" style="width:151px;height:45px;background-color:rgb(45,45,45);margin:24px;">Submit</button>
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