
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

$sql = "SELECT sub110,sub111,sub112,sub113,sub114,sub115,sub116,sub117,sub118,sub119,sub120,sub121,sub122,sub123,sub124,sub125,sub126,sub127,sub128,sub129 FROM subjects WHERE subyear='$Edityear'";
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
    <div>
    <div class="container">
        <form id="firstyear" name="firstyear" action='firsteditsuccess.php' method="post" >
        <h1 class="text-center" style="color:rgb(222,222,222);background-color:#8b8a8a;"><?php echo $Editroll;?>'s  I Year Progress</h1>
            <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);"><?php echo $Editroll;?>'s  1st sem Progress</h3>
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
                        <td><strong>I Year 1 Sem 1 Mid</strong><br></td>
                        <td><input type="text" name="arr1" style="width:70px;"></td>
                        <td><input type="text" name="arr2" style="width:70px;"></td>
                        <td><input type="text" name="arr3" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr4" style="width:70px;"></td>
                        <td><input type="text" name="arr5" style="width:70px;"></td>
                        <td><input type="text" name="arr6" style="width:70px;"></td>
                        <td><input type="text" name="arr7" style="width:70px;"></td>
                        <td><input type="text" name="arr8" style="width:70px;"></td>
                        <td><input type="text" name="arr9" style="width:70px;"></td>
                        <td><input type="text" name="arr10" style="width:70px;"></td>
                        <td><input type="text" name="arr11" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>I Year 1 Sem 2 Mid</strong><br></td>
                        <td><input type="text" name="arr12" style="width:70px;"></td>
                        <td><input type="text" name="arr13" style="width:70px;"></td>
                        <td><input type="text" name="arr14" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr15" style="width:70px;"></td>
                        <td><input type="text" name="arr16" style="width:70px;"></td>
                        <td><input type="text" name="arr17" style="width:70px;"></td>
                        <td><input type="text" name="arr18" style="width:70px;"></td>
                        <td><input type="text" name="arr19" style="width:70px;"></td>
                        <td><input type="text" name="arr20" style="width:70px;"></td>
                        <td><input type="text" name="arr21" style="width:70px;"></td>
                        <td><input type="text" name="arr22" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>I Year I Semester&nbsp;</strong><br></td>
                        <td><input type="text" name="arr23" style="width:70px;"></td>
                        <td><input type="text" name="arr24" style="width:70px;"></td>
                        <td><input type="text" name="arr25" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr26" style="width:70px;"></td>
                        <td><input type="text" name="arr27" style="width:70px;"></td>
                        <td><input type="text" name="arr28" style="width:70px;"></td>
                        <td><input type="text" name="arr29" style="width:70px;"></td>
                        <td><input type="text" name="arr30" style="width:70px;"></td>
                        <td><input type="text" name="arr31" style="width:70px;"></td>
                        <td><input type="text" name="arr32" style="width:70px;"></td>
                        <td><input type="text" name="arr33" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td><input type="text" name="arr34" style="width:70px;"></td>
                        <td><input type="text" name="arr35" style="width:70px;"></td>
                        <td><input type="text" name="arr36" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr37" style="width:70px;"></td>
                        <td><input type="text" name="arr38" style="width:70px;"></td>
                        <td><input type="text" name="arr39" style="width:70px;"></td>
                        <td><input type="text" name="arr40" style="width:70px;"></td>
                        <td><input type="text" name="arr41" style="width:70px;"></td>
                        <td><input type="text" name="arr42" style="width:70px;"></td>
                        <td><input type="text" name="arr43" style="width:70px;"></td>
                        <td><input type="text" name="arr44" style="width:70px;"></td>
                    </tr>
                     <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr45" style="width:70px;"></td>
                        <td><input type="text" name="arr46" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr47" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr48" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr49" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr50" style="width:70px;"></td>
                        <td><input type="text" name="arr51" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr52" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr53" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr54" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr55" style="width:70px;"></td>
                    </tr>
                   <tr >
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr56" style="width:70px;"></td>
                        <td><input type="text" name="arr57" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr58" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr59" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr60" style="width:70px;"></td>
                        <td><strong>CC</strong><input hidden type="text" name="arr61" style="width:70px;"></td>
                        <td><input type="text" name="arr62" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr63" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr64" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr65" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr66" style="width:70px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive" data-aos="fade-up" data-aos-duration="1000">
             <h3 class="text-center" style="font-size:32px;background-color:#cdcdcd;color:rgb(51,51,51);">
                 <?php echo $Editroll;?>'s  2nd sem Progress</h3>
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
                        <td><strong>I Year 2nd Sem 1st Mid</strong><br></td>
                        <td><input type="text" name="arr67" style="width:70px;"></td>
                        <td><input type="text" name="arr68" style="width:70px;"></td>
                        <td><input type="text" name="arr69" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr70" style="width:70px;"></td>
                        <td><input type="text" name="arr71" style="width:70px;"></td>
                        <td><input type="text" name="arr72" style="width:70px;"></td>
                        <td><input type="text" name="arr73" style="width:70px;"></td>
                        <td><input type="text" name="arr74" style="width:70px;"></td>
                        <td><input type="text" name="arr75" style="width:70px;"></td>
                        <td><input type="text" name="arr76" style="width:70px;"></td>
                        <td><input type="text" name="arr77" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>I Year 2nd Sem 2nd Mid</strong><br></td>
                        <td><input type="text" name="arr78" style="width:70px;"></td>
                        <td><input type="text" name="arr79" style="width:70px;"></td>
                        <td><input type="text" name="arr80" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr81" style="width:70px;"></td>
                        <td><input type="text" name="arr82" style="width:70px;"></td>
                        <td><input type="text" name="arr83" style="width:70px;"></td>
                        <td><input type="text" name="arr84" style="width:70px;"></td>
                        <td><input type="text" name="arr85" style="width:70px;"></td>
                        <td><input type="text" name="arr86" style="width:70px;"></td>
                        <td><input type="text" name="arr87" style="width:70px;"></td>
                        <td><input type="text" name="arr88" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>I Year 2nd Semester&nbsp;</strong><br></td>
                        <td><input type="text" name="arr89" style="width:70px;"></td>
                        <td><input type="text" name="arr90" style="width:70px;"></td>
                        <td><input type="text" name="arr91" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr92" style="width:70px;"></td>
                        <td><input type="text" name="arr93" style="width:70px;"></td>
                        <td><input type="text" name="arr94" style="width:70px;"></td>
                        <td><input type="text" name="arr95" style="width:70px;"></td>
                        <td><input type="text" name="arr96" style="width:70px;"></td>
                        <td><input type="text" name="arr97" style="width:70px;"></td>
                        <td><input type="text" name="arr98" style="width:70px;"></td>
                        <td><input type="text" name="arr99" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td><input type="text" name="arr100" style="width:70px;"></td>
                        <td><input type="text" name="arr101" style="width:70px;"></td>
                        <td><input type="text" name="arr102" style="width:70px;"></td>
                        <td style="width:137px;"><input type="text" name="arr103" style="width:70px;"></td>
                        <td><input type="text" name="arr104" style="width:70px;"></td>
                        <td><input type="text" name="arr105" style="width:70px;"></td>
                        <td><input type="text" name="arr106" style="width:70px;"></td>
                        <td><input type="text" name="arr107" style="width:70px;"></td>
                        <td><input type="text" name="arr108" style="width:70px;"></td>
                        <td><input type="text" name="arr109" style="width:70px;"></td>
                        <td><input type="text" name="arr110" style="width:70px;"></td>
                    </tr>
                   <tr>
                        <td></td>
                        <td><strong>SGPA</strong><input hidden type="text" name="arr111" style="width:70px;"></td>
                        <td><input type="text" name="arr112" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr113" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr114" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr115" style="width:70px;"></td>
                        <td><strong>CGPA</strong><input hidden type="text" name="arr116" style="width:70px;"></td>
                        <td><input  type="text" name="arr117" style="width:70px;"></td>
                        <td>/10<input hidden type="text" name="arr118" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr119" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr120" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr121" style="width:70px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong>SC</strong><input hidden type="text" name="arr122" style="width:70px;"></td>
                        <td><input type="text" name="arr123" style="width:70px;"></td>
                        <td>/24<input hidden type="text" name="arr124" style="width:70px;"></td>
                        <td style="width:137px;"><input hidden type="text" name="arr125" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr126" style="width:70px;"></td>
                        <td><strong>CC</strong><input hidden type="text" name="arr127" style="width:70px;"></td>
                        <td><input type="text" name="arr128" style="width:70px;"></td>
                        <td>/48<input hidden type="text" name="arr129" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr130" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr131" style="width:70px;"></td>
                        <td><input hidden type="text" name="arr132" style="width:70px;"></td>
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
                                <td><input class="form-control-sm" name="arr133" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr134" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[1]; ?></td>
                                <td><input class="form-control-sm" name="arr135" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr136" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[2]; ?></td>
                                <td><input class="form-control-sm" name="arr137" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr138" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[3]; ?></td>
                                <td><input class="form-control-sm" name="arr139" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr140" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[4]; ?></td>
                                <td><input class="form-control-sm" name="arr141" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr142" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[5]; ?></td>
                                <td><input class="form-control-sm" name="arr143" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr144" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[6]; ?></td>
                                <td><input class="form-control-sm" name="arr145" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr146" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[7]; ?></td>
                                <td><input class="form-control-sm" name="arr147" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr148" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[8]; ?></td>
                                <td><input class="form-control-sm" name="arr149" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr150" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[9]; ?></td>
                                <td><input class="form-control-sm" name="arr151" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr152" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" name="arr153" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr154" type="text" autofocus="" style="width:115px;"></td>
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
                                <td><input class="form-control-sm" name="arr155" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr156" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[11]; ?></td>
                                <td><input class="form-control-sm" name="arr157" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr158" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[12]; ?></td>
                                <td><input class="form-control-sm" name="arr159" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr160" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[13]; ?></td>
                                <td><input class="form-control-sm" name="arr161" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr162" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[14]; ?></td>
                                <td><input class="form-control-sm" name="arr163" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr164" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[15]; ?></td>
                                <td><input class="form-control-sm" name="arr165" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr166" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[16]; ?></td>
                                <td><input class="form-control-sm" name="arr167" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr168" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[17]; ?></td>
                                <td><input class="form-control-sm" name="arr169" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr170" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[18]; ?></td>
                                <td><input class="form-control-sm" name="arr171" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr172" id="arr172" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                            <tr>
                                <td><?php echo $sub[19]; ?></td>
                                <td><input class="form-control-sm" name="arr173" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr174" type="text" autofocus="" style="width:115px;"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td><input class="form-control-sm" name="arr175" type="text" autofocus="" style="width:115px;"></td>
                                <td><input class="form-control-sm" name="arr176" type="text" autofocus="" style="width:115px;"></td>
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
                    <button class="btn btn-primary" form="firstyear" value="submit" type="submit" style="width:151px;height:45px;background-color:rgb(45,45,45);margin:24px;">Submit</button>
                </div>
            </div>
        </div>
        </div>
        </form>
        </div>
    
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

