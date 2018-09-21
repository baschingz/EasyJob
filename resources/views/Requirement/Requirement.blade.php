@extends('main')

@section('body')
<section class="section-requirement">
  <div class="container top">
    <div class="row">
      <div class="col-sm-12 text-topic-requirement">
        Requirement
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  function delbtn(e) {

    var deletebtn = document.getElementById(e.id)
    deletebtn.remove()
  }

  $(document).ready(function () {

    var count = 1
    $("#add-more").click(function () {
      // var html = $("#field").clone();
      $("#field-children").append('<div class="form-row" id="field_' + count +
        '"><div class="col"><select class="form-control"><option>อาทิตย์</option><option>จันทร์</option><option>อังคาร</option><option>พุธ</option><option>พฤหัสบดี</option><option>ศุกร์</option><option>เสาร์</option></select></div><div class="col"><input type="time" class="form-control" name="starttime[]"></div> - <div class="col"><input type="time" class="form-control" name="endtime[]"></div><div class="input-group-btn">&nbsp;<button class="btn btn-danger" id="delbtn" onclick="delbtn(field_' +
        count + ')" type="button"><i class="fa fa-minus"></i> </button> </div></div>'
      )
      count += 1
    })

  });
</script>


@endsection

@section('script')

@endsection