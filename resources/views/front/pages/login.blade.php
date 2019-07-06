@extends("layouts.front")

@section("title")
    Home page
@endsection

@section("content")
@include("front.components.index_header")

<!-- Main Content -->
@include("front.components.login_form")

@endsection