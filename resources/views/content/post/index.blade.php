@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Post')

@section('content')
    <h4>Post </h4>
    <a href="/post/create" class="btn btn-primary">New Post</a>
    <table class="table">
        <thead>
            <tr>
                <th>No. </th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <a href="/post/{{ $post->id }}" class="btn btn-primary">Edit</a>
                        <form action="/post/{{ $post->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
