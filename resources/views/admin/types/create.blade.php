@extends('layouts.admin')
@section('content')
<div class="container">
    <form action="{{route('admin.types.store')}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="title">Name</label>
      <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
    </div>
    <div class="mb-3">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">
      Add
    </button>
  </form>
</div>
@endsection