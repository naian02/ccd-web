@extends('app')

@section('about')

<!-- Page title -->
<div class="page-title-section">
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="{{route ('home.index')}}">Home</a></li>
                <li class="active">About Us</li>
            </ol>
            <h1 class="page-title">About Us</h1>
        </div>
    </div>
</div>
@include('about.content.about-us')

@include('about.content.client')

@endsection