@extends('../layout.layout')
@section('content')

    <h1 class="title">
        Sign Up Page
    </h1>
    <form action="{{route('save_user')}}" method="post" enctype="multipart/form-data" >
        <div class="container">
            <div >
                <label for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control @error('title') is-invalid @enderror" name="name">
                @error('title')
                <p class="error-container">{{$errors->first('title')}}</p>
                @enderror
            </div>

            <div>
                <label for="exampleInputEmail1">email</label>
                <input type="email" class="form-control @error('text') is-invalid @enderror" name="email">
                @error('text')
                <p class="error-container">{{$errors->first('text')}}</p>
                @enderror
            </div>
            <div>
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control @error('likes') is-invalid @enderror" name="password">
                @error('likes')
                <p class="error-container">{{$errors->first('likes')}}</p>
                @enderror
            </div>
        </div>
        @csrf
        <div class="box-footer">
            <button type="submit">Submit</button>
        </div>
    </form>


@endsection()
