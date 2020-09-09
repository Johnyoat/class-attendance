<?php 
$msg = '';
include 'tconslocal.php';
$msg = 'Teacher';
$sql="SELECT DISTINCT nomz from tableteachers";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
echo '<option selected="selected"></option>';
 while($row = $result->fetch_assoc()) 
 {


 	 echo '<option>'.$row['nomz'].'</option>';
 	
}

}


 ?>