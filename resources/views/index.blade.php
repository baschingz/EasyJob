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
                <button class="btn btn-default btn-text btn-size">Get start</button>
            </div>
        </div>          
    </div>
</section>

@endsection

@section('script')

@endsection

