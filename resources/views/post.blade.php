@extends('layouts.post')

@section('title',$post->title)

@section('subtitle',$post->subtitle)

@section('author',$post->creator)

@section('created_at',$post->created_at)

@section('category',$post->category)

@section('image','../img/post-bg.jpg')

@section('content')
{!!$post->content!!}
@endsection
