<?php 
$msg = '';
include 'tconslocal.php';
$sql="SELECT DISTINCT catz from progz";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
echo '<option selected="selected"></option>';
 while($row = $result->fetch_assoc()) 
 {


 	 echo '<option>'.$row['catz'].'</option>';
 	
}

}


 ?>