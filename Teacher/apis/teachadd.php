<div class="col-md-3">


    <div class="box box-primary">
        <div class="box-body box-profile">
            <h3 class="profile-username text-center"></h3>
            <div class="form-group has-feedback">
                <label><h2>Load Students</h2></label>

            </div>
            <div class="form-group has-feedback">
                <label>Programme</label>
                <div class="input-group" id="classcatz" name="classcatz">

                    <select class="form-control" name="catz" id="catz">

                    </select>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label>Courses</label>
                <div class="input-group" id="classz" name="classz">

                    <select class="form-control" name="coursez" id="coursez">

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
            <a onclick="serachbytmail();" href="#" class="btn btn-primary btn-block"><b>LOAD</b></a>
        </div>


    </div>


</div>

<div class="col-md-9">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>

            </div>
        </div>
        <div class="box-body" id="fillbooks" name="fillbooks" style="overflow:auto">


        </div>
    </div>
</div>