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
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="error-template mt-5 mb-5 text-center">
                <h1>
                    Oops!</h1>
                <h2>
                    Sahifa topilmadi</h2>

                <div class="error-actions">
                    <a href="{{Route('index')}} " class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Bosh sahifa </a> <a href="{{Route('contact.index')}} " class="btn btn-success btn-lg"><span class="glyphicon glyphicon-envelope"></span> Aloqa </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
    @include('parts.footer')
@endsection
