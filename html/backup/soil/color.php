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



<table>


<?php

$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);

?>

<tr><td width="50px">Color</td><td width="90px">color</td><td width="50px">%</td>



</td></tr>
<?php
foreach ( $colors as $hex => $count )
{
	if ( $count > 0 )
	{$count=$count*100;
//<tr><td width="50px">Color</td><td width="70px">color</td><td width="30px">G</td><td width="30px">B</td><td width="50px">%</td>

$count=number_format($count, 2, '.', '');
    //    $red = hexdec(substr($hex,0,2));
    //      $green=hexdec(substr($hex,2,2));
    //      $blue = hexdec(substr($hex,4,2));
    $red = hexdec($hex);
//if ($red>
//if ($red>

		echo "<tr><td style=\"background-color:#".$hex.";\"></td><td>". $red."</td><td>$count</td></tr>";
	//		echo "<tr><td style=\"background-color:#".$hex.";\"></td><td>". $red."</td><td>". $green."</td><td>". $blue."</td><td>$count</td></tr>";
		
		
		
		
		
	}
}
?>


</table>










</td>
<td>
</td>
<td>



<table>


<?php
$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);
?>



</table>










</tbody>
</table>




</div>
</body>
</html>
