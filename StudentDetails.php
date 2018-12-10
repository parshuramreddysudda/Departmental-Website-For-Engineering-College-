<?php
   
include'config.php';
 
//Checkign the connection
 
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
   
}
 
//Posted Value
$facyearpostvalue = $_POST['facyearcont'];
 
//Checking the result
echo $facyearpostvalue;
 
$facuser=$_SESSION['username'];
 
$studentid=$_POST['studentid'];
echo "Roll is ".$studentid;
$facuser=substr($facuser,2,4);
if($facyearpostvalue==null)
{
    echo "<script type=\"text/javascript\">
   var facultyname='$facuser';
   
   facultyname= facultyname.substring(2, 4);
//            alert('Welcome to '+'$facuser'+'th Year Faculty.  Sorry to say that  you have only acces to 20'+'$facuser'+'th year :p' )
//            </script>";
}
else
{
//mysqli_query($conn,"SELECT * FROM subjects where subyear='2020'");  
    echo "<script type=\"text/javascript\">
   
           </script>";
echo "Affected rows: " . mysqli_affected_rows($conn);
}
 
 
//Student Details Extraction Starts Here
 
if(isset($studentid))
{
     $sql = "SELECT  name , fname , sec  , year ,dob , smobile , fmobile , landline , Address , ssc , inter , eamcet,email  FROM  student  WHERE id='$studentid'";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0)
    {
                    // output data of each row
   
       while($array=mysqli_fetch_row($result))
       {
        for($i=0;$i<13;$i++)
          {
          $stdDetail[]=$array[$i];
          }
     $year=$array[3];
           
        }
     }
 
echo $year;
 
//Getting Image of student code starts here
$sqlimg = "SELECT  imgpath  FROM  student  WHERE id='$studentid'";
$resultimg = mysqli_query($conn, $sqlimg);    
if (mysqli_num_rows($resultimg) > 0)
    {
    // output data of each row
       
       while($array=mysqli_fetch_row($resultimg))
       {
        for($i=0;$i<1;$i++)
          {
          $imgpath=$array[$i];
          }
        }
     }
  echo "path is ".$imgpath;
 
   
   
//Getting Subjects Values of Student  Code Started Here
   
$sql1 = "SELECT sub110,sub111,sub112,sub113,sub114,sub115,sub116,sub117,sub118,sub119,sub120,sub121,sub122,sub123,sub124,sub125,sub126,sub127,sub128,sub129 FROM subjects WHERE subyear='$year'";
$result1 = mysqli_query($conn, $sql1);
 
if (mysqli_num_rows($result1) > 0)
{
    // output data of each row
   
     while($array=mysqli_fetch_row($result1))
    {
        for($i=0;$i<20;$i++)
        {
          $sub1[]=$array[$i];
        }
         
    }
}
   
$sql2 = "SELECT sub210,sub211,sub212,sub213,sub214,sub215,sub216,sub217,sub218,sub219,sub220,sub221,sub222,sub223,sub224,sub225,sub226,sub227,sub228,sub229 FROM subjects WHERE subyear='$year'";
$result2 = mysqli_query($conn, $sql2);
 
if (mysqli_num_rows($result2) > 0)
{
    // output data of each row
   
     while($array=mysqli_fetch_row($result2))
    {
        for($i=0;$i<20;$i++)
        {
          $sub2[]=$array[$i];
        }
         
    }
}
 
 
$sql3 = "SELECT sub310,sub311,sub312,sub313,sub314,sub315,sub316,sub317,sub318,sub319,sub320,sub321,sub322,sub323,sub324,sub325,sub326,sub327,sub328,sub329 FROM subjects WHERE subyear='$year'";
$result3 = mysqli_query($conn, $sql3);
 
if (mysqli_num_rows($result3) > 0){
    // output data of each row
   
     while($array=mysqli_fetch_row($result3))
    {
        for($i=0;$i<20;$i++)
        {
          $sub3[]=$array[$i];
        }
         
    }
}
 
 
$sql4 = "SELECT sub410,sub411,sub412,sub413,sub414,sub415,sub416,sub417,sub418,sub419,sub420,sub421,sub422,sub423,sub424,sub425,sub426,sub427,sub428,sub429 FROM subjects WHERE subyear='$year'";
$result4 = mysqli_query($conn, $sql4);
 
if (mysqli_num_rows($result4) > 0){
    // output data of each row
   
     while($array=mysqli_fetch_row($result4))
    {
        for($i=0;$i<20;$i++)
        {
          $sub4[]=$array[$i];
        }
         
    }
}
//Subjects Value getting code completed here
 
  
 
}
?>
 
<!DOCTYPE html>
<html style="background-color:#F1EBE9 ;">
 
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
    <style>
