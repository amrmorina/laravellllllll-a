@extends('blog.master')
@section('title','Contact Page')
@section('content')
    <h1>Contact Page</h1>
    <p>Contact Page hello!</p>
    <div class="container my-4">
        @if($errors->any)
            @foreach($errors->all as $error)
                <p>{{ $error}}</p>
            @endforeach
        @endif
        <form action="" method="POST">
            @csrf
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
            <br>
            <input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="Description">
            <input type="checkbox" name="completed" value="1" @if(old('title') == 1) checked @endif>
            <button type="submit" class="btn btn-sm btn-primary">Create</button>
        </form>
    </div>
@endsection
    
