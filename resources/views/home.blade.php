@extends('layouts.app')
@section('title-block')Главная страница@endsection
@section('content')
    {{--    @include('blocks.main')--}}
    @include('blocks.about_us')
    @include('blocks.catalog')
    @include('blocks.submit_your_application')
    @include('blocks.how_we_are_working')
@endsection


