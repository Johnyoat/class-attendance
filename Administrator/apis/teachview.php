
    <div class="col-md-3">

    <div class="box box-primary">
            <div class="box-body box-profile">
            
              <a onclick="teachviewadmin();" href="#" class="btn btn-primary btn-block"><b>LOAD/RELOAD DATA</b></a>
            </div>
          </div>


<div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center"></h3>
  <div class="form-group has-feedback">
   <label>SEARCH BY EMAIL</label>   
   <div class="input-group" id="emsearch" name="emsearch">
                <select class="form-control" name="emz" id="emz">
                </select>
              </div>
      </div>
              <a onclick="serachbytmail();" href="#" class="btn btn-primary btn-block"><b>SEARCH</b></a>
            </div>
          </div>

          <div class="box box-primary">
            <div class="box-body box-profile">
             <div class="form-group has-feedback">
   <label>SEARCH BY NAME</label>   
   <div class="input-group" id="namsearchs" name="namsearchs">
                <select class="form-control" name="namz" id="namz">
                </select>
              </div>
      </div>
              <a onclick="serachbytname();" href="#" class="btn btn-primary btn-block"><b>SEARCH</b></a>
            </div>
          </div>

 <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center">DELETE BY STAFF ID</h3>
             <input class="form-control" placeholder="ENTER ID" type="text" name="delem" id="delem">
              <a onclick="deletebytem();" href="#" class="btn btn-primary btn-block"><b>DELETE</b></a>
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
