@extends('main')

@section('body')
<<<<<<< HEAD
<style>
  div.inputreg{
    padding: 60px;
    background-color: #DCDCDC;
    /* opacity: 0.6;
    filter: alpha(opacity=60); */
  }
  button.btn{
    border-radius: 45%;
  }
</style>

<hr class="my-4">
<div class="col-sm-7 ml-auto">
  <button id='em' class="btn btn-info btn-lg">EMPLOYEE</button>
  <button id='job' class="btn btn-primary btn-lg">JOBSEEKER</button>
=======
<div>
    <button id='em'>
        em
    </button>
    <button id='job'>
        job
    </button>
>>>>>>> c897950630f908001aee1675965f2f36ef5ad30b
</div>
<hr class="my-4">
<div ng-controller='RegisterController'>
<<<<<<< HEAD
  <div id='employerForm' >
    <!-- registere form for employer -->
    <div class="row">
      <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <br>
        <h2 style="background-color: pink; margin-bottom: 0px; padding: 6px; padding-left: 20px;">Employee</h2>
        <div class="inputreg">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="ชื่อ">
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" id="nameShop" placeholder="ชื่อร้าน">
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" id="address" placeholder="ที่อยู่ร้าน">
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="col-4">
              <select class="form-control">
                <option>ร้านนม</option>
                <option>ร้านข้าว</option>
                <option>ร้านขนม</option>
              </select>
            </div>
            <div class="col">
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="col-4">
              <input type="text" class="form-control" id="phonenumber" placeholder="เบอร์โทรร้าน">
            </div>
            <div class="col">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            </div>

          </div>
          <br>
          <div class="form-row">
            <div class="col-sm-7 ml-auto">
              <input type="submit" class="btn btn-success" id="submit" value="SUBMIT">
            </div>
          </div>
          <br>
=======
    <div id='employerForm'>
        <!-- registere form for employer -->

        <div class="row">
            <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <br>

                <div>
                    <h2>Employee</h2>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="ชื่อ">
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="nameShop" placeholder="ชื่อร้าน">
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="address" placeholder="ที่อยู่ร้าน">
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-4">
                            <select class="form-control">
                                <option>ร้านนม</option>
                                <option>ร้านข้าว</option>
                                <option>ร้านขนม</option>
                            </select>
                        </div>

                        <div class="col">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-4">
                            <input type="text" class="form-control" id="phonenumber" placeholder="เบอร์โทรร้าน">
                        </div>

                        <div class="col">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>

                    </div>
                    <br>

                </div>
            </div>
>>>>>>> c897950630f908001aee1675965f2f36ef5ad30b
        </div>
    </div>
  </div>

<<<<<<< HEAD
    <div id='jobseekerForm'  style='display:none;' >
     <!-- registere form for jobseeker -->
     <div class="row">
        <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          <br>
          <h2 style="background-color: pink; margin-bottom: 0px; padding: 6px; padding-left: 20px;" onloadedmetadata="" onloadedmetadata=""onloadedmetadata="">Jobseeker</h2>
          <div class="inputreg">
          <div class="form-row">
            <div class="col-8">
              <input type="text" class="form-control" placeholder="ชื่อ">
            </div>
=======
    <div id='jobseekerForm' style='display:none;'>
        <!-- registere form for jobseeker -->
        <div class="row">
            <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

                <h2>Jobseeker</h2>
                <br>

                <div class="form-row">
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="ชื่อ">
                    </div>

                    <div class="col">
                        <input type="number" class="form-control" placeholder="อายุ">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-7">
                        <input type="number" class="form-control" placeholder="เบอร์โทรศัพท์">
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option>ชาย</option>
                            <option>หญิง</option>
                            <option>อื่นๆ</option>
                        </select>
                    </div>
                </div>

                <label for="exampleFormControlTextarea1"> รูปถ่าย </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
>>>>>>> c897950630f908001aee1675965f2f36ef5ad30b

            </div>
<<<<<<< HEAD
          </div>

          <label for="exampleFormControlTextarea1"> รูปถ่าย </label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
          <div class="form-row">
            <div class="col-sm-7 ml-auto">
              <input type="submit" class="btn btn-success" id="submit" value="SUBMIT">
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>

=======
        </div>
    </div>
</div>
</div>
>>>>>>> c897950630f908001aee1675965f2f36ef5ad30b
@endsection

@section('script')
<script src="{{asset('js/RegisterController/RegisterJs.js')}}"></script>
<script>
    $(function () {
        var em = $('#employerForm');
        var job = $('#jobseekerForm');

        $('#em').click(function () {
            em.slideDown(500);
            em.css('display', 'block');
            job.css('display', 'none');
        });

        $('#job').click(function () {
            job.slideDown(500);
            em.css('display', 'none');
            job.css('display', 'block');
        });
    });
</script>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> c897950630f908001aee1675965f2f36ef5ad30b
