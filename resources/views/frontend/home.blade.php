@extends('layouts.app-layout')
@section('content')
    @include('frontend.common.CategoryList')
    @include('frontend.common.RecentPostList')
    @include('frontend.common.NewsletterSignup')
@endsection
