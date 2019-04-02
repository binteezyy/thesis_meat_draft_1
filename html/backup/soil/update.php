<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>


     
</head>

<body>
<?php
 if(isset($_SESSION['id'])){ echo $_SESSION['id']; }
include('db_con.php');
session_start();
if(isset($_POST['sub']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$chem1=$_POST['chem1'];
$chem2=$_POST['chem2'];
$chem3=$_POST['chem3'];
$chem4=$_POST['chem4'];
$chem5=$_POST['chem5'];
$chem6=$_POST['chem6']; 

$s1="UPDATE plants set name='".$name."',chem1='".$chem1."',chem2='".$chem2."',chem3='".$chem3."',chem4='".$chem4."',chem5='".$chem5."',chem6='".$chem6."' where plantnumber='".$id."'";
mysql_query($s1) or die (mysql_error($con));
header("location: addplant.php?s=Updated  ");
}

?>

<div id="contenar">
<?php
if(isset($_GET['id']))
{
	
$id=$_GET['id'];
$getdata= "select * from plants where plantnumber='".$id."' ";
$row=mysql_query($getdata) or die (mysql_error($con));

	  while($data=mysql_fetch_array($row))
	  {
	$d1=$data[name];
	 $d2=$data[chem1];
	$d3= $data[chem2]; 
	 $d4=  $data[chem3];
	 $d5=  $data[chem4];
	 	 $d6=  $data[chem5];
		 	 $d7=  $data[chem6];
			 
	  }

}	

?>
	<div id="r">
	<h2 align="center" id="h"><u><i>Update Plant Data</i></u></h2>
	 <table align="center" >
	
      	<form action="update.php" method="POST">
       
     
 <input name="id"  type="hidden"  value="<?php if(isset($_GET['id'])){ echo $_GET['id']; }  ?>" /> 
          
        </td>
          </tr>
		  <tr>
		  		
		 
            <td>Name</td>
            <td>
                  <input name="name" type="text " size="10" value="<?php  echo $d1; ?>" /></td>
         </td>
          </tr>
		   <tr>
            <td>N(U)</td>
            <td>
               <input name="chem1" type="text " size="10" value="<?php  echo $d2; ?>" /></td>
          </tr>
		  <tr>
            <td>N(L) </td>
            <td>
                <input name="chem2" type="text " size="10" value="<?php  echo $d3; ?>" /></td>
        </tr>
		  <tr>
            <td>P(U)</td>
            <td>
			        <input name="chem3" type="text " size="10" value="<?php  echo $d4; ?>" /></td>
        
         </td>
		 </tr>
		  <tr>
		        <td>P(L)</td>
            <td>
               <input name="chem4" type="text " size="10" value="<?php  echo $d5; ?>" /></td>
          </tr>
		  <tr>
            <td>K(U) </td>
            <td>
                <input name="chem5" type="text " size="10" value="<?php  echo $d6; ?>" /></td>
        </tr>
		  <tr>
            <td>K(L)</td>
            <td>
			        <input name="chem6" type="text " size="10" value="<?php  echo $d7; ?>" /></td>
        
         </td>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
          </tr>
		  
          <tr>
            <td rowspan="1"colspan="1"  align="center">
				
				
				
		
		

			<input type="submit" name="sub" value="Update" /></td>
			     </form>
         
			       
			
				<form action="addplant.php" method="POST">
	  <td rowspan="2"colspan="1"  align="center">
            <input type="submit"  value="Cancel" /></td>
            </form>
			</tr>
		
       </table>
		</form>
		
	
		
	</div>
</div>
</body>
</html>