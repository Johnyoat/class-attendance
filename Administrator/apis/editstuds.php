<?php
include 'tconslocal.php';
$msg = 'Teacher';
$emzs="";
$emzs2="";
$emzs3="";
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));

$sql="SELECT * from studz where studidz = '$ucont'";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{
// output data of each row

    while($row = $result->fetch_assoc()) 
    {
      $emzs=$row["catz"];
      $emzs2=$row["studlev"];
$emzs3=$row["studper"];
    
?>
            <div class="box-body box-profile">
              <h3 class="profile-username text-center" id="studidz" name="studidz"><?php echo $row["studidz"]; ?></h3></br>

              <p id="studstuff" class="text-muted text-center"><?php echo $row["studz"]; ?></p></br>

              <ul class="list-group list-group-unbordered">
                 <li class="list-group-item">
                  <b>YEAR GROUP</b> <a class="pull-right"><?php echo $row["ygrup"]; ?></a>
                </li>
                 <li class="list-group-item">
                  <b>PROGRAMME</b> <a class="pull-right"><?php echo $row["catz"]; ?></a>
                  <p>&nbsp</p>
                </li>
                <li class="list-group-item">
                  <b>CONTACT</b> <a class="pull-right"><?php echo $row["phonz"]; ?></a>
                </li>
                 <li class="list-group-item">
                  <b>LEVEL</b> <a class="pull-right"><?php echo $row["studlev"]; ?></a>
                </li>
                 <li class="list-group-item">
                  <b>PERIOD</b> <a class="pull-right"><?php echo $row["studper"]; ?></a>
                </li>

                <center><h3>UPDATE LEVEL/PERIOD</h3>


      <div class="form-group has-feedback">
   <label>Level</label>   
   <div class="input-group" id="teachpriv" name="teachpriv">
               
                <select class="form-control" name="studlev" id="studlev">
<option>100</option>
<option>200</option>
<option>300</option>
<option>400</option>

                </select>
              </div>
      </div>

      <div class="form-group has-feedback">
   <label>Period</label>   
   <div class="input-group" id="teachpriv" name="teachpriv">
               
                <select class="form-control" name="studper" id="studper">
<option>First Semester</option>
<option>Second Semester.</option>

                </select>
              </div>
      </div>
 

      
      <button type="button" onclick="studupd();" class="btn bg-navy btn-flat margin">Update</button>
              </center>
 </ul>

 <center><h2>COURSES TO BE DONE</h2></center>
<?php 
$sqle="SELECT * from coursez where catz = '$emzs' AND studlev = '$emzs2' AND studper = '$emzs3'";
$resulte=mysqli_query($con,$sqle);
if($resulte->num_rows>0)
{
// output data of each row

    while($rowe = $resulte->fetch_assoc()) 
    {
    
      ?>

<center><p><?php echo $rowe["coursez"]; ?></p></center>


<?php
}
}
 ?>



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