/*
 
#year1, #year2,#year3 ,#year4 {
             display:none;
*/
</style>
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
    <div class="container">
        <div class="row" style="background-color:rgba(18,18,18,0.1);">
            <div class="col-md-6 col-xl-3"><label class="col-form-label" style="font-size:33px;font-family:ABeeZee, sans-serif;margin-top:30px;">Roll Number</label>
            </div>
            <div class="col-md-6" style="padding:0px;">
                <label id="facyear" style="width:78px;">&nbsp;</label>
               
     <!--Php Code for Changing sub year-->          
 
                <form action="Faculty.php" method="post" id="studentid">
                <input type="text" name="studentid"style="width:99px;"><button class="btn btn-primary" type="submit" id="studentid" style="padding:5px;margin:20px;width:72px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="height:20px;"></div>
                <h1 class="text-center" style="font-family:ABeeZee, sans-serif;">Student Details&nbsp;<br></h1>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;"></label></div>
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;"></label></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-auto col-md-4 col-xl-6">
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Student Name</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[0];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Father Name</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[1];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Section</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[2];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Year</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[3];?></label></div>
                </div>
               
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Date of Birth</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[4];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">&nbsp; &nbsp; &nbsp;</label></div>
                </div>
            </div>
            <div class="col-xl-2" style="width:192px;"></div>
            <div class="col-auto col-md-4 col-xl-4" style="margin:0px;">
                <figure class="figure picswing" style="/*width:200;*/margin:1px;"><img class="img-fluid figure-img img-responsive" src="<?php echo $imgpath;?>" width="200" style="padding:0px;margin:7px;"></figure>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-family:ABeeZee, sans-serif;">Contact Details<br></h1>
            </div>
            <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;"></label></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-7">
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Student Mobile Number</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[5];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Father Mobile Number</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[6];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Land Line</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[7];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Address</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[8];?></label></div>
                </div>
                  <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">SSC</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[9];?></label></div>
                </div>
                  <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Intermediate</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[10];?></label></div>
                </div>
                  <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">EAMCET</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[11];?></label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Email Address</label></div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000"><label class="col-form-label"><?php echo $stdDetail[12];?></label></div>
                </div>
               
                <div class="row">
                    <div class="col"><label class="col-form-label" style="font-family:ABeeZee, sans-serif;font-size:26px;">Any other Info</label></div>
                    <div class="col"><label class="col-form-label"><strong>Default</strong></label></div>
                </div>
            </div>
            <div class="col-auto col-md-4"></div>
        </div>
    </div>
    <div class="container" id="link" style="background-color:rgba(13,2,2,0.1);">
        <div class="row" style="color:rgb(11,11,11);">
            <div class="col-md-3" data-aos="fade-up" data-aos-duration="800" style="font-size:21px;font-family:ABeeZee, sans-serif;"><a href="#link" onclick='show(1);'style="font-size:30px;">First Year</a></div>
            <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" style="font-family:ABeeZee, sans-serif;"><a href="#link"onclick='show(2);' style="font-size:30px;">Second Year</a></div>
            <div class="col-md-3" data-aos="fade-up" data-aos-duration="1100" style="font-family:ABeeZee, sans-serif;"><a href="#link" onclick='show(3);'style="font-size:30px;">Third Year</a></div>
            <div class="col-md-3" data-aos="fade-up" data-aos-duration="1400" style="font-family:ABeeZee, sans-serif;"><a href="#link" onclick='show(4);'style="font-size:30px;">Fourth Year</a></div>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped" id="year1">
                <thead>
                    <tr>
                        <th></th>
                        <th><?php echo $sub1[0];?></th>
                        <th><?php echo $sub1[1];?></th>
                        <th><?php echo $sub1[2];?></th>
                        <th><?php echo $sub1[3];?></th>
                        <th><?php echo $sub1[4];?></th>
                        <th><?php echo $sub1[5];?></th>
                        <th><?php echo $sub1[6];?><br></th>
                        <th><?php echo $sub1[7];?></th>
                        <th><?php echo $sub1[8];?></th>
                        <th><?php echo $sub1[9];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>I Sem 1 Mid</strong></td>
                        <td id="arr1">Cell 2</td>
                        <td id="arr2">Cell 2</td>
                        <td id="arr3">Cell 2</td>
                        <td id="arr4">Cell 2</td>
                        <td id="arr5">Cell 2</td>
                        <td id="arr6">Cell 2</td>
                        <td id="arr7">Cell 2</td>
                        <td id="arr8">Cell 2</td>
                        <td id="arr9">Cell 2</td>
                        <td id="arr10">Cell 2</td>
                        <td id="arr11">Cell 2</td>
                    </tr>
                    <tr>
                        <td><strong>I Sem 2 Mid</strong></td>
                        <td id="arr12">Cell 2</td>
                        <td id="arr13">Cell 2</td>
                        <td id="arr14">Cell 2</td>
                        <td id="arr15">Cell 2</td>
                        <td id="arr16">Cell 2</td>
                        <td id="arr17">Cell 2</td>
                        <td id="arr18">Cell 2</td>
                        <td id="arr19">Cell 2</td>
                        <td id="arr20">Cell 2</td>
                        <td id="arr21">Cell 4</td>
                        <td id="arr22">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong> I Semester&nbsp;</strong></td>
                        <td id="arr23">Cell 4</td>
                        <td id="arr24">Cell 4</td>
                        <td id="arr25">Cell 4</td>
                        <td id="arr26">Cell 4</td>
                        <td id="arr27">Cell 4</td>
                        <td id="arr28">Cell 4</td>
                        <td id="arr29">Cell 4</td>
                        <td id="arr30">Cell 4</td>
                        <td id="arr31">Cell 4</td>
                        <td id="arr32">Cell 4</td>
                        <td id="arr33">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr34">Cell 4</td>
                        <td id="arr35">Cell 4</td>
                        <td id="arr36">Cell 4</td>
                        <td id="arr37">Cell 4</td>
                        <td id="arr38">Cell 4</td>
                        <td id="arr39">Cell 4</td>
                        <td id="arr40">Cell 4</td>
                        <td id="arr41">Cell 4</td>
                        <td id="arr42">Cell 4</td>
                        <td id="arr43">Cell 4</td>
                        <td id="arr44">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr45"><strong>SGPA:</strong></td>
                        <td id="arr46"></td>
                        <td id="arr47">/10</td>
                        <td id="arr48"></td>
                        <td id="arr49"></td>
                        <td id="arr50"><strong>CGPA:</strong></td>
                        <td id="arr51"></td>
                        <td id="arr52">/10</td>
                        <td id="arr53"></td>
                        <td id="arr54"></td>
                        <td id="arr55"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr56"><strong>SC:</strong></td>
                        <td id="arr57"></td>
                        <td id="arr58">/24</td>
                        <td id="arr59"></td>
                        <td id="arr60"></td>
                        <td id="arr61"><strong>CC:</strong></td>
                        <td id="arr62"></td>
                        <td id="arr63">/24</td>
                        <td id="arr64"></td>
                        <td id="arr65"></td>
                        <td id="arr66"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-striped" id="year5">
                <thead>
                    <tr>
                      <th></th>
                        <th><?php echo $sub1[10];?></th>
                        <th><?php echo $sub1[11];?></th>
                        <th><?php echo $sub1[12];?></th>
                        <th><?php echo $sub1[13];?></th>
                        <th><?php echo $sub1[14];?></th>
                        <th><?php echo $sub1[15];?></th>
                        <th><?php echo $sub1[16];?><br></th>
                        <th><?php echo $sub1[17];?></th>
                        <th><?php echo $sub1[18];?></th>
                        <th><?php echo $sub1[19];?></th>
                        <th>Total</th>
                   
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>II Sem 1 Mid</strong></td>
                        <td id="arr67">Cell 4</td>
                        <td id="arr68">Cell 4</td>
                        <td id="arr69">Cell 4</td>
                        <td id="arr70">Cell 4</td>
                        <td id="arr71">Cell 4</td>
                        <td id="arr72">Cell 4</td>
                        <td id="arr73">Cell 4</td>
                        <td id="arr74">Cell 4</td>
                        <td id="arr75">Cell 4</td>
                        <td id="arr76">Cell 4</td>
                        <td id="arr77">Cell 4</td>
 
                    </tr>
                    <tr>
                        <td><strong>II Sem 2 Mid</strong></td>
                        <td id="arr78">Cell 4</td>
                        <td id="arr79">Cell 4</td>
                        <td id="arr80">Cell 4</td>
                        <td id="arr81">Cell 4</td>
                        <td id="arr82">Cell 4</td>
                        <td id="arr83">Cell 4</td>
                        <td id="arr84">Cell 4</td>
                        <td id="arr85">Cell 4</td>
                        <td id="arr86">Cell 4</td>
                        <td id="arr87">Cell 4</td>
                        <td id="arr88">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>II Semester&nbsp;</strong></td>
                        <td id="arr89">Cell 4</td>
                        <td id="arr90">Cell 4</td>
                        <td id="arr91">Cell 4</td>
                        <td id="arr92">Cell 4</td>
                        <td id="arr93">Cell 4</td>
                        <td id="arr94">Cell 4</td>
                        <td id="arr95">Cell 4</td>
                        <td id="arr96">Cell 4</td>
                        <td id="arr97">Cell 4</td>
                        <td id="arr98">Cell 4</td>
                        <td id="arr99">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr100">Cell 4</td>
                        <td id="arr101">Cell 4</td>
                        <td id="arr102">Cell 4</td>
                        <td id="arr103">Cell 4</td>
                        <td id="arr104">Cell 4</td>
                        <td id="arr105">Cell 4</td>
                        <td id="arr106">Cell 4</td>
                        <td id="arr107">Cell 4</td>
                        <td id="arr108">Cell 4</td>
                        <td id="arr109">Cell 4</td>
                        <td id="arr110">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr111"><strong>SGPA:</strong></td>
                        <td id="arr112"></td>
                        <td id="arr113">/10</td>
                        <td id="arr114"></td>
                        <td id="arr115"></td>
                        <td id="arr116"><strong>CGPA:</strong></td>
                        <td id="arr117"></td>
                        <td id="arr118">/10</td>
                        <td id="arr119"></td>
                        <td id="arr120"></td>
                        <td id="arr121"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr122"><strong>SC:</strong></td>
                        <td id="arr123"></td>
                        <td id="arr124">/24</td>
                        <td id="arr125"></td>
                        <td id="arr126"></td>
                        <td id="arr127"><strong>CC:</strong></td>
                        <td id="arr128"></td>
                        <td id="arr129">/48</td>
                        <td id="arr130"></td>
                        <td id="arr131"></td>
                        <td id="arr132"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6" id="atten1">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">I Sem Attendance</h1>
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
                                <td><?php echo $sub1[0];?></td>
                                <td id="arr133">Cell 4</td>
                                <td id="arr134">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[1];?></td>
                                <td id="arr135">Cell 4</td>
                                <td id="arr136">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[2];?></td>
                                <td id="arr137">Cell 4</td>
                                <td id="arr138">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[3];?></td>
                                <td id="arr139">Cell 4</td>
                                <td id="arr140">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[4];?></td>
                                <td id="arr141">Cell 4</td>
                                <td id="arr142">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[5];?></td>
                                <td id="arr143">Cell 4</td>
                                <td id="arr144">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[6];?></td>
                                <td id="arr145">Cell 4</td>
                                <td id="arr146">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[7];?></td>
                                <td id="arr147">Cell 4</td>
                                <td id="arr148">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[8];?></td>
                                <td id="arr149">Cell 4</td>
                                <td id="arr150">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[9];?></td>
                                <td id="arr151">Cell 4</td>
                                <td id="arr152">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr153">Cell 4</td>
                                <td id="arr154">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6" id="atten5">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">II Sem Attendance</h1>
                <div class="table-responsive table-bordered">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:156px;">subject</th>
                                <th style="width:269px;">Total classes</th>
                                <th style="width:269px;">Classes attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $sub1[10];?></td>
                                <td id="arr155">Cell 4</td>
                                <td id="arr156">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[11];?></td>
                                <td id="arr157">Cell 4</td>
                                <td id="arr158">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[12];?></td>
                                <td id="arr159">Cell 4</td>
                                <td id="arr160">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[13];?></td>
                                <td id="arr161">Cell 4</td>
                                <td id="arr162">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[14];?></td>
                                <td id="arr163">Cell 4</td>
                                <td id="arr164">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[15];?></td>
                                <td id="arr165">Cell 4</td>
                                <td id="arr166">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[16];?></td>
                                <td id="arr167">Cell 4</td>
                                <td id="arr168">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[17];?></td>
                                <td id="arr169">Cell 4</td>
                                <td id="arr170">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub1[18];?></td>
                                <td id="arr171">Cell 4</td>
                                <td id="arr172">Cell 4</td>
                            </tr>
                           <tr>
                                <td><?php echo $sub1[19];?></td>
                                <td id="arr173">Cell 4</td>
                                <td id="arr174">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr175">Cell 4</td>
                                <td id="arr176">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
       
