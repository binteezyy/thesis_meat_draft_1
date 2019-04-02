<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- <Meta HTTP-EQUIV="Refresh" Content="10; URL=http://localhost/g2/gamemulti1.php"> -->
 <Meta HTTP-EQUIV="Refresh" Content="1; URL=/soil/researcher.php">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<style type="text/css">
		* {margin: 0; padding: 0}
td { text-align: center; border: solid #000 1px; padding: 1px 1px; white-space: }
	</style>

<title>Researchers Data</title></head>

<body align="center">
 <div align="center">

	  <?php
	  include('db_con.php');
	  $sql="select * from data ORDER BY soilnumber DESC";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?><table border="1">
	  
	  	    <td width="40px"><?php echo "Data" ?></td>
	  <td width="40px"><?php echo "N" ?></td>
	  <td width="40px"><?php echo "P" ?></td>
	  <td width="40px"><?php echo "K" ?></td>
	
	  <?php

	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
	  <td width="40px"><?php echo $data[soilnumber]; ?></td>
	  <td width="40px"><?php echo $data[n1]; ?></td>
	  <td width="40px"><?php echo $data[p1]; ?></td>
	  <td width="40px"><?php echo $data[k1]; ?></td>


	  <td><a href="delete.php?id=<?php echo $data[soilnumber]; ?>">delete</a></td>
	  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>
	  
	  </div>
	   </div >
</body>
</html>
