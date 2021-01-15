@extends('layout.layout')
@section('content')


    <h1 class="title">
        CREATE EMAIL
    </h1>


    <form action="{{route('mail.send')}}" method="post" enctype="multipart/form-data" >
        <div class="container">
            <div >
                <label for="exampleInputEmail1">Mail</label>
                <input type="email" class="form-control @error('mail') is-invalid @enderror" name="mail">
                @error('mail')
                <p class="error-container">{{$errors->first('mail')}}</p>
                @enderror
            </div>
        </div>
        @csrf
        <div class="box-footer">
            <button type="submit">Submit</button>
        </div>
    </form>


@endsection()