<!--    Second Year Progress Table starts -->
        <div class="table-responsive">
            <table class="table table-striped" id="year2">
                <thead>
                    <tr>
<th></th>
                        <th><?php echo $sub2[0];?></th>
                        <th><?php echo $sub2[1];?></th>
                        <th><?php echo $sub2[2];?></th>
                        <th><?php echo $sub2[3];?></th>
                        <th><?php echo $sub2[4];?></th>
                        <th><?php echo $sub2[5];?></th>
                        <th><?php echo $sub2[6];?><br></th>
                        <th><?php echo $sub2[7];?></th>
                        <th><?php echo $sub2[8];?></th>
                        <th><?php echo $sub2[9];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>III Sem 1 Mid</strong></td>
                        <td id="arr201">Cell 4</td>
                        <td id="arr202">Cell 4</td>
                        <td id="arr203">Cell 4</td>
                        <td id="arr204">Cell 4</td>
                        <td id="arr205">Cell 4</td>
                        <td id="arr206">Cell 4</td>
                        <td id="arr207">Cell 4</td>
                        <td id="arr208">Cell 4</td>
                        <td id="arr209">Cell 4</td>
                        <td id="arr210">Cell 4</td>
                        <td id="arr211">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>III Sem 2 Mid</strong></td>
                        <td id="arr212">Cell 4</td>
                        <td id="arr213">Cell 4</td>
                        <td id="arr214">Cell 4</td>
                        <td id="arr215">Cell 4</td>
                        <td id="arr216">Cell 4</td>
                        <td id="arr217">Cell 4</td>
                        <td id="arr218">Cell 4</td>
                        <td id="arr219">Cell 4</td>
                        <td id="arr220">Cell 4</td>
                        <td id="arr221">Cell 4</td>
                        <td id="arr222">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>III Semester</strong></td>
                        <td id="arr223">Cell 4</td>
                        <td id="arr224">Cell 4</td>
                        <td id="arr225">Cell 4</td>
                        <td id="arr226">Cell 4</td>
                        <td id="arr227">Cell 4</td>
                        <td id="arr228">Cell 4</td>
                        <td id="arr229">Cell 4</td>
                        <td id="arr230">Cell 4</td>
                        <td id="arr231">Cell 4</td>
                        <td id="arr232">Cell 4</td>
                        <td id="arr233">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr234">Cell 4</td>
                        <td id="arr235">Cell 4</td>
                        <td id="arr236">Cell 4</td>
                        <td id="arr237">Cell 4</td>
                        <td id="arr238">Cell 4</td>
                        <td id="arr239">Cell 4</td>
                        <td id="arr240">Cell 4</td>
                        <td id="arr241">Cell 4</td>
                        <td id="arr242">Cell 4</td>
                        <td id="arr243">Cell 4</td>
                        <td id="arr244">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr245"><strong>SGPA:</strong></td>
                        <td id="arr246"></td>
                        <td id="arr247">/10</td>
                        <td id="arr248"></td>
                        <td id="arr249"></td>
                        <td id="arr250"><strong>CGPA:</strong></td>
                        <td id="arr251"></td>
                        <td id="arr252">/10</td>
                        <td id="arr253"></td>
                        <td id="arr254"></td>
                        <td id="arr255"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr256"><strong>SC:</strong></td>
                        <td id="arr257"></td>
                        <td id="arr258">/24</td>
                        <td id="arr259"></td>
                        <td id="arr260"></td>
                        <td id="arr261"><strong>CC:</strong></td>
                        <td id="arr262"></td>
                        <td id="arr263">/72</td>
                        <td id="arr264"></td>
                        <td id="arr265"></td>
                        <td id="arr266"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-striped" id="year6">
                <thead>
                    <tr>
                 
