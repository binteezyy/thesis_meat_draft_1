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
		td {border: solid #000 1px; padding: 1px 1px; white-space: }
		br {width: 400px; height: 1px; clear: both; }
	</style>

	
	
</head>
<body align="center">

<div align="center">






<table align="center">
<tbody>
<tr>
<td>&nbsp;</td>
<td>
<a href="calibration.php" >Calibration</a>  /   
<a href="addplant.php">Add Plants</a>




</td>

<td>
<input type="button" value="   Start Process Images   " onClick="window.location.reload()">

</td>

<td>Total Number of Color Detected: <?php echo " "+(($num_results > 0)?($num_results+1):22500);?></td>




<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>






<table>


<?php
$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);
?>

<tr><td>Color</td><td>Red</td><td>Green</td><td>Blue</td><td>Percentage</td>



</td></tr>
<?php
foreach ( $colors as $hex => $count )
{
	if ( $count > 0 )
	{$count=$count*100;

$count=number_format($count, 2, '.', '');
        $red = hexdec(substr($hex,0,2));
          $green=hexdec(substr($hex,2,2));
          $blue = hexdec(substr($hex,4,2));
    


		echo "<tr><td style=\"background-color:#".$hex.";\"></td><td>". $red."</td><td>". $green."</td><td>". $blue."</td><td>$count</td></tr>";
		
		
		
		
	}
}
?>


</table>










</td>
<td><img   id="myImage"  src="images/test.jpg" alt="test image" />
</td>
<td>



<table>


<?php
$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);
?>


<table border="1">
	  	    <td width="40px"><?php echo "Name" ?></td>
	  <td width="40px"><?php echo "chem1" ?></td>
	  <td width="40px"><?php echo "chem2" ?></td>
	  <td width="40px"><?php echo "chem3" ?></td>

</td></tr>
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
	  <td width="40px"><?php echo $data[name]; ?></td>
	  <td width="40px"><?php echo $data[chem1]; ?></td>
	  <td width="40px"><?php echo $data[chem2]; ?></td>
	  <td width="40px"><?php echo $data[chem3]; ?></td>


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
