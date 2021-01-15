@extends('layout.layout')

@section('content')


    <div class ="row justify-content-center nt-4">
        <h1>
            CREATE POST
        </h1>
    </div>
    <div class="row justify-content-center" >
        <div class="col-8">
            @if($errors->any())

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            @endif
            <form method="post" enctype="multipart/form-data" action="{{route('posts.save')}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail">Post Title</label>
                        <input type="name" class="form-control @error('title') is-invalid @enderror " name="title" >
                        {{--                    {{ $errors->has('title') ? 'is-invalid' : ''}}--}}
                        {{--                    @if($errors->first('title'))--}}
                        {{--                        <p >{{$errors->first('title')}}</p>--}}
                        {{--                    @endif--}}
{{--                        @error('title')--}}
{{--                        <p >{{$errors->first('title')}}</p>--}}
{{--                        @enderror--}}

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Post description</label>
                        <input type="name" class="form-control" name="body">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">post rating</label>
                        <input type="name" class="form-control" name="rating">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail">user id</label>--}}
{{--                        <input type="name" class="form-control" name="user_id">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tags</label>
                        <select name="tags[]" id="" multiple>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
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
