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
<tr>



<td>



<table  >

 <form action="imagescanner.php" method="POST"  >
<input type="submit"  value=" BACK TO MAIN " >
</form>
 <form  action="addplant1.php" method="POST">
<input type="submit"  value=" Add Plants ">
</form>




<table border="1"  >
	  	    <td width="40px"><?php echo "Name" ?></td>
	  <td width="20px"><?php echo "N (U)" ?></td>
	  <td width="20px"><?php echo "N (L)" ?></td>
	  <td width="20px"><?php echo "P (U)" ?></td>
      <td width="20px"><?php echo "P (L)" ?></td>
	  <td width="20px"><?php echo "K (U)" ?></td>
	  <td width="20px"><?php echo "K (L)" ?></td>
 <?php
	  include('db_con.php');
	  $sql="select * from plants ";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?>
	  
 

	  <?php

	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
	  <td ><?php echo $data[name]; ?></td>
	  <td ><?php echo $data[chem1]; ?></td>
	  <td ><?php echo $data[chem2]; ?></td>
	  <td ><?php echo $data[chem3]; ?></td>
      <td ><?php echo $data[chem4]; ?></td>
	  <td ><?php echo $data[chem5]; ?></td>
	  <td ><?php echo $data[chem6]; ?></td>


	  <td><a href="update.php?id=<?php echo $data[plantnumber]; ?>">Update</a></td>
	  <td><a href="delete1.php?id=<?php echo $data[plantnumber]; ?>">Delete</a></td>
	  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>


</table>







</td>



</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<!-- DivTable.com -->















<br />
</div>
</body>
</html>
