@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'New Post')

@section('content')
    <h4>New Post</h4>
    <form action="/post" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" placeholder="Enter content" rows="5"></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Enter author">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
