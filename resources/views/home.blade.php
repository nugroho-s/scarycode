@extends('layouts.home')

@section('title', 'ScaryCode')

@section('top-navbar')
<li>
    <a href="#">Home</a>
</li>
<li>
    <a href="/about">About</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
@endsection

@section('background_image')
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Scary Code</h1>
                    <hr class="small">
                    <span class="subheading">A Blog for Coding Reference</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
@foreach ($posts as $post)
<div class="post-preview">
    <a href="/post/{{$post->id}}">
        <h2 class="post-title">
            {{ $post->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $post->subtitle }}
        </h3>
    </a>
    <p class="post-meta">Posted by <a href="#">{{ $post->creator }}</a> on {{ $post->created_at }} on <a href="">{{ $post->category }}</a></p>
</div>
<hr/>
@endforeach
<!-- Pager -->
<ul class="pager">
    <li class="next">
        <a href="#">Older Posts &rarr;</a>
    </li>
</ul>
@endsection
