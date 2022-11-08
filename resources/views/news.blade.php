@extends('main')
@section('title')
Sirdaryo viloyati pedagoglarni yangi metodikalarga o'rgatish milliy markazi
@endsection
@section('header')
    @include('parts.header')
@endsection
@section('sliders')
    @include('parts.sliders')
@endsection
@section('main')
@if (isset($id))
    @include('parts.news_page_show')
@else
    @include('parts.news_page')
@endif

@endsection

@section('footer')
    @include('parts.footer')
@endsection
