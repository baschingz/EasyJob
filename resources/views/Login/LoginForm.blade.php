@extends('main')

@section('body')
<div ng-controller=''>
<input ng-model="loginform.username" type="text">
<input ng-model="loginform.password" type="password">
<input ng-click=>
</div>
@endsection

@section('script')
<script src="{{asset('js/LoginController/LoginJs.js')}}"></script>
@endsection

