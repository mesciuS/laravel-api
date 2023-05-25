@extends('layouts/admin')
@section('content')
    <div class="container">
        <table class="table" style="mb-5">
            <thead>
                <th>Title</th>
                <th>Slug</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>
                        {{$project->title}}
                    </td>
                    <td>
                        {{$project->slug}}
                    </td>
                    <td>
                        <a href="{{route('admin.projects.show', $project)}}">Text</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Crea un project</a>
        </div>
    </div>
@endsection