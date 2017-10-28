@extends('layouts.layout')
@section('navbar')
  @parent
    @endsection
@section('header')
    @parent
    <p>&copy; Company 2017</p>
    @endsection
@section('content')
    @include('content')
@endsection
