@extends('layout')

@section('content')   
<table class="table table-striped">
    <thead>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
        @foreach($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>
                    <div class="d-flex ">
                    <a class="link btn btn-success" href="/projects/{{$project->id}}/edit">Edit</a>
                    <a class="link btn btn-info" href="/projects/{{$project->id}}">Show</a>
                        <div>
                            <form action="/projects/{{$project->id}}" method="post">

                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Submit</button>
                            </form>
                        </div>

                    </div>
                </td>
            </tr>
            
        @endforeach
    </tbody>
</table> 
<a class="btn btn-info" href="{{route('projects.create')}}">Add a project</a>


@endsection

<style>
    .link{
        color:inherit;
    }
</style>
