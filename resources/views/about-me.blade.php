@extends('layouts.home')

@section('title', 'ScaryCode')

@section('top-navbar')
<li>
    <a href="/">Home</a>
</li>
<li>
    <a href="#">About</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
@endsection

@section('background_image')
<header class="intro-header" style="background-image: url('img/about-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>About Me</h1>
                    <hr class="small">
                    <span class="subheading">This is what I do.</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<iframe src="https://nugroho-s.github.io/" width="100%" height="1080"></iframe>
@endsection