<th></th>
                        <th><?php echo $sub2[10];?></th>
                        <th><?php echo $sub2[11];?></th>
                        <th><?php echo $sub2[12];?></th>
                        <th><?php echo $sub2[13];?></th>
                        <th><?php echo $sub2[14];?></th>
                        <th><?php echo $sub2[15];?></th>
                        <th><?php echo $sub2[16];?><br></th>
                        <th><?php echo $sub2[17];?></th>
                        <th><?php echo $sub2[18];?></th>
                        <th><?php echo $sub2[19];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>IV Sem Mid 1</strong></td>
                        <td id="arr267">Cell 4</td>
                        <td id="arr268">Cell 4</td>
                        <td id="arr269">Cell 4</td>
                        <td id="arr270">Cell 4</td>
                        <td id="arr271">Cell 4</td>
                        <td id="arr272">Cell 4</td>
                        <td id="arr273">Cell 4</td>
                        <td id="arr274">Cell 4</td>
                        <td id="arr275">Cell 4</td>
                        <td id="arr276">Cell 4</td>
                        <td id="arr277">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>IV Sem Mid 2</strong></td>
                        <td id="arr278">Cell 4</td>
                        <td id="arr279">Cell 4</td>
                        <td id="arr280">Cell 4</td>
                        <td id="arr281">Cell 4</td>
                        <td id="arr282">Cell 4</td>
                        <td id="arr283">Cell 4</td>
                        <td id="arr284">Cell 4</td>
                        <td id="arr285">Cell 4</td>
                        <td id="arr286">Cell 4</td>
                        <td id="arr287">Cell 4</td>
                        <td id="arr288">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>IV Semester&nbsp;</strong></td>
                        <td id="arr289">Cell 4</td>
                        <td id="arr290">Cell 4</td>
                        <td id="arr291">Cell 4</td>
                        <td id="arr292">Cell 4</td>
                        <td id="arr293">Cell 4</td>
                        <td id="arr294">Cell 4</td>
                        <td id="arr295">Cell 4</td>
                        <td id="arr296">Cell 4</td>
                        <td id="arr297">Cell 4</td>
                        <td id="arr298">Cell 4</td>
                        <td id="arr299">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr300">Cell 4</td>
                        <td id="arr301">Cell 4</td>
                        <td id="arr302">Cell 4</td>
                        <td id="arr303">Cell 4</td>
                        <td id="arr304">Cell 4</td>
                        <td id="arr305">Cell 4</td>
                        <td id="arr306">Cell 4</td>
                        <td id="arr307">Cell 4</td>
                        <td id="arr308">Cell 4</td>
                        <td id="arr309">Cell 4</td>
                        <td id="arr310">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr311"><strong>SGPA:</strong></td>
                        <td id="arr312"></td>
                        <td id="arr313">/10</td>
                        <td id="arr314"></td>
                        <td id="arr315"></td>
                        <td id="arr316">CGPA:</td>
                        <td id="arr317"></td>
                        <td id="arr318">/10</td>
                        <td id="arr319"></td>
                        <td id="arr320"></td>
                        <td id="arr321"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr322"><strong>SC:</strong></td>
                        <td id="arr323"></td>
                        <td id="arr324">/24</td>
                        <td id="arr325"></td>
                        <td id="arr326"></td>
                        <td id="arr327"><strong>CC:</strong></td>
                        <td id="arr328"></td>
                        <td id="arr329">/96</td>
                        <td id="arr330"></td>
                        <td id="arr331"></td>
                        <td id="arr332"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6" id="atten2">
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
                                <td><?php echo $sub2[0];?></td>
                                <td id="arr333">Cell 4</td>
                                <td id="arr334">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[1];?></td>
                                <td id="arr335">Cell 4</td>
                                <td id="arr336">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[2];?></td>
                                <td id="arr337">Cell 4</td>
                                <td id="arr338">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[3];?></td>
                                <td id="arr339">Cell 4</td>
                                <td id="arr340">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[4];?></td>
                                <td id="arr341">Cell 4</td>
                                <td id="arr342">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[5];?></td>
                                <td id="arr343">Cell 4</td>
                                <td id="arr344">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[6];?></td>
                                <td id="arr345">Cell 4</td>
                                <td id="arr346">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[7];?></td>
                                <td id="arr347">Cell 4</td>
                                <td id="arr348">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[8];?></td>
                                <td id="arr349">Cell 4</td>
                                <td id="arr350">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr351">Cell 4</td>
                                <td id="arr352">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6" id="atten6">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">II Sem Attendance</h1>
                <div class="table-responsive table-bordered">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:156px;">subject</th>
                                <th style="width:269px;">Total classes</th>
                                <th style="width:269px;">Classes attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $sub2[10];?></td>
                                <td id="arr353">Cell 4</td>
                                <td id="arr354">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[11];?></td>
                                <td id="arr355">Cell 4</td>
                                <td id="arr356">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[12];?></td>
                                <td id="arr357">Cell 4</td>
                                <td id="arr358">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[13];?></td>
                                <td id="arr359">Cell 4</td>
                                <td id="arr360">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[14];?></td>
                                <td id="arr361">Cell 4</td>
                                <td id="arr362">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[15];?></td>
                                <td id="arr363">Cell 4</td>
                                <td id="arr364">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[16];?></td>
                                <td id="arr365">Cell 4</td>
                                <td id="arr366">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[17];?></td>
                                <td id="arr367">Cell 4</td>
                                <td id="arr368">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub2[18];?></td>
                                <td id="arr369">Cell 4</td>
                                <td id="arr370">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr371">Cell 4</td>
                                <td id="arr372">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
       
