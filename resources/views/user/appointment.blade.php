@extends('user.layouts.app')

@section('title','Appointment')
@section('sub-title','Appointment')


@section('main-content')

    @include('user.layouts.header-category')

	
	@include('user.form.appointment')
@endsection
