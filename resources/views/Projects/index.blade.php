@extends('layouts.app')

@section('content')
    <h1>Projects</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}">Edit</a> |
                        <a href="{{ route('projects.destroy', $project->id) }}" onclick="event.preventDefault(); confirm('Are you sure you want to delete this project?'); this.closest('form').submit()">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('projects.create') }}">Create New Project</a>
@endsection