<!--        Third Year Progress Starts Here-->
        <div class="table-responsive">
            <table class="table table-striped" id="year3">
                <thead>
                    <tr>
                       <th></th>
                        <th><?php echo $sub3[0];?></th>
                        <th><?php echo $sub3[1];?></th>
                        <th><?php echo $sub3[2];?></th>
                        <th><?php echo $sub3[3];?></th>
                        <th><?php echo $sub3[4];?></th>
                        <th><?php echo $sub3[5];?></th>
                        <th><?php echo $sub3[6];?><br></th>
                        <th><?php echo $sub3[7];?></th>
                        <th><?php echo $sub3[8];?></th>
                        <th><?php echo $sub3[9];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>V Sem 1 Mid</strong></td>
                        <td id="arr401">Cell 4</td>
                        <td id="arr402">Cell 4</td>
                        <td id="arr403">Cell 4</td>
                        <td id="arr404">Cell 4</td>
                        <td id="arr405">Cell 4</td>
                        <td id="arr406">Cell 4</td>
                        <td id="arr407">Cell 4</td>
                        <td id="arr408">Cell 4</td>
                        <td id="arr409">Cell 4</td>
                        <td id="arr410">Cell 4</td>
                        <td id="arr411">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>V Sem 2 Mid</strong></td>
                        <td id="arr412">Cell 4</td>
                        <td id="arr413">Cell 4</td>
                        <td id="arr414">Cell 4</td>
                        <td id="arr415">Cell 4</td>
                        <td id="arr416">Cell 4</td>
                        <td id="arr417">Cell 4</td>
                        <td id="arr418">Cell 4</td>
                        <td id="arr419">Cell 4</td>
                        <td id="arr420">Cell 4</td>
                        <td id="arr421">Cell 4</td>
                        <td id="arr422">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>V Semester&nbsp;</strong></td>
                        <td id="arr423">Cell 4</td>
                        <td id="arr424">Cell 4</td>
                        <td id="arr425">Cell 4</td>
                        <td id="arr426">Cell 4</td>
                        <td id="arr427">Cell 4</td>
                        <td id="arr428">Cell 4</td>
                        <td id="arr429">Cell 4</td>
                        <td id="arr430">Cell 4</td>
                        <td id="arr431">Cell 4</td>
                        <td id="arr432">Cell 4</td>
                        <td id="arr433">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr434">Cell 4</td>
                        <td id="arr435">Cell 4</td>
                        <td id="arr436">Cell 4</td>
                        <td id="arr437">Cell 4</td>
                        <td id="arr438">Cell 4</td>
                        <td id="arr439">Cell 4</td>
                        <td id="arr440">Cell 4</td>
                        <td id="arr441">Cell 4</td>
                        <td id="arr442">Cell 4</td>
                        <td id="arr443">Cell 4</td>
                        <td id="arr444">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr445"><strong>SGPA:</strong></td>
                        <td id="arr446"></td>
                        <td id="arr447">/10</td>
                        <td id="arr448"></td>
                        <td id="arr449"></td>
                        <td id="arr450"><strong>CGPA:</strong></td>
                        <td id="arr451"></td>
                        <td id="arr452">/10</td>
                        <td id="arr453"></td>
                        <td id="arr454"></td>
                        <td id="arr455"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr456"><strong>SC:</strong></td>
                        <td id="arr457"></td>
                        <td id="arr458">/24</td>
                        <td id="arr459"></td>
                        <td id="arr460"></td>
                        <td id="arr461"><strong>CC:</strong></td>
                        <td id="arr462"></td>
                        <td id="arr463">/120</td>
                        <td id="arr464"></td>
                        <td id="arr465"></td>
                        <td id="arr466"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-striped" id="year7">
                <thead>
                    <tr>
                        <th></th>
                        <th><?php echo $sub3[10];?></th>
                        <th><?php echo $sub3[11];?></th>
                        <th><?php echo $sub3[12];?></th>
                        <th><?php echo $sub3[13];?></th>
                        <th><?php echo $sub3[14];?></th>
                        <th><?php echo $sub3[15];?></th>
                        <th><?php echo $sub3[16];?><br></th>
                        <th><?php echo $sub3[17];?></th>
                        <th><?php echo $sub3[18];?></th>
                        <th><?php echo $sub3[19];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>VI Sem 1 Mid</strong></td>
                        <td id="arr467">Cell 4</td>
                        <td id="arr468">Cell 4</td>
                        <td id="arr469">Cell 4</td>
                        <td id="arr470">Cell 4</td>
                        <td id="arr471">Cell 4</td>
                        <td id="arr472">Cell 4</td>
                        <td id="arr473">Cell 4</td>
                        <td id="arr474">Cell 4</td>
                        <td id="arr475">Cell 4</td>
                        <td id="arr476">Cell 4</td>
                        <td id="arr477">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>VI Sem 2 Mid</strong></td>
                        <td id="arr478">Cell 4</td>
                        <td id="arr479">Cell 4</td>
                        <td id="arr480">Cell 4</td>
                        <td id="arr481">Cell 4</td>
                        <td id="arr482">Cell 4</td>
                        <td id="arr483">Cell 4</td>
                        <td id="arr484">Cell 4</td>
                        <td id="arr485">Cell 4</td>
                        <td id="arr486">Cell 4</td>
                        <td id="arr487">Cell 4</td>
                        <td id="arr488">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>VI Semester&nbsp;</strong></td>
                        <td id="arr489">Cell 4</td>
                        <td id="arr490">Cell 4</td>
                        <td id="arr491">Cell 4</td>
                        <td id="arr492">Cell 4</td>
                        <td id="arr493">Cell 4</td>
                        <td id="arr494">Cell 4</td>
                        <td id="arr495">Cell 4</td>
                        <td id="arr496">Cell 4</td>
                        <td id="arr497">Cell 4</td>
                        <td id="arr498">Cell 4</td>
                        <td id="arr499">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr500">Cell 4</td>
                        <td id="arr501">Cell 4</td>
                        <td id="arr502">Cell 4</td>
                        <td id="arr503">Cell 4</td>
                        <td id="arr504">Cell 4</td>
                        <td id="arr505">Cell 4</td>
                        <td id="arr506">Cell 4</td>
                        <td id="arr507">Cell 4</td>
                        <td id="arr508">Cell 4</td>
                        <td id="arr509">Cell 4</td>
                        <td id="arr510">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr511"><strong>SGPA:</strong></td>
                        <td id="arr512"></td>
                        <td id="arr513">/10</td>
                        <td id="arr514"></td>
                        <td id="arr515"></td>
                        <td id="arr516"><strong>CGPA:</strong></td>
                        <td id="arr517"></td>
                        <td id="arr518">/10</td>
                        <td id="arr519"></td>
                        <td id="arr520"></td>
                        <td id="arr521"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr522"><strong>SC:</strong></td>
                        <td id="arr523"></td>
                        <td id="arr524">/24</td>
                        <td id="arr525"></td>
                        <td id="arr526"></td>
                        <td id="arr527"><strong>CC:</strong></td>
                        <td id="arr528"></td>
                        <td id="arr529">/144</td>
                        <td id="arr530"></td>
                        <td id="arr531"></td>
                        <td id="arr532"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6" id="atten3">
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
                                <td><?php echo $sub3[0];?></td>
                                <td id="arr533">Cell 4</td>
                                <td id="arr534">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[1];?></td>
                                <td id="arr535">Cell 4</td>
                                <td id="arr536">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[2];?></td>
                                <td id="arr537">Cell 4</td>
                                <td id="arr538">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[3];?></td>
                                <td id="arr539">Cell 4</td>
                                <td id="arr540">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[4];?></td>
                                <td id="arr541">Cell 4</td>
                                <td id="arr542">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[5];?></td>
                                <td id="arr543">Cell 4</td>
                                <td id="arr544">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[6];?></td>
                                <td id="arr545">Cell 4</td>
                                <td id="arr546">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[7];?></td>
                                <td id="arr547">Cell 4</td>
                                <td id="arr548">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[8];?></td>
                                <td id="arr549">Cell 4</td>
                                <td id="arr550">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[9];?></td>
                                <td id="arr551">Cell 4</td>
                                <td id="arr552">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr553">Cell 4</td>
                                <td id="arr554">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6" id="atten7">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">II Sem Attendance</h1>
                <div class="table-responsive table-bordered">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:156px;">subject</th>
                                <th style="width:269px;">Total classes</th>
                                <th style="width:269px;">Classes attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $sub3[10];?></td>
                                <td id="arr555">Cell 4</td>
                                <td id="arr556">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[11];?></td>
                                <td id="arr557">Cell 4</td>
                                <td id="arr558">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[12];?></td>
                                <td id="arr559">Cell 4</td>
                                <td id="arr560">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[13];?></td>
                                <td id="arr561">Cell 4</td>
                                <td id="arr562">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[14];?></td>
                                <td id="arr563">Cell 4</td>
                                <td id="arr564">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[15];?></td>
                                <td id="arr565">Cell 4</td>
                                <td id="arr566">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[16];?></td>
                                <td id="arr567">Cell 4</td>
                                <td id="arr568">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[17];?></td>
                                <td id="arr569">Cell 4</td>
                                <td id="arr570">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[18];?></td>
                                <td id="arr571">Cell 4</td>
                                <td id="arr572">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub3[19];?></td>
                                <td id="arr573">Cell 4</td>
                                <td id="arr574">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr575">Cell 4</td>
                                <td id="arr576">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
