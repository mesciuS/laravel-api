@extends('layouts/admin')
@section('content')
    <div class="container">
        <h3 class="mb-3">Edit</h3>
        <form action="{{route('admin.projects.update', $project)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                @error('title')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label for="text">Text</label>
                <textarea name="text" id="text" cols="30" rows="10" class="form-control @error('text') is-invalid @enderror" value="{{old('text')}}"></textarea>
                @error('text')
                    {{$message}}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection 