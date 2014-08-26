@extends('layout.master')

@section('body')
	@include('include.header')
	@yield('body')
	@include('include.footer')
@stop