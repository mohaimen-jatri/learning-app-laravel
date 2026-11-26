@extends('layouts.app-layout')
@section('content')
    @include('user.common.CategoryList')
    @include('user.common.RecentPostList')
    @include('user.common.NewsletterSignup')
@endsection
