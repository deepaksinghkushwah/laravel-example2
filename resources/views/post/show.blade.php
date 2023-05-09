@extends('layouts.main')
@section("title",$post->title)
@section('content')
    <p>{{ $post->content }}</p>
@endsection
