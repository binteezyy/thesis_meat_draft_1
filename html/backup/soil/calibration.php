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

<a href="imagescanner.php">Back to Main </a>



</td>

<td>
<input type="button" value="   Start Process Images   " onClick="window.location.reload()">

</td>





<td width="250">  Calibtration Data  </td>
</tr>
<tr>

<td>






<table align="center">


	 <iframe  frameBorder="0" sandbox="" class="lockframe" width="250" height="350"  src="color.php">


</iframe> 
</table>










</td>
<td><img   id="myImage"  src="images/test.jpg" alt="test image" />
</td>
<td>



<table align="center">


<?php
$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);
?>

<table border="1" align="center" >
	 <iframe  frameBorder="0" sandbox="" class="lockframe" width="250" height="350"  src="color.php">


</iframe> 


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
