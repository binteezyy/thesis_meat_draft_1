<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>
 
	  <h1>Welcome Researcher</h1>
	
	  <?php
	  include('db_con.php');
	  $sql="select * from data ORDER BY soilnumber DESC";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?><table border="1">
	  
	  	    <td width="40px"><?php echo "Data" ?></td>
	  <td width="40px"><?php echo "Red" ?></td>
	  <td width="40px"><?php echo "Green" ?></td>
	  <td width="40px"><?php echo "Blue" ?></td>
	  <td width="400px"><?php echo "Note" ?></td>
	  <?php

	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
	  <td width="40px"><?php echo $data[soilnumber]; ?></td>
	  <td width="40px"><?php echo $data[red]; ?></td>
	  <td width="40px"><?php echo $data[green]; ?></td>
	  <td width="40px"><?php echo $data[blue]; ?></td>
	  <td width="400px"><?php echo $data[note]; ?></td>

	  <td><a href="update.php?id=<?php echo $data[id]; ?>">update</a></td>
	  <td><a href="delete.php?id=<?php echo $data[id]; ?>">delete</a></td>
	  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>
	  
	  </div>
</body>
</html>
