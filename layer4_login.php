<?php

session_start();

ob_start();

?>

<html>

<head>



<script>

function changeIt(img)

{

var name = img.src;

window.location.href = "layer5_login.php?var=" + name;

}

</script>







<title>

Layer 4!

</title>

</head>

<?php

echo '<body bgcolor="#333333" text="#FFFFFF" marginwidth="45"> <br><center><b><font face="calibri" color="red"
                 size=8>Three-</font><font face="calibri" size ="8">Level Password Authentication System</font></b></center>

<a href="logout.php"><font color="white">Quit</font></a><hr color="#CC0000">

<center><h4>Image Layer 4/5<br><i>Selecting any image will redirect you the next layer !<br><br>

Choose your Image ::<br><br>';



            $var=$_GET['var'];

			$_SESSION['a'][8]=$_GET['var'];

			$_SESSION['layer3']=$_GET['var'];

			

$ar[0]="wood.";

$ar[1]="edu.";

$ar[2]="bit.";

$ar[3]="two.";

$ar[4]="virus.";

shuffle($ar);



echo '<center>';

for($i=0;$i<=4;$i++)

echo '<img src="images\\'.$ar[$i].'jpg" onclick="changeIt(this)" height="120" width="120"> ';

echo '</center>

</body>';

echo '<footer><br><br><br><i><p align="right">refer for more <a href="https://www.phpcable.com" target="_black"><font color="white">info</font></a> </a></i></footer>';
?>


</body>

</html>
