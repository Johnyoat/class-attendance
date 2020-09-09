<?php
 session_start();
include 'tconslocal.php';
$msg = $_SESSION['SESS_emz'];
$catz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['catz']));
  $coursez=htmlspecialchars(mysqli_real_escape_string($con,$_GET['coursez']));
  $studlev=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studlev']));
  $studper=htmlspecialchars(mysqli_real_escape_string($con,$_GET['studper']));
if ($catz=="" or $coursez=="" or $studlev=="" or $studper=="") 
{
  echo "Please Fully Fill Search Criteria";
  return;
}

 
?>

<input hidden="hidden" id="catzs" name="catzs" type="text" value="<?php echo $catz; ?>"></input>
   <input hidden="hidden" id="studlevs" name="studlevs" type="text" value="<?php echo $studlev; ?>"></input>
   <input hidden="hidden" id="studpers" name="studpers" type="text" value="<?php echo $studper; ?>"></input>
    <input hidden="hidden" id="coursezs" name="coursezs" type="text" value="<?php echo $coursez; ?>"></input>
     <input hidden="hidden" id="attzs" name="attzs" type="text"></input>


<p><center><B> <font color="red"><?php echo $catz; ?></font> </B> </center></p>
<p><center><B> <font color="red"><?php echo $studlev; ?></font> </B> </center></p>
<p><center><B> <font color="red"><?php echo $studper; ?></font> </B> </center></p>
<p><center><B> <font color="red"><?php echo $coursez; ?></font> </B> </center></p>



<div class="row">

                 
                
<p><center><B> SET DATE </B> </center></p>
<center><input id="attdats" name="attdats" data-provide="datepicker"></center>
<br>
 <center><button id="<?php echo $maid; ?>" name="<?php echo $manam; ?>" onclick="attacktime(this.id,this.name,attzs.value);" type="button" class="btn btn-danger">Record</button></center>

  <div class="col-sm-4">
<p><b><u>NAME</u></b></p>

  </div>
   <div class="col-sm-4">
<p><b><u>STUDENT ID</u></b></p>

  </div>
   <div class="col-sm-4">
<center><p><b><u>STATUS</u></b></p></center>

  </div>
</div>



<?php


$sql="SELECT * from teachcourse where emz = '$msg' AND catz='$catz' AND coursez=REPLACE('$coursez', '  ', '++')";
$results=mysqli_query($con,$sql);
if($results->num_rows>0)
{


} 

else

{
 echo "You Are Not Allowed To Take Attendance On This Course";
  return;

}

 $sql="SELECT * from coursez where studlev = '$studlev' AND studper='$studper' AND catz='$catz' AND coursez=REPLACE('$coursez', '  ', '++')";
$result=mysqli_query($con,$sql);
if($result->num_rows>0)
{




} 
else
{
  echo "No Such Course Found For Selected Criteria";
  return;
}

 $sqle="SELECT * from studz where studlev = '$studlev' AND studper='$studper' AND catz='$catz'";
$resulte=mysqli_query($con,$sqle);
if($resulte->num_rows>0)
{
    while($rowe = $resulte->fetch_assoc()) 
    {
      $maid=$rowe["studidz"];
      $manam=$rowe["studz"];

?>

       <div class="row" style="overflow:auto;">
<div class="col-sm-4">
<label id="<?php echo $rowe["studz"]; ?>" name="<?php echo $rowe["studz"]; ?>"><?php echo $rowe["studz"]; ?></label>

</div>

<div class="col-sm-4">
<label id="<?php echo $rowe["studidz"]; ?>" name="<?php echo $rowe["studidz"]; ?>"><?php echo $rowe["studidz"]; ?></label>

</div>

<div class="col-sm-4">
<div class="input-group">
                <!-- /btn-group -->
                <div class="input-group" id="teachpriv" name="teachpriv">
               
                <select class="form-control m-bot15" name="attz" id="attz"  onchange="showUser(this.value)">'>




                  
<option></option>
<option>Present</option>
<option style="color:red">Absent</option>

                </select>


              </div>
              
               

  
          
                
                   
                    
                        <div class="input-group-btn">
                            <div class="text-center">
                                <a href="apis/index.php"  class="btn btn-success">
                                  Qr Code
                                </a>
                                
                                <a href="#" onclick="callteachview();" data-toggle="offcanvas" class="btn btn-warning">
                                    Biometric Sign-out
                                </a>
                                
                            </div>

                           
                            

                        </div>
                    </div>
                </section>
            </div>
        </div>


</div>
<div></div>
                

              </div>

</div>
<p>&nbsp</p>
       </div>




      <?php
    }
} 
else
{
  echo "No Student Found For Selected Criteria";
  return;
}


mysqli_close($con);

?>