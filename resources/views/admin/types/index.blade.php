@extends('layouts.admin')
@section('content')
<div class="container">
    <table class="table table-striped">
      <thead>
        <th>Name</th>
        <th>Description</th>
        <th></th>
      </thead>
      <tbody>
        @foreach ($types as $type)
            <tr>
              <td>{{$type->name}}</td>
              <td>{{$type->description}}</td>
              <td><a href="{{route('admin.types.show', $type)}}">Show</a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      <a href="{{route('admin.types.create')}}" class="btn btn-primary">Create</a>
    </div>
</div>
@endsection