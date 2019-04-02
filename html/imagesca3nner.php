<?php
error_reporting(0);
session_start();

$delta = 24;
$reduce_brightness = true;
$reduce_gradients = true;
$num_results = 0;

include_once("colors.inc.php");
$ex=new GetMostCommonColors();
$colors=$ex->Get_Color("test.jpg", $num_results, $reduce_brightness, $reduce_gradients, $delta);

$N1=20;
$P1=20;
$K1=20;



?>
<script src="jquery.min.js"></script>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Image Color Extraction</title>
	<style type="text/css">
		* {margin: 0; padding: 0}
		body {text-align: center; }
		form, div#wrap {border: none; margin: 0px;  text-align: center; position: center; width: 40px;}
		fieldset {padding: 10px; border: solid #999 2px;}
		img {width: 320px; height: 240px;}
		table {border: solid #000 1px; border-collapse: collapse;}
		td { text-align: center; border: solid #000 1px; padding: 1px 1px; white-space: }
		br {width: 400px; height: 1px; clear: both; }
	</style>

	
	
</head>
<body align="center">
 <script>
 

var counter=0;

jQuery().ready(function(){
    setInterval("getResult()",500); //set theinterval for the update
});
function getResult(){  

    jQuery.post("updatemoisture.php",function(myfilename1) {

	   
 $("#moisture").html(myfilename1);

	 

	
    });
}




</script>
<div align="center">






<table align="center">
<tbody>
<tr>

<td>
<a href="calibration.php" >Calibration</a>  /   
<a href="addplant.php"> Plants</a> / 
<a href="rgb.php"> Reference</a>



</td>




<td>
     	<form action="imagescanner.php" method="POST">
       
     
<input type="submit" name="sub" method="POST" value="   Start Process Images   " onClick="window.location.reload()">
</form>
</td>





<td>

<?php


if(isset($_POST['sub']))
{
	$num=0;
$ref=0;
	  include('db_con.php');
	  $sql="select * from data";
	  $row=mysql_query($sql) or die (mysql_error($con));
while($data=mysql_fetch_array($row))
	  {
$num=$num+1;

	 $ref= $data[soilnumber];
	  } 
	echo "Reference: ";
	 if ($num<1)
		 
	  {
	// insert data
	 
$s1="INSERT INTO data(n1,k1,p1)VALUES('0','0','0')";

mysql_query($s1) or die (mysql_error($con));
header("location: imagescanner.php");
	
	  }
	  else
	  {
		  echo $ref+1;
		  
	  }
	
	
	
	
	
	
	
	
	
}

else
	
	{
		
	$num=0;
$ref=0;
	  include('db_con.php');
	  $sql="select * from data";
	  $row=mysql_query($sql) or die (mysql_error($con));
while($data=mysql_fetch_array($row))
	  {
$num=$num+1;

	 $ref= $data[soilnumber];
	  } 
	echo "Reference: ";
	 if ($num<1)
		 
	  {
		// insert data
	 
$s1="INSERT INTO data(n1,k1,p1)VALUES('0','0','0')";

mysql_query($s1) or die (mysql_error($con));
header("location: imagescanner.php");
	  }
	  else
	  {
		  echo $ref+1;
		  
	  }	
		
		
		
	}

?>



</td>
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

<table border="1"align="center">
<td>Color(s) Detected: </td><td width="30px"><?php echo " "+(($num_results > 0)?($num_results+1):22500);?></td>
<tr>
<td>Soil Moisture: </td><td width="30px" ><a id="moisture"></a></td>


</tr>
  </table>
	<p>&nbsp;</p>

<table border="1"align="center">

<tr>
	  <td width="50px">N</td>
	  <td width="50px">P</td>
	  <td width="50px">K</td>
	</tr>
	  <tr>
      <td width="50px"><a id="totaln"><?php echo $N1; ?></a></td>
	  <td width="50px"><a id="totalp"><?php echo $P1; ?></a></td>
	  <td width="50px"><a id="totalk"><?php echo $K1; ?></a></td>
	
</tr>

	
	  </table>
	<p>&nbsp;</p>

<table border="1"align="center">
	  	    <td width="40px">Plant</td>
	  <td width="40px">N</td>
	  <td width="40px">P</td>
	  <td width="40px">K</td>

</td></tr>
 <?php
	  include('db_con.php');
	  $sql="select * from plants ";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?>
	  


	  <?php

	  while($data=mysql_fetch_array($row))
	  {
		  
		$NU=$data[chem1]; 
	    $NL=$data[chem2]; 
	    $PU=$data[chem3];
	  	$PL=$data[chem4]; 
	    $KU=$data[chem5]; 
	    $KL=$data[chem6];
		///////////////////////////////////////////////////
		////N
		  if ((($N1+1)<$NU)&&(($N1-1)>$NL))
		  {
		$n1out="ok";  
		  }
		  else
		  {$a1=	$N1-$NU;
	
	  $a2=	$N1-$NL;
	
	  
	  //cases
	  // a1=-1 a2=-30
	  // a1=8 a2=17

	  
	  if ($a1<0)
	  {
		  
		$n1out=$a2;  
	  }
	   else 
	  {
		 $n1out=$a1;  
		  
		  }}
	  
	  ////////////////////////////////////////////////////
	  
	  		///////////////////////////////////////////////////
		////p
		  if ((($P1+1)<$PU)&&(($P1-1)>$PL))
		  {
		$p1out="ok";  
		  }
		  else
		  {$b1=	$N1-$NU;
	
	  $b2=	$P1-$PL;
	
	  
	  //cases
	  // a1=-1 a2=-30
	  // a1=8 a2=17

	  
	  if ($b1<0)
	  {
		  
		$p1out=$b2;  
	  }
	   else 
	  {
		 $p1out=$b1;  
		  
		  }}
	  
	  ////////////////////////////////////////////////////
	  	  		///////////////////////////////////////////////////
		////k
		  if ((($K1+1)<$KU)&&(($K1-1)>$KL))
		  {
		$k1out="ok";  
		  }
		  else
		  {$c1=	$K1-$KU;
	
	  $c2=	$K1-$KL;
	
	  
	  //cases
	  // a1=-1 a2=-30
	  // a1=8 a2=17

	  
	  if ($c1<0)
	  {
		  
		$k1out=$c2;  
	  }
	   else 
	  {
		 $k1out=$c1;  
		  
		  }}
	  
	  ////////////////////////////////////////////////////
	  
	  
		  
		  
		  
	  ?>
	  <tr>
	  <td width="40px"><?php echo $data[name]; ?></td>
	  <td width="40px"><?php echo $n1out; ?></td>
	  <td width="40px"><?php echo $p1out; ?></td>
	  <td width="40px"><?php echo $k1out; ?></td>


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

<?php
if(isset($_POST['sub']))
{
	
	  include('db_con.php');

$s1="INSERT INTO data(n1,k1,p1)VALUES('0','0','0')";
mysql_query($s1) or die (mysql_error($con));
header("location: imagescanner.php");
	
		
		
		
	}

?>












<br />
</div>
</body>
</html>
