@extends('main')

@section('import')
@endsection

@section('body')
<section class="section-cover">
    <div class="cover-image">
        <div class="d-flex justify-content-center">
            <img src="{{asset('images/icon/icon-main.png')}}" class="icon-main">
        </div>
        <div class="d-flex justify-content-center text-logo-main">
            <span class="text-easy">Easy</span>
            <span class="text-job">Job</span>
        </div>  
        <div class="d-flex justify-content-center">
            <div class="col-sm-2">
                <button class="btn btn-default btn-text btn-size"  data-toggle="modal" data-target="#exampleModalLong">Sign In</button>
                <a href="http://localhost:8000/register"><button class="btn btn-default btn-text btn-size" >Register</button></a>
            </div>
        </div>          
    </div>
</section>

@endsection

@section('script')
<script>
    
</script>
@endsection

