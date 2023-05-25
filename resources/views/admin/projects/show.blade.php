@extends('layouts/admin')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Here's the text</h1>
        <h3 style="text-align: center">Title: {{$project->title}}</h3>
        <p style="text-align: center">Type: {{$project->type->name}}</p>
        <p style="text-align: center">Slug: {{$project->slug}}</p>
        <br>
        <p>{{$project->text}}</p>
        <hr>
        <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary mb-3">Edit</a>
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection 