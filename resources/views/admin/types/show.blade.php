@extends('layouts.admin')


@section('content')
    <div class="container">
      <h3>Linked Projects</h3>
      <table class="table table-striped">
        <thead>
          <th>Name</th>
          <th></th>
        </thead>
        <tbody>
          @foreach ($type->projects as $project)
              <tr>
                <td>{{$project->title}}</td>
                <td><a href="{{route('admin.projects.show', $project)}}">Show</a></td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection