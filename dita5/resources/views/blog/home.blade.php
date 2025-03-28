@extends('blog.master')
@section('title','Home Page')
@section('content')
    <h1>Home Page</h1>
    <p>Home Page hello!</p>
    <div class="container my-4">
        @if(count($todos))
            <table class="table table-bordered">
                <tr>
                    <td>Nr.</td>
                    <td>Title</td>
                    <td>Post</td>
                    <td>Edit</td>
                </tr>
                @foreach ($todos as $todo)
                <tr>
                    <td>{{ $todo -> id }}</td>
                    <td>{{ $todo -> title }}</td>
                    <td>{{ $todo -> description }}</td>
                    <td> {{ $todo -> completed }} </td>

                    <td>
                        @if($todo->completed)
                            <span class="badge badge-sm bg-success">Completed</span>
                        @else   
                            <span class="badge badge-sm bg-info">Open</span>
                        @endif
                    </td>
                  
                </tr> 
                @endforeach
            </table>
        @else
            <div class="alert alert-info">
                Todo list eshte e zbrazet!
            </div>
        @endif
    </div>
@endsection
    
