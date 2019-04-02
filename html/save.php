
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
$d1=$_POST['chem1'];
$d2=$_POST['chem2'];
$d3=$_POST['chem3'];


$s1="UPDATE data set nref='".$d1."',pref='".$d2."',kref='".$d3."' where soilnumber='".$id."'";
mysql_query($s1) or die (mysql_error($con));

header("location: save.php?s=Recorded");
}

?>



<tr>



<td>



<table  >
 <?php 
 include('db_con.php');
 session_start();
      $id=$_GET['id'];

	  $sql="select * from data where soilnumber='".$id."'";
	  $row=mysql_query($sql) or die (mysql_error($con));
  while($data=mysql_fetch_array($row))
	  {
	     $s1= $data[soilnumber]; 
	 	 $s2= $data[nref];
	  	 $s3= $data[pref];
	 	 $s4= $data[kref]; 

	  }
	  
	  	 
	 if (empty($_GET)) {
header("location: calibration.php");
}

	  ?>

 <form method="POST" action="save.php"  >

  <tr>
  
  <td>Reference </td>  <td>      <input name="id"  size="10" value=<?php echo $s1;?>  ></td>
</tr>



  <tr>
  
  <td>N % </td>  <td>      <input name="chem1" type="text " size="10"  value=<?php echo $s2;?>  ></td>
</tr>
  <tr>
  
  <td>P % </td>  <td>      <input name="chem2" type="text " size="10"  value=<?php echo $s3;?>  ></td>
</tr>
  <tr>
  
  <td>K % </td>  <td>      <input name="chem3" type="text " size="10"  value=<?php echo $s4;?> ></td>
</tr>


<input type="submit" name="sub" value=" Save " >
</form>
 <form method="POST" action="calibration.php" >
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
