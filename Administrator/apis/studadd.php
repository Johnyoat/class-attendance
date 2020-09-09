<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-10">
  <div class="box box-navy">
   
             <div class="box-body">
<center>

<form action="apis/studaddproc.php" method="post" enctype="multipart/form-data" id="form1">


<center> 

  <div class="form-group has-feedback">
   <label>Student Id</label>   
   <div class="input-group">
                <input class="form-control" placeholder="10000489" type="text" name="studidz" id="studidz" >
              </div>
      </div>

  <div class="form-group has-feedback">
   <label>Student email</label>   
   <div class="input-group">
                <input class="form-control" placeholder="px@stu.csuc.edu.gh" type="email" name="emailz" id="emailz" >
              </div>
      </div>

 <div class="form-group has-feedback">
   <label>Name</label>   
   <div class="input-group">
                <input class="form-control" placeholder="Benjamin" type="text" name="studz" id="studz" >
              </div>
      </div>

       <div class="form-group has-feedback">
   <label>Phone</label>   
   <div class="input-group">
                <input class="form-control" placeholder="0544720636" type="text" name="phonz" id="phonz" >
              </div>
      </div>


      <div class="form-group has-feedback">
   <label>Year Group</label>   
    <div class="input-group">
                <input class="form-control" placeholder="eg.2018-2022" type="text" name="ygrup" id="ygrup" >
              </div>
      </div>


      <div class="form-group has-feedback">
   <label>Programme</label>   
   <div class="input-group" id="classcatz" name="classcatz">
               
                <select class="form-control" name="catz" id="catz">

                </select>
              </div>
      </div>


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
 

      
      <button type="button" onclick="stuaddproc();" class="btn bg-navy btn-flat margin">Add</button>
      <div id="snackbar" class="col-xs-8"><img src="../images/loadin.gif" style="width:50px;height:50px;"><br>Please wait..</br></div>
      </form>
</center>
 </div>
</div>
</div>
<div class="col-sm-1">
</div>
</div>
