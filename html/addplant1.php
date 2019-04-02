<?php
$delta = 24;
$reduce_brightness = true;
$reduce_gradients = true;
$num_results = 20;

include_once("colors.inc.php");
$ex=new GetMostCommonColors();
$colors=$ex->Get_Color("test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Image Color Extraction</title>
	<style type="text/css">
		* {margin: 0; padding: 0}
		body {text-align: center; }
		form, div#wrap {border: none; margin: 10px;  text-align: center; position: center; align:center; width: 40px;}
		fieldset {padding: 10px; border: solid #999 2px;}
		img {width: 320px; height: 240px;}
		table { align:center; border: solid #000 1px; border-collapse: collapse;}
		td {border: solid #000 1px; padding: 2px 5px; white-space: }
		br {width: 400px; height: 1px; clear: both; }
	</style>

	
	
</head>
</head>



<body align="center">




<div align="center">






<table >
<tbody>
<?php

include('db_con.php');
session_start();
if(isset($_POST['sub']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$chem1=$_POST['chem1'];
$chem2=$_POST['chem2'];
$chem3=$_POST['chem3'];
$chem4=$_POST['chem4'];
$chem5=$_POST['chem5'];
$chem6=$_POST['chem6'];
 
$s1="INSERT INTO plants(name,chem1,chem2,chem3,chem4,chem5,chem6)VALUES('".$name."','".$chem1."','".$chem2."','".$chem3."','".$chem4."','".$chem5."','".$chem6."')";

mysql_query($s1) or die (mysql_error($con));
header("location: addplant.php?s=Added  ");
}

?>



<tr>



<td>



<table  >

 <form method="POST" action="addplant1.php"  >

  <tr>
  
  <td>Name of plant </td>  <td>      <input name="name" type="text " size="10"  /></td>
</tr>

  <tr>
  
  <td>N (U) </td>  <td>      <input name="chem1" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>N (L) </td>  <td>      <input name="chem2" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>P (U) </td>  <td>      <input name="chem3" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>P (L) </td>  <td>      <input name="chem4" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>K (U) </td>  <td>      <input name="chem5" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>K (L) </td>  <td>      <input name="chem6" type="text " size="10"  /></td>
</tr>

<input type="submit" name="sub" value=" Save " >
</form>
 <form method="POST" action="addplant.php" >
<input type="submit" value=" Exit ">
</form>


</table>




</td>



</tr>

</tbody>
</table>
<!-- DivTable.com -->















<br />
</div>
</body>
</html>
