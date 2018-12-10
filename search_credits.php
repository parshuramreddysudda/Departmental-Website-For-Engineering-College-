<?php
ini_set('display_errors', 'off');
include'config.php';
include 'updateYear.php';



$subCred=$_POST['Credi'];
$subYear=$_POST['submitYear'];
$subSem=$_POST['submitSem'];

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
    <div>
        <div class="container"></div>
    </div>
    <div style="background-color:#f2f2f2;">
        <div class="container">
            
            
            <form id="credit" name="credit" method="post" action="search_credits.php">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1 class="text-center" style="color:rgb(75,76,77);background-color:#e0e1e1;">Start your search here&nbsp;</h1>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p class="text-center" style="font-size:24px;">Select the year</p>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <select name="submitYear">
                                
                                 <option value="Firstyear" >First Year</option>
                                 <option value="Secondyear" >Second Year</option>
                                 <option value="Thirdyear">Third Year</option>
                                 <option value="Fourthyear">Fouth Year</option>
                                
                                </select>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-6 align-self-center">
                                <p class="text-center" style="font-size:24px;">Select the Semester &nbsp;</p>
                            </div>
                            <div class="col-md-6 align-self-center" > 
                                <select id="semSelect" name="submitSem" >
                                
                                 <option value="Firstsem">First Sem</option>
                                 <option value="Secondsem">Second Sem</option>
                               
                                
                                </select>
                            </div>
                        </div>
                         <div class="row" >
                            <div class="col-md-6 align-self-center" >
                                <p class="text-center" style="font-size:24px;">Enter the minimum credits&nbsp;</p>
                            </div>
                            <div class="col-md-6 align-self-center" > 
                                <input  required type="text" name="Credi">
                            </div>
                        </div>
                        
                        
                        <button class="btn btn-primary" role="button"style="background-color:rgb(138,138,139);margin-top:10px;float:right;margin-right:170px;" type="submit" form="credit" value="submit">Search</button></div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div>
        <div class="table-responsive" style="padding:29px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:61px;">S.no</th>
                        <th>Roll Number</th>
                        <th>Student Name</th>
                        <th>Year</th>
                        <th>Credits</th>
                    </tr>
                </thead>
                <tbody>
            
                        
                        <?php
                      if(isset($subCred)&&isset($subYear)&&isset($subSem))
{
//echo $subCred;
//echo $subYear;
//echo $subSem;
//    
//    
    
//    
//$sql="SELECT $subYear.id FROM $subYear INNER JOIN student ON student.id =$subYear.id WHERE student.presentyear = '$subYear' AND $subYear.arr57>12";
    
    
//    $sql="SELECT firstyear.id FROM firstyear INNER JOIN student ON student.id = firstyear.id WHERE student.presentyear = 'fourthyear' AND firstyear.arr57>12";
//    



   if($subYear=='Firstyear')
   {
       if($subSem=='Firstsem')
       {
          sqlCheckCredit('arr57',$subCred,$subYear);
       }
       else if ($subSem=='Secondsem')
       {
           sqlCheckCredit('arr123',$subCred,$subYear);
       }
       
   }
   else if($subYear=='Secondyear')
    {
       if($subSem=='Firstsem')
       {
           sqlCheckCredit('arr257',$subCred,$subYear);
       }
       else if ($subSem=='Secondsem')
       {
          sqlCheckCredit('arr323',$subCred,$subYear) ;
       }
        
    }
   else if($subYear=='Thirdyear')
     {
       if($subSem=='Firstsem')
       {
           sqlCheckCredit('arr457',$subCred,$subYear);
       }
       else if ($subSem=='Secondsem')
       {
           sqlCheckCredit('arr523',$subCred,$subYear);
       }
         
     }
   else if ($subYear=='Fourthyear')
     {
       if($subSem=='Firstsem')
       {
           sqlCheckCredit('arr657',$subCred,$subYear);
       }
       else if ($subSem=='Secondsem')
       {
          sqlCheckCredit('arr723',$subCred,$subYear); 
       }
         
     }
    
 
}

function sqlCheckCredit($sem,$subCred,$subYear)
{
    $sql="SELECT $subYear.id,$subYear.$sem FROM $subYear INNER JOIN student ON student.id =$subYear.id WHERE student.presentyear = '$subYear' AND $subYear.$sem<=$subCred";
        
$result=$GLOBALS['conn']->query($sql);
    
if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc())
    {
//        echo $row['id'];
        $credStudentId[]=$row['id'];
        $credStudentCred[]=$row[$sem];
        
    }
        
}
    
    else
    {
    echo "<script type=\"text/javascript\">
            alert('There are No records with these Credits ');

            </script>";
    }
    
$inc=1;
    
    if(isset($credStudentId))
    {
        
for($i=0;$i<count($credStudentId);$i++)
   {
      $sqlCred="SELECT id,name,presentyear from student where id='$credStudentId[$i]'";
         $resultCred=$GLOBALS['conn']->query($sqlCred);
    
    if ($resultCred->num_rows >= 0) 
    {
    
        while($rowCred=$resultCred->fetch_assoc())
        {
//        echo $row['id'];
                  
            
             echo "<tr><td>".$inc."</td><td>".$rowCred['id']."</td><td>".$rowCred['name']."</td><td>".$rowCred['presentyear']."</td><td>".$credStudentCred[$i]."</td></tr>";
            
    
        }
        
    }
    else
    {
        echo "printed";
    }
    $inc++;
    
}
    }
    
}

                        
                        ?>

                
                </tbody>
            </table>
        </div>
    </div>
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
</body>
<script>

    
function getValuesSelected() 
    {
    var year=document.getElementById("yearSelect").value;
    var sem=document.getElementById("semSelect").value;
   
    }
   
</script>
    
    
    
</html>
<?php


//SELECT firstyear.id FROM firstyear INNER JOIN student ON student.id = firstyear.id WHERE student.presentyear = 'fourthyear' AND firstyear.arr57>12

?>
