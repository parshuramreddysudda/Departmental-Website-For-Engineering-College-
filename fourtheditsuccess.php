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
$Editroll=$_SESSION["Editroll"];
$Edityear=$_SESSION["Edityear"];
echo $Editroll;
echo $Edityear;


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

$sql = "UPDATE fouryear SET 
arr601='$arr1',arr602='$arr2',arr603='$arr3',arr604='$arr4',arr605='$arr5',arr606='$arr6',arr607='$arr7',arr608='$arr8',arr609='$arr9',arr610='$arr10',arr611='$arr11',arr612='$arr12',arr613='$arr13',arr614='$arr14',arr615='$arr15',arr616='$arr16',arr617='$arr17',arr618='$arr18',arr619='$arr19',arr620='$arr20',arr621='$arr21',arr622='$arr22',arr623='$arr23',arr624='$arr24',arr625='$arr25',arr626='$arr26',arr627='$arr27',arr628='$arr28',arr629='$arr29',arr630='$arr30',arr631='$arr31',arr632='$arr32',arr633='$arr33',arr634='$arr34',arr635='$arr35',arr636='$arr36',arr637='$arr37',arr638='$arr38',arr639='$arr39',arr640='$arr40',arr641='$arr41',arr642='$arr42',arr643='$arr43',arr644='$arr44',arr645='$arr45',arr646='$arr46',arr647='$arr47',arr648='$arr48',arr649='$arr49',arr650='$arr50',arr651='$arr51',arr652='$arr52',arr653='$arr53',arr654='$arr54',arr655='$arr55',arr656='$arr56',arr657='$arr57',arr658='$arr58',arr659='$arr59',arr660='$arr60',arr661='$arr61',arr662='$arr62',arr663='$arr63',arr664='$arr64',arr665='$arr65',arr666='$arr66',arr667='$arr67',arr668='$arr68',arr669='$arr69',arr670='$arr70',arr671='$arr71',arr672='$arr72',arr673='$arr73',arr674='$arr74',arr675='$arr75',arr676='$arr76',arr677='$arr77',arr678='$arr78',arr679='$arr79',arr680='$arr80',arr681='$arr81',arr682='$arr82',arr683='$arr83',arr684='$arr84',arr685='$arr85',arr686='$arr86',arr687='$arr87',arr688='$arr88',arr689='$arr89',arr690='$arr90',arr691='$arr91',arr692='$arr92',arr693='$arr93',arr694='$arr94',arr695='$arr95',arr696='$arr96',arr697='$arr97',arr698='$arr98',arr699='$arr99',arr700='$arr100',arr701='$arr101',arr702='$arr102',arr703='$arr103',arr704='$arr104',arr705='$arr105',arr706='$arr106',arr707='$arr107',arr708='$arr108',arr709='$arr109',arr710='$arr110',arr711='$arr111',arr712='$arr112',arr713='$arr113',arr714='$arr114',arr715='$arr115',arr716='$arr116',arr717='$arr117',arr718='$arr118',arr719='$arr119',arr720='$arr120',arr721='$arr121',arr722='$arr122',arr723='$arr123',arr724='$arr124',arr725='$arr125',arr726='$arr126',arr727='$arr127',arr728='$arr128',arr729='$arr129',arr730='$arr130',arr731='$arr131',arr732='$arr132',arr733='$arr133',arr734='$arr134',arr735='$arr135',arr736='$arr136',arr737='$arr137',arr738='$arr138',arr739='$arr139',arr740='$arr140',arr741='$arr141',arr742='$arr142',arr743='$arr143',arr744='$arr144',arr745='$arr145',arr746='$arr146',arr747='$arr147',arr748='$arr148',arr749='$arr149',arr750='$arr150',arr751='$arr151',arr752='$arr152',arr753='$arr153',arr754='$arr154',arr755='$arr155',arr756='$arr156',arr757='$arr157',arr758='$arr158',arr759='$arr159',arr760='$arr160',arr761='$arr161',arr762='$arr162',arr763='$arr163',arr764='$arr164',arr765='$arr165',arr766='$arr166',arr767='$arr167',arr768='$arr168',arr769='$arr169',arr770='$arr170',arr771='$arr171',arr772='$arr172',arr773='$arr173',arr774='$arr174',arr775='$arr175',arr776='$arr176' WHERE id='$Editroll'";

if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">
            alert('".$Editroll."  Fourth Year Details have been Updated ')
    window.location.href='EditDetailsMain.php'
            </script>";
   
}
else 
{

   echo "<script type=\"text/javascript\">
            alert('".$Editroll."  Fourth Year Details have been not Updated Please Contact Developers')
window.location.href='EditDetailsMain.php'
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
              window.location.href = "EditDetailsMain.php";
             
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
        
              window.location.href = 'EditDetailsMain.php'
             
       }
       else
       {
       alert('hell')
       }
            </script>";


?>
















