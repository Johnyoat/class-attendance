<?php
include 'tconslocal.php';
$msg = 'Teacher';
$emzs="";
$totattz=0;
$curattz=0;
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
$ucontz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucontz']));

  $catz="";
  $levelz="";
  $periodz="";
  $coursez="";
   $statz="Present";

$sql="SELECT * from studz where studidz = '$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
// output data of each row

    while($row = $result->fetch_assoc()) 
    {
      

?>
            <div class="box-body box-profile">

              <h3 class="profile-username text-center"><?php echo $row["studidz"]; ?></h3>

              <p id="studstuff" class="text-muted text-center" id="nam" name="nam"><?php echo $row["studz"]; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>PHONE</b> <a class="pull-right"><?php echo $row["phonz"]; ?></a>
                </li>
                <li class="list-group-item">
                  <b>PROGRAMME</b> <a class="pull-right"><?php echo $row["catz"]; ?></a>
                </li>
                 <li class="list-group-item">
                  <b>year group</b> <a class="pull-right"><?php echo $row["ygrup"]; ?></a>
                </li>
                  <li class="list-group-item">
                  <b>LEVEL</b> <a class="pull-right"><?php echo $row["studlev"]; ?></a>
                </li>
                  <li class="list-group-item">
                  <b>PERIOD</b> <a class="pull-right"><?php echo $row["studper"]; ?></a>
                </li>
                 <li class="list-group-item">
                  <b>COURSE</b> <a class="pull-right"><?php echo $ucontz; ?></a>
                </li>

                <li class="list-group-item">
                  <b>ATTENDANCE</b> <a class="pull-right">
                  <?php 

                  $catz=$row["catz"];
                  $levelz=$row["studlev"];
                  $periodz=$row["studper"];
                  $coursez=$ucontz;
                  

$sqlz="SELECT DISTINCT dateofatz from classattz where catz='$catz' AND levelz='$levelz' AND periodz='$periodz' AND coursez='$coursez'";
$resultd=mysqli_query($con,$sqlz);
if($resultd->num_rows>0)
{
    while($rowd = $resultd->fetch_assoc()) 
    {
      $totattz+=1;

    }
  }


  $sqlds="SELECT * from classattz where catz='$catz' AND levelz='$levelz' AND periodz='$periodz' AND coursez='$coursez' AND studidz='$ucont' AND statz='$statz'";
$resultds=mysqli_query($con,$sqlds);
if($resultds->num_rows>0)
{
    while($rowds = $resultds->fetch_assoc()) 
    {
      $curattz+=1;

    }
  }
  echo $curattz."/".$totattz;
 ?></a>
                  <p>&nbsp</p>
                </li>
  <!-- /.box-body -->
 </ul>
 </div>


<div class="col-sm-2"></div>
</div>
</div>

<div class="modal-footer">
      
      </div>

<?php
}
}
 ?>