$sqlval = "Select * from firstyear where id='$Editroll'";
$resultval = mysqli_query($conn, $sqlval);


if (mysqli_num_rows($resultval) > 0)
{
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
    echo "Error: " . $sqlval . "<br>" .mysqli_error($conn);
}


echo "<script type=\"text/javascript\">
 document.getElementsByName('arr1')[0].value = '$subval[1]'
 document.getElementsByName('arr2')[0].value = '$subval[2]'
 document.getElementsByName('arr3')[0].value = '$subval[3]'
 document.getElementsByName('arr4')[0].value = '$subval[4]'
 document.getElementsByName('arr5')[0].value = '$subval[5]'
 document.getElementsByName('arr6')[0].value = '$subval[6]'
 document.getElementsByName('arr7')[0].value = '$subval[7]'
 document.getElementsByName('arr8')[0].value = '$subval[8]'
 document.getElementsByName('arr9')[0].value = '$subval[9]'
 document.getElementsByName('arr10')[0].value = '$subval[10]'
 document.getElementsByName('arr11')[0].value = '$subval[11]'
 document.getElementsByName('arr12')[0].value = '$subval[12]'
 document.getElementsByName('arr13')[0].value = '$subval[13]'
 document.getElementsByName('arr14')[0].value = '$subval[14]'
 document.getElementsByName('arr15')[0].value = '$subval[15]'
 document.getElementsByName('arr16')[0].value = '$subval[16]'
 document.getElementsByName('arr17')[0].value = '$subval[17]'
 document.getElementsByName('arr18')[0].value = '$subval[18]'
 document.getElementsByName('arr19')[0].value = '$subval[19]'
 document.getElementsByName('arr20')[0].value = '$subval[20]'
 document.getElementsByName('arr21')[0].value = '$subval[21]'
 document.getElementsByName('arr22')[0].value = '$subval[22]'
 document.getElementsByName('arr23')[0].value = '$subval[23]'
 document.getElementsByName('arr24')[0].value = '$subval[24]'
 document.getElementsByName('arr25')[0].value = '$subval[25]'
 document.getElementsByName('arr26')[0].value = '$subval[26]'
 document.getElementsByName('arr27')[0].value = '$subval[27]'
 document.getElementsByName('arr28')[0].value = '$subval[28]'
 document.getElementsByName('arr29')[0].value = '$subval[29]'
 document.getElementsByName('arr30')[0].value = '$subval[30]'
 document.getElementsByName('arr31')[0].value = '$subval[31]'
 document.getElementsByName('arr32')[0].value = '$subval[32]'
 document.getElementsByName('arr33')[0].value = '$subval[33]'
 document.getElementsByName('arr34')[0].value = '$subval[34]'
 document.getElementsByName('arr35')[0].value = '$subval[35]'
 document.getElementsByName('arr36')[0].value = '$subval[36]'
 document.getElementsByName('arr37')[0].value = '$subval[37]'
 document.getElementsByName('arr38')[0].value = '$subval[38]'
 document.getElementsByName('arr39')[0].value = '$subval[39]'
 document.getElementsByName('arr40')[0].value = '$subval[40]'
 document.getElementsByName('arr41')[0].value = '$subval[41]'
 document.getElementsByName('arr42')[0].value = '$subval[42]'
 document.getElementsByName('arr43')[0].value = '$subval[43]'
 document.getElementsByName('arr44')[0].value = '$subval[44]'
 document.getElementsByName('arr45')[0].value = '$subval[45]'
 document.getElementsByName('arr46')[0].value = '$subval[46]'
 document.getElementsByName('arr47')[0].value = '$subval[47]'
 document.getElementsByName('arr48')[0].value = '$subval[48]'
 document.getElementsByName('arr49')[0].value = '$subval[49]'
 document.getElementsByName('arr50')[0].value = '$subval[50]'
 document.getElementsByName('arr51')[0].value = '$subval[51]'
 document.getElementsByName('arr52')[0].value = '$subval[52]'
 document.getElementsByName('arr53')[0].value = '$subval[53]'
 document.getElementsByName('arr54')[0].value = '$subval[54]'
 document.getElementsByName('arr55')[0].value = '$subval[55]'
 document.getElementsByName('arr56')[0].value = '$subval[56]'
 document.getElementsByName('arr57')[0].value = '$subval[57]'
 document.getElementsByName('arr58')[0].value = '$subval[58]'
 document.getElementsByName('arr59')[0].value = '$subval[59]'
 document.getElementsByName('arr60')[0].value = '$subval[60]'
 document.getElementsByName('arr61')[0].value = '$subval[61]'
 document.getElementsByName('arr62')[0].value = '$subval[62]'
 document.getElementsByName('arr63')[0].value = '$subval[63]'
 document.getElementsByName('arr64')[0].value = '$subval[64]'
 document.getElementsByName('arr65')[0].value = '$subval[65]'
 document.getElementsByName('arr66')[0].value = '$subval[66]'
 document.getElementsByName('arr67')[0].value = '$subval[67]'
 document.getElementsByName('arr68')[0].value = '$subval[68]'
 document.getElementsByName('arr69')[0].value = '$subval[69]'
 document.getElementsByName('arr70')[0].value = '$subval[70]'
 document.getElementsByName('arr71')[0].value = '$subval[71]'
 document.getElementsByName('arr72')[0].value = '$subval[72]'
 document.getElementsByName('arr73')[0].value = '$subval[73]'
 document.getElementsByName('arr74')[0].value = '$subval[74]'
 document.getElementsByName('arr75')[0].value = '$subval[75]'
 document.getElementsByName('arr76')[0].value = '$subval[76]'
 document.getElementsByName('arr77')[0].value = '$subval[77]'
 document.getElementsByName('arr78')[0].value = '$subval[78]'
 document.getElementsByName('arr79')[0].value = '$subval[79]'
 document.getElementsByName('arr80')[0].value = '$subval[80]'
 document.getElementsByName('arr81')[0].value = '$subval[81]'
 document.getElementsByName('arr82')[0].value = '$subval[82]'
 document.getElementsByName('arr83')[0].value = '$subval[83]'
 document.getElementsByName('arr84')[0].value = '$subval[84]'
 document.getElementsByName('arr85')[0].value = '$subval[85]'
 document.getElementsByName('arr86')[0].value = '$subval[86]'
 document.getElementsByName('arr87')[0].value = '$subval[87]'
 document.getElementsByName('arr88')[0].value = '$subval[88]'
 document.getElementsByName('arr89')[0].value = '$subval[89]'
 document.getElementsByName('arr90')[0].value = '$subval[90]'
 document.getElementsByName('arr91')[0].value = '$subval[91]'
 document.getElementsByName('arr92')[0].value = '$subval[92]'
 document.getElementsByName('arr93')[0].value = '$subval[93]'
 document.getElementsByName('arr94')[0].value = '$subval[94]'
 document.getElementsByName('arr95')[0].value = '$subval[95]'
 document.getElementsByName('arr96')[0].value = '$subval[96]'
 document.getElementsByName('arr97')[0].value = '$subval[97]'
 document.getElementsByName('arr98')[0].value = '$subval[98]'
 document.getElementsByName('arr99')[0].value = '$subval[99]'
 document.getElementsByName('arr100')[0].value = '$subval[100]'
 document.getElementsByName('arr101')[0].value = '$subval[101]'
 document.getElementsByName('arr102')[0].value = '$subval[102]'
 document.getElementsByName('arr103')[0].value = '$subval[103]'
 document.getElementsByName('arr104')[0].value = '$subval[104]'
 document.getElementsByName('arr105')[0].value = '$subval[105]'
 document.getElementsByName('arr106')[0].value = '$subval[106]'
 document.getElementsByName('arr107')[0].value = '$subval[107]'
 document.getElementsByName('arr108')[0].value = '$subval[108]'
 document.getElementsByName('arr109')[0].value = '$subval[109]'
 document.getElementsByName('arr110')[0].value = '$subval[110]'
 document.getElementsByName('arr111')[0].value = '$subval[111]'
 document.getElementsByName('arr112')[0].value = '$subval[112]'
 document.getElementsByName('arr113')[0].value = '$subval[113]'
 document.getElementsByName('arr114')[0].value = '$subval[114]'
 document.getElementsByName('arr115')[0].value = '$subval[115]'
 document.getElementsByName('arr116')[0].value = '$subval[116]'
 document.getElementsByName('arr117')[0].value = '$subval[117]'
 document.getElementsByName('arr118')[0].value = '$subval[118]'
 document.getElementsByName('arr119')[0].value = '$subval[119]'
 document.getElementsByName('arr120')[0].value = '$subval[120]'
 document.getElementsByName('arr121')[0].value = '$subval[121]'
 document.getElementsByName('arr122')[0].value = '$subval[122]'
 document.getElementsByName('arr123')[0].value = '$subval[123]'
 document.getElementsByName('arr124')[0].value = '$subval[124]'
 document.getElementsByName('arr125')[0].value = '$subval[125]'
 document.getElementsByName('arr126')[0].value = '$subval[126]'
 document.getElementsByName('arr127')[0].value = '$subval[127]'
 document.getElementsByName('arr128')[0].value = '$subval[128]'
 document.getElementsByName('arr129')[0].value = '$subval[129]'
 document.getElementsByName('arr130')[0].value = '$subval[130]'
 document.getElementsByName('arr131')[0].value = '$subval[131]'
 document.getElementsByName('arr132')[0].value = '$subval[132]'
 document.getElementsByName('arr133')[0].value = '$subval[133]'
 document.getElementsByName('arr134')[0].value = '$subval[134]'
 document.getElementsByName('arr135')[0].value = '$subval[135]'
 document.getElementsByName('arr136')[0].value = '$subval[136]'
 document.getElementsByName('arr137')[0].value = '$subval[137]'
 document.getElementsByName('arr138')[0].value = '$subval[138]'
 document.getElementsByName('arr139')[0].value = '$subval[139]'
 document.getElementsByName('arr140')[0].value = '$subval[140]'
 document.getElementsByName('arr141')[0].value = '$subval[141]'
 document.getElementsByName('arr142')[0].value = '$subval[142]'
 document.getElementsByName('arr143')[0].value = '$subval[143]'
 document.getElementsByName('arr144')[0].value = '$subval[144]'
 document.getElementsByName('arr145')[0].value = '$subval[145]'
 document.getElementsByName('arr146')[0].value = '$subval[146]'
 document.getElementsByName('arr147')[0].value = '$subval[147]'
 document.getElementsByName('arr148')[0].value = '$subval[148]'
 document.getElementsByName('arr149')[0].value = '$subval[149]'
 document.getElementsByName('arr150')[0].value = '$subval[150]'
 document.getElementsByName('arr151')[0].value = '$subval[151]'
 document.getElementsByName('arr152')[0].value = '$subval[152]'
 document.getElementsByName('arr153')[0].value = '$subval[153]'
 document.getElementsByName('arr154')[0].value = '$subval[154]'
 document.getElementsByName('arr155')[0].value = '$subval[155]'
 document.getElementsByName('arr156')[0].value = '$subval[156]'
 document.getElementsByName('arr157')[0].value = '$subval[157]'
 document.getElementsByName('arr158')[0].value = '$subval[158]'
 document.getElementsByName('arr159')[0].value = '$subval[159]'
 document.getElementsByName('arr160')[0].value = '$subval[160]'
 document.getElementsByName('arr161')[0].value = '$subval[161]'
 document.getElementsByName('arr162')[0].value = '$subval[162]'
 document.getElementsByName('arr163')[0].value = '$subval[163]'
 document.getElementsByName('arr164')[0].value = '$subval[164]'
 document.getElementsByName('arr165')[0].value = '$subval[165]'
 document.getElementsByName('arr166')[0].value = '$subval[166]'
 document.getElementsByName('arr167')[0].value = '$subval[167]'
 document.getElementsByName('arr168')[0].value = '$subval[168]'
 document.getElementsByName('arr169')[0].value = '$subval[169]'
 document.getElementsByName('arr170')[0].value = '$subval[170]'
 document.getElementsByName('arr171')[0].value = '$subval[171]'
 document.getElementsByName('arr172')[0].value = '$subval[172]'
 document.getElementsByName('arr173')[0].value = '$subval[173]'
 document.getElementsByName('arr174')[0].value = '$subval[174]'
 document.getElementsByName('arr175')[0].value = '$subval[175]'
 document.getElementsByName('arr176')[0].value = '$subval[176]'

  
    </script>";
  



?>