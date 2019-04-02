<?php
error_reporting(0);
session_start();

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
		form, div#wrap {border: none; margin: 10px;  text-align: center; position: center; width: 40px;}
		fieldset {padding: 10px; border: solid #999 2px;}
		img {width: 320px; height: 240px;}
		table {border: solid #000 1px; border-collapse: collapse;}
		td { text-align: center; border: solid #000 1px; padding: 1px 1px; white-space: }
		br {width: 400px; height: 1px; clear: both; }
	</style>

	
	
</head>
<body align="center">

<div align="center">






<table align="center">
<tbody>
<tr>

<td>

<a href="index.php">Back to Main </a>



</td>





</tr>
<tr>

	  <?php
	  include('db_con.php');
	  $sql="select * from data ORDER BY soilnumber DESC";
	  $row=mysql_query($sql) or die (mysql_error($con));
	  ?><table border="1">
	  
	  	    <td width="40px">Reference</td>

	  <td width="40px">N</td>
	    <td width="40px">P</td>
		  <td width="40px">K</td>
		  
		    <td width="100px">   Action  </td>
	  <?php

	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
	  <td width="40px"><?php echo $data[soilnumber]; ?></td>
	  
	  <?php
	  
	  
	    $datanref= $data[nref];
	   $datapref= $data[pref];
	   $datakref= $data[kref];
	
	   
	   
	  ?>
	
	  
	  
	  <td width="40px"> <?php echo $datanref; ?>  </td>
	  <td width="40px"><?php echo $datapref; ?> </td>
	  <td width="40px"><?php echo $datakref; ?> </td>

	  
	  
	  

	  <td>  
	<script> var p1 = "success"; </script>

	    <a href="save.php?id=<?php echo $data[soilnumber]; ?>"> Edit </a>  / 
	

	 
	 <a href="delete.php?id=<?php echo $data[soilnumber]; ?>" > Delete </a></td>
	  </tr>  

	  <?php
	  }
	  
	
	  ?>	 



<td>






<table align="center">



</table>










</td>
<td>

</td>
<td>



<table align="center">


<?php
$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);
?>

<table border="1" align="center" >
	

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
