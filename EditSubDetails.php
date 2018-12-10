<?php 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$postyear = $_POST['year'];
include'config.php';  
// Check connection
    
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * from subjects where subyear='".$postyear."'" ;

$result = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)==0)
{
    echo "<script type=\"text/javascript\">
            alert('No Record found Please Enter the Values ')
            </script>";
}

else if ($result=mysqli_query($conn,$sql)) 
{
    
    // output data of each row 
    while($array=mysqli_fetch_row($result)) 
    {
        
      $subarryear= $array[0];
        
$sub110=$array[1];
$sub111=$array[2];
$sub112=$array[3];
$sub113=$array[4];
$sub114=$array[5];
$sub115=$array[6];
$sub116=$array[7];
$sub117=$array[8];
$sub118=$array[9];
$sub119=$array[10];
$sub120=$array[11];
$sub121=$array[12];
$sub122=$array[13];
$sub123=$array[14];
$sub124=$array[15];
$sub125=$array[16];
$sub126=$array[17];
$sub127=$array[18];
$sub128=$array[19];
$sub129=$array[20];
$sub210=$array[21];
$sub211=$array[22];
$sub212=$array[23];
$sub213=$array[24];
$sub214=$array[25];
$sub215=$array[26];
$sub216=$array[27];
$sub217=$array[28];
$sub218=$array[29];
$sub219=$array[30];
$sub220=$array[31];
$sub221=$array[32];
$sub222=$array[33];
$sub223=$array[34];
$sub224=$array[35];
$sub225=$array[36];
$sub226=$array[37];
$sub227=$array[38];
$sub228=$array[39];
$sub229=$array[40];
$sub310=$array[41];
$sub311=$array[42];
$sub312=$array[43];
$sub313=$array[44];
$sub314=$array[45];
$sub315=$array[46];
$sub316=$array[47];
$sub317=$array[48];
$sub318=$array[49];
$sub319=$array[50];
$sub320=$array[51];
$sub321=$array[52];
$sub322=$array[53];
$sub323=$array[54];
$sub324=$array[55];
$sub325=$array[56];
$sub326=$array[57];
$sub327=$array[58];
$sub328=$array[59];
$sub329=$array[60];
$sub410=$array[61];
$sub411=$array[62];
$sub412=$array[63];
$sub413=$array[64];
$sub414=$array[65];
$sub415=$array[66];
$sub416=$array[67];
$sub417=$array[68];
$sub418=$array[69];
$sub419=$array[70];
$sub420=$array[71];
$sub421=$array[72];
$sub422=$array[73];
$sub423=$array[74];
$sub424=$array[75];
$sub425=$array[76];
$sub426=$array[77];
$sub427=$array[78];
$sub428=$array[79];
$sub429=$array[80];
        
    }
    
    if(isset($postyear))
    {
    echo "
            <script type=\"text/javascript\">
            alert('Subjects Present for ".$postyear." if needed  Edit them ')
            </script>
        ";
    }
} 

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
$_SESSION['postsubyear'] = $postyear;

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
    <div class="row" style="height:43px;"></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center"><label class="col-form-label" style="font-size:24px;padding:10px 20px;margin:10px;"><strong>Enter Year</strong></label>
                </div>
                <form action="EditSubDetails.php" method="post" id="yearselect">
                <div class="col-md-6 align-self-center">
                    <input form="yearselect" name="year"  type="text">
                     
                         <button class="btn btn-dark active" type="submit"   > Submit</button>
                    
            </div>
                </form>
        </div>
    </div>
            
<!--Form declaration to sent the values to submit-->
<form action="subjectsuccess.php" method="post" id="subform">
<!--First yearfirst SEM   -->
    <h1 class="text-center" style="background-color:#d0d0d0;color:rgb(78,78,78);"> <?php
echo $postyear," Year";?> First Sem&nbsp;</h1>
    <div class="table-responsive">
        
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
           <tbody>
                <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub110" name="sub110"></td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub111" name='sub111' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3</td>
                    <td><input type="text" id="sub112" name='sub112'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub113" name='sub113'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub114" name='sub114'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub115" name='sub115'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub116" name='sub116'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub117" name='sub117'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub118" name="sub118"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub119" name="sub119"></td>
                </tr>
               
            </tbody>
        </table>
    
    </div>
    <div class="col"></div>
    <!--First year Second SEM   -->
    <h1 class="text-center" style="color:rgb(78,78,78);background-color:#d0d0d0;"><?php
echo$postyear," Year";?> Second Sem</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                   <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub120" name="sub120"></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub121" name='sub121' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3</td>
                    <td><input type="text" id="sub122" name='sub122'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub123" name='sub123'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub124" name='sub124'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub125" name='sub125'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub126" name='sub126'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub127" name='sub127'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub128" name="sub128"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub129" name="sub129"></td>
                </tr>
              
                
            </tbody>
            
        </table>
    </div>
    
    <!--Second year First SEM   -->
     <h1 class="text-center" style="color:rgb(78,78,78);background-color:#d0d0d0;"><?php
