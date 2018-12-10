

<!--
This website is Developed by Parshuram Reddy (parshuram.sudda@gmail.com && VishnuVardhanReddy(vishnurapuru10@gmail.com)
This can be edited for free 
For More details and decsription contact Authors
This is Useful for Engineering Colleges Respectivly 
--><?php
include 'config.php';

$sql = "SELECT id,year FROM student";
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    $rowcount=mysqli_num_rows($result);
    while($array = mysqli_fetch_assoc($result)) 
    {
        $mainId[]=$array["id"];
        $mainYear[]=$array["year"];
       
    }
    
}
else
{
//    echo "0 results";
} 
$sub=date('M Y'); 
//echo "\n";
$presentYear=date('Y');   //2018
$presentMon=date('m');    //Sepetember 09
//echo $presentMon;
//echo $presentYear;

//Calculating present year for all the students
//echo $rowcount; //Number of rows in sql result
$row=4;
//echo "<br>".$presentYear."<br>";
//echo "Main year is ".$mainYear[0]."<br>";




function calcuateonemonth($id)
{
   
   
    if($GLOBALS['presentMon']>=06)
    {
        //echo "ID having ".$GLOBALS['temp']." is Firstyear <br>";
        
        sqlUpdate($GLOBALS['temp'],'Firstyear');
        
    }
    else
    {
       //echo "ID having ".$GLOBALS['temp']." is Having Error <br>";
         sqlUpdate($GLOBALS['temp'],'Error');
    }
}
function calcuatetwomonth($id)
{  
   
    if($GLOBALS['presentMon']>=06)
    {
        //echo "ID having ".$GLOBALS['temp']." is Secondyear <br>";
         sqlUpdate($GLOBALS['temp'],'Secondyear');
    }
    else
    {
        // echo "ID having ".$GLOBALS['temp']." is Firstyear <br>";
         sqlUpdate($GLOBALS['temp'],'Firstyear');
    }
}
function calcuatethreemonth($id)
{
   
    if($GLOBALS['presentMon']>=06)
    {
      //echo "ID having ".$GLOBALS['temp']." is Thirdyear<br>";
         sqlUpdate($GLOBALS['temp'],'Thirdyear');
    }
    else
    {
        //echo "ID having ".$GLOBALS['temp']." is Secondyear<br>";
         sqlUpdate($GLOBALS['temp'],'Secondyear');
    }
}
function calcuatefourmonth($id)
{

    if($GLOBALS['presentMon']>=06)
    {
      //echo "ID having ".$GLOBALS['temp']." is Fourthyear<br>";
         sqlUpdate($GLOBALS['temp'],'Fourthyear');
    }
    else
    {
         //echo "Thirdyear";
         sqlUpdate($GLOBALS['temp'],'Thirdyear');
    }
    
}
function calcuatefifthmonth($id)
{
   
    if($GLOBALS['presentMon']<06)
    {
     //  echo "ID having ".$GLOBALS['temp']." is Thirdyear<br>";
         sqlUpdate($GLOBALS['temp'],'Thirdyear');
    }
    else
    {
           // echo "ID having ".$GLOBALS['temp']." is Having Error <br>";
         sqlUpdate($GLOBALS['temp'],'Error');
    }
}
  



for($i=0;$i<$rowcount;$i++)
{
    $temp=$mainId[$i];
   if($presentYear==$mainYear[$i])
   {
      calcuateonemonth($i);
   }
    else if($presentYear==$mainYear[$i]+1)
    {
       calcuatetwomonth($i);
    }
    else if($presentYear==$mainYear[$i]+2)
    {
        calcuatethreemonth($i);
    }
     else if($presentYear==$mainYear[$i]+3)
    {
        calcuatefourmonth($i);
    }
     else if($presentYear==$mainYear[$i]+4)
    {
      calcuatefifthmonth($i);
    }
    else
    {
//         echo "ID having ".$GLOBALS['temp']." is Having Error <br>";
    }
    
    
}


function sqlUpdate($presId,$yearName)
{
    
    
    
$sql1 = "UPDATE student SET presentyear='$yearName' WHERE id='$presId'";
    
    
if ($GLOBALS['conn']->query($sql1) === TRUE)
{
//    echo "Record updated successfully";
} 
    else
 {
    echo "Error updating record: ";
}

}





































?>


