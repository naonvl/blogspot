@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Post')

@section('content')
    <div class="single-post card mb-4">
        <div class="card-header">
            <h1 class="card-title">{{ $post->title }}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->content }}</p>
            <p class="card-text text-muted"><strong>Author:</strong> {{ $post->author }}</p>
        </div>
    </div>
@endsection
