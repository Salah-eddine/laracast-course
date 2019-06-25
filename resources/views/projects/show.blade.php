@extends('layout')
<div class="p-5">
    <h1  class="title">{{$project->title}}</h1>

    <div class="row mt-5 d-flex ">
        <div class="col-5">
            <p>{{$project->description}}</p>
        </div>
    </div>
    <div class="d-flex">
        <b> <h3>Tasks :</h3> </b>
        <a href="" class="btn btn-success ml-3">Add a task</a>
    </div>
    <div class="mt-3">
        @foreach($project->tasks as $task)

            <div>
                <form method="post" action="/tasks/{{$task->id}}">
                        @method("PATCH")
                        @csrf
                        <label for="completed">
                            <input type="checkbox" class="form-check-input" name="completed"  onchange="this.form.submit()" >
                            {{$task->description}}
                        </label>


                </form>
            </div>
        @endforeach
    </div>

    <div class ="d-flex">
        <div>
            <a href="/projects/{{$project->id}}/edit" class="btn btn-warning m-0">Edit</a>
        </div>

        <form class="ml-2" method="post" action="/projects/{{$project->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

</div>