echo$postyear," Year";?> Third Sem</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                 <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub210" name="sub210"></td>
                </tr>
                
                 
                <tr>
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub211" name='sub211' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3 </td>
                    <td><input type="text" id="sub212" name='sub212'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub213" name='sub213'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub214" name='sub214'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub215" name='sub215'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub216" name='sub216'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub217" name='sub217'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub218" name="sub218"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub219" name="sub219"></td>
                </tr>
                
            </tbody>
            
        </table>
    </div>
    
      <!--Second year Second SEM   -->
     <h1 class="text-center" style="color:rgb(78,78,78);background-color:#d0d0d0;"><?php
echo$postyear," Year";?> Fourth Sem</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                 <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub220" name="sub220"></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub221" name='sub221' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3</td>
                    <td><input type="text" id="sub222" name='sub222'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub223" name='sub223'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub224" name='sub224'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub225" name='sub225'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub226" name='sub226'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub227" name='sub227'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub228" name="sub228"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub229" name="sub229"></td>
                </tr>
                
                
            </tbody>
            
        </table>
    </div>
      <!--Third year First SEM   -->
     <h1 class="text-center" style="color:rgb(78,78,78);background-color:#d0d0d0;"><?php
echo$postyear," Year";?> Fifth Sem</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                 <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub310" name="sub310"></td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub311" name='sub311' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3</td>
                    <td><input type="text" id="sub312" name='sub312'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub313" name='sub313'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub314" name='sub314'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub315" name='sub315'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub316" name='sub316'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub317" name='sub317'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub318" name="sub318"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub319" name="sub319"></td>
                </tr>
                
            </tbody>
            
        </table>
    </div>
      <!--Third year Second SEM   -->
     <h1 class="text-center" style="color:rgb(78,78,78);background-color:#d0d0d0;"><?php
echo$postyear," Year";?> Sixth Sem</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                 <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub320" name="sub320"></td>
                </tr>
                
                 
                <tr>
                    
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub321" name='sub321' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3</td>
                    <td><input type="text" id="sub322" name='sub322'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub323" name='sub323'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub324" name='sub324'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub325" name='sub325'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub326" name='sub326'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub327" name='sub327'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub328" name="sub328"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub329" name="sub329"></td>
                </tr>
                
            </tbody>
            
        </table>
    </div>
      <!--Fourth year First SEM   -->
     <h1 class="text-center" style="color:rgb(78,78,78);background-color:#d0d0d0;"><?php
echo$postyear," Year";?> Seventh Sem</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                 <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub410" name="sub410"></td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub411" name='sub411' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3</td>
                    <td><input type="text" id="sub412" name='sub412'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub413" name='sub413'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub414" name='sub414'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub415" name='sub415'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub416" name='sub416'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub417" name='sub417'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub418" name="sub418"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub419" name="sub419"></td>
                </tr>
                
            </tbody>
            
        </table>
    </div>
      <!--Fourth year Second SEM   -->
     <h1 class="text-center" style="color:rgb(78,78,78);background-color:#d0d0d0;"><?php
echo$postyear," Year";?> Eigth Sem</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Number</th>
                    <th style="background-color:#858585;color:rgb(230,231,231);">Subject Values&nbsp;</th>
                </tr>
            </thead>
             <tbody>
                  <tr>
                    <td style="background-color:#becad0;">Subject 1 </td>
                    <td><input type="text" id="sub420" name="sub420"></td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 2</td>
                    <td><input type="text" id="sub421" name='sub421' >
                    </td>
                </tr>
                
                <tr>
                    <td style="background-color:#becad0;">Subject 3</td>
                    <td><input type="text" id="sub422" name='sub422'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 4</td>
                    <td><input type="text" id="sub423" name='sub423'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 5<br></td>
                    <td><input type="text" id="sub424" name='sub424'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 6<br></td>
                    <td><input type="text" id="sub425" name='sub425'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 7<br></td>
                    <td><input type="text" id="sub426" name='sub426'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 8 <br></td>
                    <td><input type="text" id="sub427" name='sub427'></td>
                </tr>
                <tr>
                    <td style="background-color:#becad0;">Subject 9 </td>
                    <td><input type="text" id="sub428" name="sub428"></td>
                    
                </tr>
                <tr>
                  <td style="background-color:#becad0;">Subject 10 </td>
                    <td><input type="text" id="sub429" name="sub429"></td>
                </tr>
               
            </tbody>
            
        </table>
    </div>
    <div>
        <div class="container">
            <div class="row" style="width:1189px;">
                <div class="col-md-6" style="width:307px;"></div>
                <div class="col-md-6 align-self-center" style="width:471px;">
                    
                     <button class="btn btn-outline-primary btn-block btn-lg"   type="submit" form="subform" style="background-color:#030303;color:rgb(254,255,255);"  value="submit">
        Sumit the values</button>
             </div>
            </div>
        </div>
    </div>
        </form>
    <div class="col" style="height:36px;"></div>
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
    </div>
</body>
       
<?php    

     
     echo "
            <script type=\"text/javascript\">
            

document.getElementById('sub110').setAttribute('value','$sub110')
 document.getElementById('sub111').setAttribute('value','$sub111')
 document.getElementById('sub112').setAttribute('value','$sub112')
 document.getElementById('sub113').setAttribute('value','$sub113')
 document.getElementById('sub114').setAttribute('value','$sub114')
 document.getElementById('sub115').setAttribute('value','$sub115')
 document.getElementById('sub116').setAttribute('value','$sub116')
 document.getElementById('sub117').setAttribute('value','$sub117')
 document.getElementById('sub118').setAttribute('value','$sub118')
 document.getElementById('sub119').setAttribute('value','$sub119')
 document.getElementById('sub120').setAttribute('value','$sub120')
 document.getElementById('sub121').setAttribute('value','$sub121')
 document.getElementById('sub122').setAttribute('value','$sub122')
 document.getElementById('sub123').setAttribute('value','$sub123')
 document.getElementById('sub124').setAttribute('value','$sub124')
 document.getElementById('sub125').setAttribute('value','$sub125')
 document.getElementById('sub126').setAttribute('value','$sub126')
 document.getElementById('sub127').setAttribute('value','$sub127')
 document.getElementById('sub128').setAttribute('value','$sub128')
 document.getElementById('sub129').setAttribute('value','$sub129')
 document.getElementById('sub210').setAttribute('value','$sub210')
 document.getElementById('sub211').setAttribute('value','$sub211')
 document.getElementById('sub212').setAttribute('value','$sub212')
 document.getElementById('sub213').setAttribute('value','$sub213')
 document.getElementById('sub214').setAttribute('value','$sub214')
 document.getElementById('sub215').setAttribute('value','$sub215')
 document.getElementById('sub216').setAttribute('value','$sub216')
 document.getElementById('sub217').setAttribute('value','$sub217')
 document.getElementById('sub218').setAttribute('value','$sub218')
 document.getElementById('sub219').setAttribute('value','$sub219')
 document.getElementById('sub220').setAttribute('value','$sub220')
 document.getElementById('sub221').setAttribute('value','$sub221')
 document.getElementById('sub222').setAttribute('value','$sub222')
 document.getElementById('sub223').setAttribute('value','$sub223')
 document.getElementById('sub224').setAttribute('value','$sub224')
 document.getElementById('sub225').setAttribute('value','$sub225')
 document.getElementById('sub226').setAttribute('value','$sub226')
 document.getElementById('sub227').setAttribute('value','$sub227')
 document.getElementById('sub228').setAttribute('value','$sub228')
 document.getElementById('sub229').setAttribute('value','$sub229')
 document.getElementById('sub310').setAttribute('value','$sub310')
 document.getElementById('sub311').setAttribute('value','$sub311')
 document.getElementById('sub312').setAttribute('value','$sub312')
 document.getElementById('sub313').setAttribute('value','$sub313')
 document.getElementById('sub314').setAttribute('value','$sub314')
 document.getElementById('sub315').setAttribute('value','$sub315')
 document.getElementById('sub316').setAttribute('value','$sub316')
 document.getElementById('sub317').setAttribute('value','$sub317')
 document.getElementById('sub318').setAttribute('value','$sub318')
 document.getElementById('sub319').setAttribute('value','$sub319')
 document.getElementById('sub320').setAttribute('value','$sub320')
 document.getElementById('sub321').setAttribute('value','$sub321')
 document.getElementById('sub322').setAttribute('value','$sub322')
 document.getElementById('sub323').setAttribute('value','$sub323')
 document.getElementById('sub324').setAttribute('value','$sub324')
 document.getElementById('sub325').setAttribute('value','$sub325')
 document.getElementById('sub326').setAttribute('value','$sub326')
 document.getElementById('sub327').setAttribute('value','$sub327')
 document.getElementById('sub328').setAttribute('value','$sub328')
 document.getElementById('sub329').setAttribute('value','$sub329')
 document.getElementById('sub410').setAttribute('value','$sub410')
 document.getElementById('sub411').setAttribute('value','$sub411')
 document.getElementById('sub412').setAttribute('value','$sub412')
 document.getElementById('sub413').setAttribute('value','$sub413')
 document.getElementById('sub414').setAttribute('value','$sub414')
 document.getElementById('sub415').setAttribute('value','$sub415')
 document.getElementById('sub416').setAttribute('value','$sub416')
 document.getElementById('sub417').setAttribute('value','$sub417')
 document.getElementById('sub418').setAttribute('value','$sub418')
 document.getElementById('sub419').setAttribute('value','$sub419')
 document.getElementById('sub420').setAttribute('value','$sub420')
 document.getElementById('sub421').setAttribute('value','$sub421')
 document.getElementById('sub422').setAttribute('value','$sub422')
 document.getElementById('sub423').setAttribute('value','$sub423')
 document.getElementById('sub424').setAttribute('value','$sub424')
 document.getElementById('sub425').setAttribute('value','$sub425')
 document.getElementById('sub426').setAttribute('value','$sub426')
 document.getElementById('sub427').setAttribute('value','$sub427')
 document.getElementById('sub428').setAttribute('value','$sub428')
 document.getElementById('sub429').setAttribute('value','$sub429')






            </script>
        ";
        ?>

</html>