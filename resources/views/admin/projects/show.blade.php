@extends('layouts/admin')
@section('content')
    <div class="container text-center">
        <h1>Title: {{$project->title}}</h1>
        <p>Slug: {{$project->slug}}</p>
        <div class="img-container">
            <img src="{{asset('storage/' . $project->image)}}" alt="">
        </div>
        <p>Type: {{$project->type->name}}</p>
        <hr>
        <p>{{$project->text}}</p>
        <hr>
    </div>
    <div class="btn-container">
        <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary mb-3">Edit</a>
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection 