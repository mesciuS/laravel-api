@extends('layouts/admin')
@section('content')
    <div class="container">
        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="type_id">Type</label>
                <select name="type_id" id="type_id" class="form-select @error('type_id') is-invalid @enderror">
                    <option value="">None</option> 
                    @foreach ($types as $type)
                    <option value="{{$type->id}}" {{old('type_id') == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                    @endforeach
                </select>
                @error('type_id')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3 form-group">
                <h4>Tech</h4>
                <div class="form-check">
                  @foreach($technologies as $technology)
                    <input id="technology_{{$technology->id}}" name="technologies[]" type="checkbox" value="{{$technology->id}}" @checked(in_array($technology->id, old('technologies', [])))>
                    <label for="technology_{{$technology->id}}">{{$technology->name}}</label>
                  @endforeach
                </div>
            </div>
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