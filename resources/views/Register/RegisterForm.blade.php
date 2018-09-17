@extends('main')

@section('body')
<div ng-controller='RegisterController'>
<input ng-model="registerform.name" type="text">
<input ng-model="registerform.email" type="text">
<input ng-click="save(registerform)">
</div>
@endsection

@section('script')
<script src="{{asset('js/RegisterController/RegisterJs.js')}}"></script>
@endsection

