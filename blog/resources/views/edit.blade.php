@extends('layout.layout')

@section('content')

    <div class ="row justify-content-center nt-4">
        <h1>
            UPDATE POST
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form method="post" enctype="multipart/form-data" action="{{route('posts.update', $post->id)}}">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail">Post Title</label>
                        <input type="name" class="form-control" name="title" value="{{old('title', $post->title)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Post description</label>
                        <input type="name" class="form-control" name="body" value="{{old('body', $post->body)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">post rating</label>
                        <input type="name" class="form-control" name="rating" value="{{old('rating', $post->rating)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tags</label>
                        <select name="tags[]" id="" multiple>
                            @foreach($post->tags as $tag)
                                <option disabled selected style="background-color: #cbd5e0" value="{{$tag->id}}">{{$tag->name}}</option>
{{--                                <option value="{{$post->tags ==='$tag'? 'selected' : null }}">{{$tag->name}}></option>--}}
{{--                                <option name="tag" value="{{old('tag', $post->tags)}}"></option>--}}
                            @endforeach
                        </select>
                    </div>

                </div>
                @csrf
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
