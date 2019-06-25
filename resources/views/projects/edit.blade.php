@extends('layout')
@section('content')
    <div>
    <form method="POST" action="/projects/{{$project->id}}">
        {{method_field('PATCH')}}
        @csrf
        <div>
            <label for="title">Project title</label>
            <div></div> 
        <input type="text" name="title" value="{{$project->title}}">
        </div>

        <div>
            <label for="description">Project description</label>
            <div></div>
        <textarea name="description" id="" cols="30" rows="10">{{$project->description}}</textarea>
        </div>

        <div>
            <button class="btn btn-info">Submit</button>
        
        </div>
    </form>
    <form action="/projects/{{$project->id}}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">Delete</button>
    </form>
    </div>
@endsection