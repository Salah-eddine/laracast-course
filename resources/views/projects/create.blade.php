@extends('layout')
@section('content')
    <div>
    <form method="POST" action="{{route('projects.store')}}">
        @csrf

        <div class="control">
            <label for="title">Project title</label>
            <div></div> 
            <input type="text" name="title" value="{{old('title')}}"}} >
        </div>

        <div>
            <label for="description">Project description</label>
            <div></div>
            <textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
        </div>

        <div>
            <button class="btn btn-info">Submit</button>
        </div>
        @if($errors->any())
             <div class="alert alert-danger">

                 @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                 @endforeach
             </div>
        @endif
    </form>
    </div>
@endsection
