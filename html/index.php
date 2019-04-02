<?php
error_reporting(0);
session_start();
$refcolor=11000000;
$delta = 24;
$reduce_brightness = true;
$reduce_gradients = true;
$num_results = 20;

include_once("colors.inc.php");
$ex=new GetMostCommonColors();
$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);


?>

<?php $ret = file_put_contents('cmd.txt','0');
		
?>
<script src="jquery.min.js"></script>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Image Color Extraction</title>
	<style type="text/css">
		* {margin: 0; padding: 0}
		body {text-align: center;}
		form, div#wrap {border: none; margin: 0px;  text-align: center; position: center; width: 40px;}
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
 <script>
 

var counter=0;



jQuery().ready(function(){
    setInterval("getResult()",500); //set theinterval for the update

});
function getResult(){  



    jQuery.post("updategas.php",function(myfilename0) {
		$("#loc").html(myfilename0);});
	


}







</script>

	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>




<tr>

<td>





<table align="center">

</table>












<table border="1"align="center">



<td>RESULTS </td><td width="30px"><?php


error_reporting(0);












$colorcount=0;
$data1=0;
$data2=0;
$data3=0;
$data4=0;
$data5=0;
$data6=0;
$data7=0;
$data8=0;
$data9=0;
$data10=0;
$data11=0;
$data12=0;
$data13=0;
$data14=0;
$data15=0;
$data16=0;
$data17=0;
$data18=0;
$data19=0;
$data20=0;

if(!isset($_POST['sub']))
{
		///////////////////////process 
	


$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);

foreach ( $colors as $hex => $count )
{$colorcount=$colorcount+1;

if ( $colorcount <21 )
	{

	$count=$count*100;

$count=number_format($count,4, '.', '');
 $red = hexdec($hex);
 	echo "<tr><td style=\"background-color:#".$hex.";\"></td><td>". $red."</td><td>". $count."</td></tr>";
		
 

	}
	}

	
	
}

/*
echo $data1."/";
echo $data2."/";
echo $data3."/";
echo $data4."/";
*/

$gender=0;

if ($data1>$refcolor){$gender=$gender+1;}
if ($data2>$refcolor){$gender=$gender+1;}
if ($data3>$refcolor){$gender=$gender+1;}
if ($data4>$refcolor){$gender=$gender+1;}
if ($data5>$refcolor){$gender=$gender+1;}
if ($data6>$refcolor){$gender=$gender+1;}
if ($data8>$refcolor){$gender=$gender+1;}
if ($data9>$refcolor){$gender=$gender+1;}
if ($data10>$refcolor){$gender=$gender+1;}
if ($data11>$refcolor){$gender=$gender+1;}
if ($data12>$refcolor){$gender=$gender+1;}
if ($data13>$refcolor){$gender=$gender+1;}
if ($data14>$refcolor){$gender=$gender+1;}
if ($data15>$refcolor){$gender=$gender+1;}
if ($data16>$refcolor){$gender=$gender+1;}

$gender1=$gender;

if ($gender1>1){$gender="FEMALE";}

if ($gender1<2){$gender="MALE";}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////formula//////////////////////////////////////////////////////////////////





	  
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////




	
	
	
	
	
?></td>

<td>
<img src="images/test.jpg" alt="test image" />

</td>
Gas:<a id="loc"> 
  </table>
	<p>&nbsp;</p>



<?php
$colors=$ex->Get_Color("images/test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);
?>






</td>









</tr>



</tbody>
</table>
<!-- DivTable.com -->

<?php if(isset($_POST['sub'])){header("location: imagescanner.php");} ?>





<br />
</div>
</body>
</html>
