<?php
   
  session_start(); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
//Checking is seesion is hod or not 

  if(!isset($_SESSION['username'])||$_SESSION['username']!='Hod') 
  {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: HodLogin.php');
  }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);
    
//Getting values from previous page 

$roll=$_SESSION["rollsession"];
$sname=$_SESSION["sname"];
$fname=$_SESSION["fname"];
$year=$_SESSION["year"];

$arr1 = $_POST['arr601'];
$arr2 = $_POST['arr602'];
$arr3 = $_POST['arr603'];
$arr4 = $_POST['arr604'];
$arr5 = $_POST['arr605'];
$arr6 = $_POST['arr606'];
$arr7 = $_POST['arr607'];
$arr8 = $_POST['arr608'];
$arr9 = $_POST['arr609'];
$arr10 = $_POST['arr610'];
$arr11 = $_POST['arr611'];
$arr12 = $_POST['arr612'];
$arr13 = $_POST['arr613'];
$arr14 = $_POST['arr614'];
$arr15 = $_POST['arr615'];
$arr16 = $_POST['arr616'];
$arr17 = $_POST['arr617'];
$arr18 = $_POST['arr618'];
$arr19 = $_POST['arr619'];
$arr20 = $_POST['arr620'];
$arr21 = $_POST['arr621'];
$arr22 = $_POST['arr622'];
$arr23 = $_POST['arr623'];
$arr24 = $_POST['arr624'];
$arr25 = $_POST['arr625'];
$arr26 = $_POST['arr626'];
$arr27 = $_POST['arr627'];
$arr28 = $_POST['arr628'];
$arr29 = $_POST['arr629'];
$arr30 = $_POST['arr630'];
$arr31 = $_POST['arr631'];
$arr32 = $_POST['arr632'];
$arr33 = $_POST['arr633'];
$arr34 = $_POST['arr634'];
$arr35 = $_POST['arr635'];
$arr36 = $_POST['arr636'];
$arr37 = $_POST['arr637'];
$arr38 = $_POST['arr638'];
$arr39 = $_POST['arr639'];
$arr40 = $_POST['arr640'];
$arr41 = $_POST['arr641'];
$arr42 = $_POST['arr642'];
$arr43 = $_POST['arr643'];
$arr44 = $_POST['arr644'];
$arr45 = $_POST['arr645'];
$arr46 = $_POST['arr646'];
$arr47 = $_POST['arr647'];
$arr48 = $_POST['arr648'];
$arr49 = $_POST['arr649'];
$arr50 = $_POST['arr650'];
$arr51 = $_POST['arr651'];
$arr52 = $_POST['arr652'];
$arr53 = $_POST['arr653'];
$arr54 = $_POST['arr654'];
$arr55 = $_POST['arr655'];
$arr56 = $_POST['arr656'];
$arr57 = $_POST['arr657'];
$arr58 = $_POST['arr658'];
$arr59 = $_POST['arr659'];
$arr60 = $_POST['arr660'];
$arr61 = $_POST['arr661'];
$arr62 = $_POST['arr662'];
$arr63 = $_POST['arr663'];
$arr64 = $_POST['arr664'];
$arr65 = $_POST['arr665'];
$arr66 = $_POST['arr666'];
$arr67 = $_POST['arr667'];
$arr68 = $_POST['arr668'];
$arr69 = $_POST['arr669'];
$arr70 = $_POST['arr670'];
$arr71 = $_POST['arr671'];
$arr72 = $_POST['arr672'];
$arr73 = $_POST['arr673'];
$arr74 = $_POST['arr674'];
$arr75 = $_POST['arr675'];
$arr76 = $_POST['arr676'];
$arr77 = $_POST['arr677'];
$arr78 = $_POST['arr678'];
$arr79 = $_POST['arr679'];
$arr80 = $_POST['arr680'];
$arr81 = $_POST['arr681'];
$arr82 = $_POST['arr682'];
$arr83 = $_POST['arr683'];
$arr84 = $_POST['arr684'];
$arr85 = $_POST['arr685'];
$arr86 = $_POST['arr686'];
$arr87 = $_POST['arr687'];
$arr88 = $_POST['arr688'];
$arr89 = $_POST['arr689'];
$arr90 = $_POST['arr690'];
$arr91 = $_POST['arr691'];
$arr92 = $_POST['arr692'];
$arr93 = $_POST['arr693'];
$arr94 = $_POST['arr694'];
$arr95 = $_POST['arr695'];
$arr96 = $_POST['arr696'];
$arr97 = $_POST['arr697'];
$arr98 = $_POST['arr698'];
$arr99 = $_POST['arr699'];
$arr100 = $_POST['arr700'];
$arr101 = $_POST['arr701'];
$arr102 = $_POST['arr702'];
$arr103 = $_POST['arr703'];
$arr104 = $_POST['arr704'];
$arr105 = $_POST['arr705'];
$arr106 = $_POST['arr706'];
$arr107 = $_POST['arr707'];
$arr108 = $_POST['arr708'];
$arr109 = $_POST['arr709'];
$arr110 = $_POST['arr710'];
$arr111 = $_POST['arr711'];
$arr112 = $_POST['arr712'];
$arr113 = $_POST['arr713'];
$arr114 = $_POST['arr714'];
$arr115 = $_POST['arr715'];
$arr116 = $_POST['arr716'];
$arr117 = $_POST['arr717'];
$arr118 = $_POST['arr718'];
$arr119 = $_POST['arr719'];
$arr120 = $_POST['arr720'];
$arr121 = $_POST['arr721'];
$arr122 = $_POST['arr722'];
$arr123 = $_POST['arr723'];
$arr124 = $_POST['arr724'];
$arr125 = $_POST['arr725'];
$arr126 = $_POST['arr726'];
$arr127 = $_POST['arr727'];
$arr128 = $_POST['arr728'];
$arr129 = $_POST['arr729'];
$arr130 = $_POST['arr730'];
$arr131 = $_POST['arr731'];
$arr132 = $_POST['arr732'];
$arr133 = $_POST['arr733'];
$arr134 = $_POST['arr734'];
$arr135 = $_POST['arr735'];
$arr136 = $_POST['arr736'];
$arr137 = $_POST['arr737'];
$arr138 = $_POST['arr738'];
$arr139 = $_POST['arr739'];
$arr140 = $_POST['arr740'];
$arr141 = $_POST['arr741'];
$arr142 = $_POST['arr742'];
$arr143 = $_POST['arr743'];
$arr144 = $_POST['arr744'];
$arr145 = $_POST['arr745'];
$arr146 = $_POST['arr746'];
$arr147 = $_POST['arr747'];
$arr148 = $_POST['arr748'];
$arr149 = $_POST['arr749'];
$arr150 = $_POST['arr750'];
$arr151 = $_POST['arr751'];
$arr152 = $_POST['arr752'];
$arr153 = $_POST['arr753'];
$arr154 = $_POST['arr754'];
$arr155 = $_POST['arr755'];
$arr156 = $_POST['arr756'];
$arr157 = $_POST['arr757'];
$arr158 = $_POST['arr758'];
$arr159 = $_POST['arr759'];
$arr160 = $_POST['arr760'];
$arr161 = $_POST['arr761'];
$arr162 = $_POST['arr762'];
$arr163 = $_POST['arr763'];
$arr164 = $_POST['arr764'];
$arr165 = $_POST['arr765'];
$arr166 = $_POST['arr766'];
$arr167 = $_POST['arr767'];
$arr168 = $_POST['arr768'];
$arr169 = $_POST['arr769'];
$arr170 = $_POST['arr770'];
$arr171 = $_POST['arr771'];
$arr172 = $_POST['arr772'];
$arr173 = $_POST['arr773'];
$arr174 = $_POST['arr774'];
$arr175 = $_POST['arr775'];
$arr176 = $_POST['arr776'];



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO fouryear (id,arr601,arr602,arr603,arr604,arr605,arr606,arr607,arr608,arr609,arr610,arr611,arr612,arr613,arr614,arr615,arr616,arr617,arr618,arr619,arr620,arr621,arr622,arr623,arr624,arr625,arr626,arr627,arr628,arr629,arr630,arr631,arr632,arr633,arr634,arr635,arr636,arr637,arr638,arr639,arr640,arr641,arr642,arr643,arr644,arr645,arr646,arr647,arr648,arr649,arr650,arr651,arr652,arr653,arr654,arr655,arr656,arr657,arr658,arr659,arr660,arr661,arr662,arr663,arr664,arr665,arr666,arr667,arr668,arr669,arr670,arr671,arr672,arr673,arr674,arr675,arr676,arr677,arr678,arr679,arr680,arr681,arr682,arr683,arr684,arr685,arr686,arr687,arr688,arr689,arr690,arr691,arr692,arr693,arr694,arr695,arr696,arr697,arr698,arr699,arr700,arr701,arr702,arr703,arr704,arr705,arr706,arr707,arr708,arr709,arr710,arr711,arr712,arr713,arr714,arr715,arr716,arr717,arr718,arr719,arr720,arr721,arr722,arr723,arr724,arr725,arr726,arr727,arr728,arr729,arr730,arr731,arr732,arr733,arr734,arr735,arr736,arr737,arr738,arr739,arr740,arr741,arr742,arr743,arr744,arr745,arr746,arr747,arr748,arr749,arr750,arr751,arr752,arr753,arr754,arr755,arr756,arr757,arr758,arr759,arr760,arr761,arr762,arr763,arr764,arr765,arr766,arr767,arr768,arr769,arr770,arr771,arr772,arr773,arr774,arr775,arr776)
VALUES ('$roll','$arr1','$arr2','$arr3','$arr4','$arr5','$arr6','$arr7','$arr8','$arr9','$arr10','$arr11','$arr12','$arr13','$arr14','$arr15','$arr16','$arr17','$arr18','$arr19','$arr20','$arr21','$arr22','$arr23','$arr24','$arr25','$arr26','$arr27','$arr28','$arr29','$arr30','$arr31','$arr32','$arr33','$arr34','$arr35','$arr36','$arr37','$arr38','$arr39','$arr40','$arr41','$arr42','$arr43','$arr44','$arr45','$arr46','$arr47','$arr48','$arr49','$arr50','$arr51','$arr52','$arr53','$arr54','$arr55','$arr56','$arr57','$arr58','$arr59','$arr60','$arr61','$arr62','$arr63','$arr64','$arr65','$arr66','$arr67','$arr68','$arr69','$arr70','$arr71','$arr72','$arr73','$arr74','$arr75','$arr76','$arr77','$arr78','$arr79','$arr80','$arr81','$arr82','$arr83','$arr84','$arr85','$arr86','$arr87','$arr88','$arr89','$arr90','$arr91','$arr92','$arr93','$arr94','$arr95','$arr96','$arr97','$arr98','$arr99','$arr100','$arr101','$arr102','$arr103','$arr104','$arr105','$arr106','$arr107','$arr108','$arr109','$arr110','$arr111','$arr112','$arr113','$arr114','$arr115','$arr116','$arr117','$arr118','$arr119','$arr120','$arr121','$arr122','$arr123','$arr124','$arr125','$arr126','$arr127','$arr128','$arr129','$arr130','$arr131','$arr132','$arr133','$arr134','$arr135','$arr136','$arr137','$arr138','$arr139','$arr140','$arr141','$arr142','$arr143','$arr144','$arr145','$arr146','$arr147','$arr148','$arr149','$arr150','$arr151','$arr152','$arr153','$arr154','$arr155','$arr156','$arr157','$arr158','$arr159','$arr160','$arr161','$arr162','$arr163','$arr164','$arr165','$arr166','$arr167','$arr168','$arr169','$arr170','$arr171','$arr172','$arr173','$arr174','$arr175','$arr176')";

if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">
            alert('".$roll."  Fourth Year Details have been Added and can be edited in Editdetails page')
    
window.location.href='addDetails.php'
            </script>";
   
}
else 
{
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   echo "<script type=\"text/javascript\">
            alert('".$roll."  Fourth Year Details have been Updated already Please edit them in Edit Page')
window.location.href='addDetails.php'
            </script>";
 $i=0;
}

?>
<html>
    <head>
<script> 
    if(<?php echo $i;?>==0)
        {
     redirecttoDetails() {
         // similar behavior as clicking on a link
              window.location.href = "addDetails.php";
             
       }
        }
    else{
        alert("404");
    }
    </script>
        </head>
</html>

<?php 

echo "<script type=\"text/javascript\">
            if(i==1)
        {
           redirecttoDetails() {
        
              window.location.href = 'addDetails.php'
             
       }
       else
       {
       alert('hell')
       }
            </script>";


?>
















