<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-10">
  <div class="box box-navy">
   
             <div class="box-body">
<center>

<form action="apis/teachaddproc.php" method="post" enctype="multipart/form-data" id="form1">


 <div class="form-group has-feedback">
   <label>Staff Id</label>   
   <div class="input-group">
                <input class="form-control" placeholder="10000489" type="text" name="teachidz" id="teachidz" >
              </div>
      </div>


 <div class="form-group has-feedback">
   <label>Name</label>   
   <div class="input-group">
                <input class="form-control" placeholder="Benjamin" type="text" name="teachz" id="teachz" >
              </div>
      </div>

       <div class="form-group has-feedback">
   <label>Email</label>   
   <div class="input-group">
                <input class="form-control" placeholder="Email" type="text" name="emz" id="emz" >
              </div>
      </div>

       <div class="form-group has-feedback">
   <label>Phone</label>   
   <div class="input-group">
                <input class="form-control" placeholder="+233544720636" type="text" name="phonz" id="phonz" >
              </div>
      </div>

<div class="form-group has-feedback">
   <label>Priviledge</label>   
   <div class="input-group" id="teachpriv" name="teachpriv">
               
                <select class="form-control" name="priviz" id="priviz">
<option>Lecturer</option>
<option>Administrator</option>

                </select>
              </div>
      </div>


       <div class="form-group has-feedback">
   <label>Password</label>   
   <div class="input-group">
                <input class="form-control" placeholder="" type="password" name="pwdz" id="pwdz" >
              </div>
      </div>

       


      <button type="button" onclick="teachaddproc();" class="btn bg-navy btn-flat margin">Add</button>
      <div id="snackbar" class="col-xs-8"><img src="../images/loadin.gif" style="width:50px;height:50px;"><br>Please wait..</br></div>
      </form>
</center>
 </div>
</div>
</div>
<div class="col-sm-1">
</div>
</div>