<!--        Fourth year Starts Here-->
        <div class="table-responsive">
            <table class="table table-striped" id="year4">
                <thead>
                    <tr>
                        <th></th>
                        <th><?php echo $sub4[0];?></th>
                        <th><?php echo $sub4[1];?></th>
                        <th><?php echo $sub4[2];?></th>
                        <th><?php echo $sub4[3];?></th>
                        <th><?php echo $sub4[4];?></th>
                        <th><?php echo $sub4[5];?></th>
                        <th><?php echo $sub4[6];?><br></th>
                        <th><?php echo $sub4[7];?></th>
                        <th><?php echo $sub4[8];?></th>
                        <th><?php echo $sub4[9];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>VII Sem Mid 1</strong></td>
                        <td id="arr601">Cell 4</td>
                        <td id="arr602">Cell 4</td>
                        <td id="arr603">Cell 4</td>
                        <td id="arr604">Cell 4</td>
                        <td id="arr605">Cell 4</td>
                        <td id="arr606">Cell 4</td>
                        <td id="arr607">Cell 4</td>
                        <td id="arr608">Cell 4</td>
                        <td id="arr609">Cell 4</td>
                        <td id="arr610">Cell 4</td>
                        <td id="arr611">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>VII Sem Mid 2</strong></td>
                        <td id="arr612">Cell 4</td>
                        <td id="arr613">Cell 4</td>
                        <td id="arr614">Cell 4</td>
                        <td id="arr615">Cell 4</td>
                        <td id="arr616">Cell 4</td>
                        <td id="arr617">Cell 4</td>
                        <td id="arr618">Cell 4</td>
                        <td id="arr619">Cell 4</td>
                        <td id="arr620">Cell 4</td>
                        <td id="arr621">Cell 4</td>
                        <td id="arr622">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>VII Semester&nbsp;</strong></td>
                        <td id="arr623">Cell 4</td>
                        <td id="arr624">Cell 4</td>
                        <td id="arr625">Cell 4</td>
                        <td id="arr626">Cell 4</td>
                        <td id="arr627">Cell 4</td>
                        <td id="arr628">Cell 4</td>
                        <td id="arr629">Cell 4</td>
                        <td id="arr630">Cell 4</td>
                        <td id="arr631">Cell 4</td>
                        <td id="arr632">Cell 4</td>
                        <td id="arr633">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr634">Cell 4</td>
                        <td id="arr635">Cell 4</td>
                        <td id="arr636">Cell 4</td>
                        <td id="arr637">Cell 4</td>
                        <td id="arr638">Cell 4</td>
                        <td id="arr639">Cell 4</td>
                        <td id="arr640">Cell 4</td>
                        <td id="arr641">Cell 4</td>
                        <td id="arr642">Cell 4</td>
                        <td id="arr643">Cell 4</td>
                        <td id="arr644">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr645"><strong>SGPA:</strong></td>
                        <td id="arr646"></td>
                        <td id="arr647">/10</td>
                        <td id="arr648"></td>
                        <td id="arr649"></td>
                        <td id="arr650"><strong>CGPA:</strong></td>
                        <td id="arr651"></td>
                        <td id="arr652">/10</td>
                        <td id="arr653"></td>
                        <td id="arr654"></td>
                        <td id="arr655"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr656"><strong>SC:</strong></td>
                        <td id="arr657"></td>
                        <td id="arr658">/24</td>
                        <td id="arr659"></td>
                        <td id="arr660"></td>
                        <td id="arr661"><strong>CC:</strong></td>
                        <td id="arr662"></td>
                        <td id="arr663">/168</td>
                        <td id="arr664"></td>
                        <td id="arr665"></td>
                        <td id="arr666"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-striped" id="year8">
                <thead>
                    <tr>
                       <th></th>
                        <th><?php echo $sub4[10];?></th>
                        <th><?php echo $sub4[11];?></th>
                        <th><?php echo $sub4[12];?></th>
                        <th><?php echo $sub4[13];?></th>
                        <th><?php echo $sub4[14];?></th>
                        <th><?php echo $sub4[15];?></th>
                        <th><?php echo $sub4[16];?><br></th>
                        <th><?php echo $sub4[17];?></th>
                        <th><?php echo $sub4[18];?></th>
                        <th><?php echo $sub4[19];?></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>VIII Sem Mid 1</strong></td>
                        <td id="arr667">Cell 4</td>
                        <td id="arr668">Cell 4</td>
                        <td id="arr669">Cell 4</td>
                        <td id="arr670">Cell 4</td>
                        <td id="arr671">Cell 4</td>
                        <td id="arr672">Cell 4</td>
                        <td id="arr673">Cell 4</td>
                        <td id="arr674">Cell 4</td>
                        <td id="arr675">Cell 4</td>
                        <td id="arr676">Cell 4</td>
                        <td id="arr677">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>VIII Sem Mid 2</strong></td>
                        <td id="arr678">Cell 4</td>
                        <td id="arr679">Cell 4</td>
                        <td id="arr680">Cell 4</td>
                        <td id="arr681">Cell 4</td>
                        <td id="arr682">Cell 4</td>
                        <td id="arr683">Cell 4</td>
                        <td id="arr684">Cell 4</td>
                        <td id="arr685">Cell 4</td>
                        <td id="arr686">Cell 4</td>
                        <td id="arr687">Cell 4</td>
                        <td id="arr688">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>VIII Semester&nbsp;</strong></td>
                        <td id="arr689">Cell 4</td>
                        <td id="arr690">Cell 4</td>
                        <td id="arr691">Cell 4</td>
                        <td id="arr692">Cell 4</td>
                        <td id="arr693">Cell 4</td>
                        <td id="arr694">Cell 4</td>
                        <td id="arr695">Cell 4</td>
                        <td id="arr696">Cell 4</td>
                        <td id="arr697">Cell 4</td>
                        <td id="arr698">Cell 4</td>
                        <td id="arr699">Cell 4</td>
                    </tr>
                    <tr>
                        <td><strong>Result</strong></td>
                        <td id="arr700">Cell 4</td>
                        <td id="arr701">Cell 4</td>
                        <td id="arr702">Cell 4</td>
                        <td id="arr703">Cell 4</td>
                        <td id="arr704">Cell 4</td>
                        <td id="arr705">Cell 4</td>
                        <td id="arr706">Cell 4</td>
                        <td id="arr707">Cell 4</td>
                        <td id="arr708">Cell 4</td>
                        <td id="arr709">Cell 4</td>
                        <td id="arr710">Cell 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr711"><strong>SGPA:</strong></td>
                        <td id="arr712"></td>
                        <td id="arr713">/10</td>
                        <td id="arr714"></td>
                        <td id="arr715"></td>
                        <td id="arr716"><strong>CGPA:</strong></td>
                        <td id="arr717"></td>
                        <td id="arr718">/10</td>
                        <td id="arr719"></td>
                        <td id="arr720"></td>
                        <td id="arr721"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="arr722"><strong>SC:</strong></td>
                        <td id="arr723"></td>
                        <td id="arr724">/24</td>
                        <td id="arr725"></td>
                        <td id="arr726"></td>
                        <td id="arr727"><strong>CC:</strong></td>
                        <td id="arr728"></td>
                        <td id="arr729">/192</td>
                        <td id="arr730"></td>
                        <td id="arr731"></td>
                        <td id="arr732"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6" id="atten4">
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
                                <td><?php echo $sub4[0];?></td>
                                <td id="arr733">Cell 4</td>
                                <td id="arr734">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[1];?></td>
                                <td id="arr735">Cell 4</td>
                                <td id="arr736">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[2];?></td>
                                <td id="arr737">Cell 4</td>
                                <td id="arr738">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[3];?></td>
                                <td id="arr739">Cell 4</td>
                                <td id="arr740">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[4];?></td>
                                <td id="arr741">Cell 4</td>
                                <td id="arr742">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[5];?></td>
                                <td id="arr743">Cell 4</td>
                                <td id="arr744">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[6];?></td>
                                <td id="arr745">Cell 4</td>
                                <td id="arr746">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[7];?></td>
                                <td id="arr747">Cell 4</td>
                                <td id="arr748">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[8];?></td>
                                <td id="arr749">Cell 4</td>
                                <td id="arr750">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[9];?></td>
                                <td id="arr751">Cell 4</td>
                                <td id="arr752">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr753">Cell 4</td>
                                <td id="arr754">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-6" id="atten8">
                <h1 class="text-center" style="font-size:28px;background-color:#bfbebe;color:rgb(82,84,85);">II Sem Attendance</h1>
                <div class="table-responsive table-bordered">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width:156px;">subject</th>
                                <th style="width:269px;">Total classes</th>
                                <th style="width:269px;">Classes attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $sub4[10];?></td>
                                <td id="arr755">Cell 4</td>
                                <td id="arr756">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[11];?></td>
                                <td id="arr757">Cell 4</td>
                                <td id="arr758">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[12];?></td>
                                <td id="arr759">Cell 4</td>
                                <td id="arr760">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[13];?></td>
                                <td id="arr761">Cell 4</td>
                                <td id="arr762">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[14];?></td>
                                <td id="arr763">Cell 4</td>
                                <td id="arr764">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[15];?></td>
                                <td id="arr765">Cell 4</td>
                                <td id="arr766">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[16];?></td>
                                <td id="arr767">Cell 4</td>
                                <td id="arr768">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[17];?></td>
                                <td id="arr769">Cell 4</td>
                                <td id="arr770">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[18];?></td>
                                <td id="arr771">Cell 4</td>
                                <td id="arr772">Cell 4</td>
                            </tr>
                            <tr>
                                <td><?php echo $sub4[19];?></td>
                                <td id="arr773">Cell 4</td>
                                <td id="arr774">Cell 4</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Result</td>
                                <td id="arr775">Cell 4</td>
                                <td id="arr776">Cell 4</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="progress blue"><span class="progress-left"> <span class="progress-bar"> </span></span><span class="progress-right"> <span class="progress-bar"> </span></span>
                    <div class="progress-value"><span>91%</span></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="progress yellow"><span class="progress-left"> <span class="progress-bar"> </span></span><span class="progress-right"> <span class="progress-bar"> </span></span>
                    <div class="progress-value"><span>82%</span></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="progress blue"><span class="progress-left"> <span class="progress-bar"> </span></span><span class="progress-right"> <span class="progress-bar"> </span></span>
                    <div class="progress-value"><span>89%</span></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="progress yellow"><span class="progress-left"> <span class="progress-bar"> </span></span><span class="progress-right"> <span class="progress-bar"> </span></span>
                    <div class="progress-value"><span>79%</span></div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:30px;"></div>
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
                        <p class="copyright" style="color:rgb(251,252,252);">AiPlus Â© 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
 
</html>
 
<?php
 
include'showConfig.php';
 
?>