<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymouss">

  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>

<body>

  <!-- Register -->
  <div id="accordion">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#EmployerRegis"
              aria-expanded="false" aria-controls="EmployerRegis">Employer</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#JobseekerRegis"
              aria-expanded="false" aria-controls="JobseekerRegis">Jobseeker</button>

          </p>
        </div>
      </div>
    </div>
    <div class="container collapse multi-collapse" id="EmployerRegis" data-parent="#accordion">
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
      </div>
    </div>

    <br>
    <div class="container collapse multi-collapse" id="JobseekerRegis" data-parent="#accordion">
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

        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>