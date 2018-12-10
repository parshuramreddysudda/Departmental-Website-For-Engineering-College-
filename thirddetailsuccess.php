<?php
   
include'config.php';
    
//Getting values from previous page 

$roll=$_SESSION["rollsession"];
$sname=$_SESSION["sname"];
$fname=$_SESSION["fname"];
$year=$_SESSION["year"];

$arr1 = $_POST['arr401'];
$arr2 = $_POST['arr402'];
$arr3 = $_POST['arr403'];
$arr4 = $_POST['arr404'];
$arr5 = $_POST['arr405'];
$arr6 = $_POST['arr406'];
$arr7 = $_POST['arr407'];
$arr8 = $_POST['arr408'];
$arr9 = $_POST['arr409'];
$arr10 = $_POST['arr410'];
$arr11 = $_POST['arr411'];
$arr12 = $_POST['arr412'];
$arr13 = $_POST['arr413'];
$arr14 = $_POST['arr414'];
$arr15 = $_POST['arr415'];
$arr16 = $_POST['arr416'];
$arr17 = $_POST['arr417'];
$arr18 = $_POST['arr418'];
$arr19 = $_POST['arr419'];
$arr20 = $_POST['arr420'];
$arr21 = $_POST['arr421'];
$arr22 = $_POST['arr422'];
$arr23 = $_POST['arr423'];
$arr24 = $_POST['arr424'];
$arr25 = $_POST['arr425'];
$arr26 = $_POST['arr426'];
$arr27 = $_POST['arr427'];
$arr28 = $_POST['arr428'];
$arr29 = $_POST['arr429'];
$arr30 = $_POST['arr430'];
$arr31 = $_POST['arr431'];
$arr32 = $_POST['arr432'];
$arr33 = $_POST['arr433'];
$arr34 = $_POST['arr434'];
$arr35 = $_POST['arr435'];
$arr36 = $_POST['arr436'];
$arr37 = $_POST['arr437'];
$arr38 = $_POST['arr438'];
$arr39 = $_POST['arr439'];
$arr40 = $_POST['arr440'];
$arr41 = $_POST['arr441'];
$arr42 = $_POST['arr442'];
$arr43 = $_POST['arr443'];
$arr44 = $_POST['arr444'];
$arr45 = $_POST['arr445'];
$arr46 = $_POST['arr446'];
$arr47 = $_POST['arr447'];
$arr48 = $_POST['arr448'];
$arr49 = $_POST['arr449'];
$arr50 = $_POST['arr450'];
$arr51 = $_POST['arr451'];
$arr52 = $_POST['arr452'];
$arr53 = $_POST['arr453'];
$arr54 = $_POST['arr454'];
$arr55 = $_POST['arr455'];
$arr56 = $_POST['arr456'];
$arr57 = $_POST['arr457'];
$arr58 = $_POST['arr458'];
$arr59 = $_POST['arr459'];
$arr60 = $_POST['arr460'];
$arr61 = $_POST['arr461'];
$arr62 = $_POST['arr462'];
$arr63 = $_POST['arr463'];
$arr64 = $_POST['arr464'];
$arr65 = $_POST['arr465'];
$arr66 = $_POST['arr466'];
$arr67 = $_POST['arr467'];
$arr68 = $_POST['arr468'];
$arr69 = $_POST['arr469'];
$arr70 = $_POST['arr470'];
$arr71 = $_POST['arr471'];
$arr72 = $_POST['arr472'];
$arr73 = $_POST['arr473'];
$arr74 = $_POST['arr474'];
$arr75 = $_POST['arr475'];
$arr76 = $_POST['arr476'];
$arr77 = $_POST['arr477'];
$arr78 = $_POST['arr478'];
$arr79 = $_POST['arr479'];
$arr80 = $_POST['arr480'];
$arr81 = $_POST['arr481'];
$arr82 = $_POST['arr482'];
$arr83 = $_POST['arr483'];
$arr84 = $_POST['arr484'];
$arr85 = $_POST['arr485'];
$arr86 = $_POST['arr486'];
$arr87 = $_POST['arr487'];
$arr88 = $_POST['arr488'];
$arr89 = $_POST['arr489'];
$arr90 = $_POST['arr490'];
$arr91 = $_POST['arr491'];
$arr92 = $_POST['arr492'];
$arr93 = $_POST['arr493'];
$arr94 = $_POST['arr494'];
$arr95 = $_POST['arr495'];
$arr96 = $_POST['arr496'];
$arr97 = $_POST['arr497'];
$arr98 = $_POST['arr498'];
$arr99 = $_POST['arr499'];
$arr100 = $_POST['arr500'];
$arr101 = $_POST['arr501'];
$arr102 = $_POST['arr502'];
$arr103 = $_POST['arr503'];
$arr104 = $_POST['arr504'];
$arr105 = $_POST['arr505'];
$arr106 = $_POST['arr506'];
$arr107 = $_POST['arr507'];
$arr108 = $_POST['arr508'];
$arr109 = $_POST['arr509'];
$arr110 = $_POST['arr510'];
$arr111 = $_POST['arr511'];
$arr112 = $_POST['arr512'];
$arr113 = $_POST['arr513'];
$arr114 = $_POST['arr514'];
$arr115 = $_POST['arr515'];
$arr116 = $_POST['arr516'];
$arr117 = $_POST['arr517'];
$arr118 = $_POST['arr518'];
$arr119 = $_POST['arr519'];
$arr120 = $_POST['arr520'];
$arr121 = $_POST['arr521'];
$arr122 = $_POST['arr522'];
$arr123 = $_POST['arr523'];
$arr124 = $_POST['arr524'];
$arr125 = $_POST['arr525'];
$arr126 = $_POST['arr526'];
$arr127 = $_POST['arr527'];
$arr128 = $_POST['arr528'];
$arr129 = $_POST['arr529'];
$arr130 = $_POST['arr530'];
$arr131 = $_POST['arr531'];
$arr132 = $_POST['arr532'];
$arr133 = $_POST['arr533'];
$arr134 = $_POST['arr534'];
$arr135 = $_POST['arr535'];
$arr136 = $_POST['arr536'];
$arr137 = $_POST['arr537'];
$arr138 = $_POST['arr538'];
$arr139 = $_POST['arr539'];
$arr140 = $_POST['arr540'];
$arr141 = $_POST['arr541'];
$arr142 = $_POST['arr542'];
$arr143 = $_POST['arr543'];
$arr144 = $_POST['arr544'];
$arr145 = $_POST['arr545'];
$arr146 = $_POST['arr546'];
$arr147 = $_POST['arr547'];
$arr148 = $_POST['arr548'];
$arr149 = $_POST['arr549'];
$arr150 = $_POST['arr550'];
$arr151 = $_POST['arr551'];
$arr152 = $_POST['arr552'];
$arr153 = $_POST['arr553'];
$arr154 = $_POST['arr554'];
$arr155 = $_POST['arr555'];
$arr156 = $_POST['arr556'];
$arr157 = $_POST['arr557'];
$arr158 = $_POST['arr558'];
$arr159 = $_POST['arr559'];
$arr160 = $_POST['arr560'];
$arr161 = $_POST['arr561'];
$arr162 = $_POST['arr562'];
$arr163 = $_POST['arr563'];
$arr164 = $_POST['arr564'];
$arr165 = $_POST['arr565'];
$arr166 = $_POST['arr566'];
$arr167 = $_POST['arr567'];
$arr168 = $_POST['arr568'];
$arr169 = $_POST['arr569'];
$arr170 = $_POST['arr570'];
$arr171 = $_POST['arr571'];
$arr172 = $_POST['arr572'];
$arr173 = $_POST['arr573'];
$arr174 = $_POST['arr574'];
$arr175 = $_POST['arr575'];
$arr176 = $_POST['arr576'];



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO thirdyear (id,arr401,arr402,arr403,arr404,arr405,arr406,arr407,arr408,arr409,arr410,arr411,arr412,arr413,arr414,arr415,arr416,arr417,arr418,arr419,arr420,arr421,arr422,arr423,arr424,arr425,arr426,arr427,arr428,arr429,arr430,arr431,arr432,arr433,arr434,arr435,arr436,arr437,arr438,arr439,arr440,arr441,arr442,arr443,arr444,arr445,arr446,arr447,arr448,arr449,arr450,arr451,arr452,arr453,arr454,arr455,arr456,arr457,arr458,arr459,arr460,arr461,arr462,arr463,arr464,arr465,arr466,arr467,arr468,arr469,arr470,arr471,arr472,arr473,arr474,arr475,arr476,arr477,arr478,arr479,arr480,arr481,arr482,arr483,arr484,arr485,arr486,arr487,arr488,arr489,arr490,arr491,arr492,arr493,arr494,arr495,arr496,arr497,arr498,arr499,arr500,arr501,arr502,arr503,arr504,arr505,arr506,arr507,arr508,arr509,arr510,arr511,arr512,arr513,arr514,arr515,arr516,arr517,arr518,arr519,arr520,arr521,arr522,arr523,arr524,arr525,arr526,arr527,arr528,arr529,arr530,arr531,arr532,arr533,arr534,arr535,arr536,arr537,arr538,arr539,arr540,arr541,arr542,arr543,arr544,arr545,arr546,arr547,arr548,arr549,arr550,arr551,arr552,arr553,arr554,arr555,arr556,arr557,arr558,arr559,arr560,arr561,arr562,arr563,arr564,arr565,arr566,arr567,arr568,arr569,arr570,arr571,arr572,arr573,arr574,arr575,arr576)
VALUES ('$roll','$arr1','$arr2','$arr3','$arr4','$arr5','$arr6','$arr7','$arr8','$arr9','$arr10','$arr11','$arr12','$arr13','$arr14','$arr15','$arr16','$arr17','$arr18','$arr19','$arr20','$arr21','$arr22','$arr23','$arr24','$arr25','$arr26','$arr27','$arr28','$arr29','$arr30','$arr31','$arr32','$arr33','$arr34','$arr35','$arr36','$arr37','$arr38','$arr39','$arr40','$arr41','$arr42','$arr43','$arr44','$arr45','$arr46','$arr47','$arr48','$arr49','$arr50','$arr51','$arr52','$arr53','$arr54','$arr55','$arr56','$arr57','$arr58','$arr59','$arr60','$arr61','$arr62','$arr63','$arr64','$arr65','$arr66','$arr67','$arr68','$arr69','$arr70','$arr71','$arr72','$arr73','$arr74','$arr75','$arr76','$arr77','$arr78','$arr79','$arr80','$arr81','$arr82','$arr83','$arr84','$arr85','$arr86','$arr87','$arr88','$arr89','$arr90','$arr91','$arr92','$arr93','$arr94','$arr95','$arr96','$arr97','$arr98','$arr99','$arr100','$arr101','$arr102','$arr103','$arr104','$arr105','$arr106','$arr107','$arr108','$arr109','$arr110','$arr111','$arr112','$arr113','$arr114','$arr115','$arr116','$arr117','$arr118','$arr119','$arr120','$arr121','$arr122','$arr123','$arr124','$arr125','$arr126','$arr127','$arr128','$arr129','$arr130','$arr131','$arr132','$arr133','$arr134','$arr135','$arr136','$arr137','$arr138','$arr139','$arr140','$arr141','$arr142','$arr143','$arr144','$arr145','$arr146','$arr147','$arr148','$arr149','$arr150','$arr151','$arr152','$arr153','$arr154','$arr155','$arr156','$arr157','$arr158','$arr159','$arr160','$arr161','$arr162','$arr163','$arr164','$arr165','$arr166','$arr167','$arr168','$arr169','$arr170','$arr171','$arr172','$arr173','$arr174','$arr175','$arr176')";

if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">
            alert('".$roll."  Third Year Details have been Added and can be edited in Editdetails page')
     window.location.href='addDetails.php'
            </script>";
   
}
else 
{
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   echo "<script type=\"text/javascript\">
            alert('".$roll."  Third Year Details have been Updated already Please edit them in Edit Page')
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
















