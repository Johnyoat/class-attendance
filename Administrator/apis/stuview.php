
    <div class="col-md-3">

    <div class="box box-primary">
            <div class="box-body box-profile">
            
              <a onclick="studviewadmin();" href="#" class="btn btn-primary btn-block"><b>LOAD/RELOAD DATA</b></a>
            </div>
          </div>


<div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center"></h3>
  <div class="form-group has-feedback">
   <label>SEARCH BY ID</label>   
       <input class="form-control" placeholder="ENTER STUDENT ID" type="text" name="suid" id="suid">
      </div>
              <a onclick="serachbysid();" href="#" class="btn btn-primary btn-block"><b>SEARCH</b></a>
            </div>
          </div>


 <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">DELETE BY ID</h3>
             <input class="form-control" placeholder="ENTER STUDENT ID" type="text" name="delem" id="delem">
              <a onclick="deletebysid();" href="#" class="btn btn-primary btn-block"><b>DELETE</b></a>
            </div>
          </div>
</div>
      
       <div class="col-md-9">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
           
          </div>
        </div>
        <div class="box-body" id="fillbooks" name="fillbooks" style="overflow:auto">

  



 </div>
  </div>
   </div>
