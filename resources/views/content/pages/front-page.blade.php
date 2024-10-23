@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dicky Info')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Artikel Terbaru</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($posts as $post)
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                                        <p class="text-muted">{{ Str::limit($post->content, 20) }}</p>
                                    </div>
                                    <div>
                                        <a href="/post/{{ $post->id }}" class="btn btn-link">Read More</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
