@extends('layouts.app')

@section('title', 'Daftar Tugas')

@section('content')
<h1 class="mt-4">Daftar Tugas</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Daftar Tugas</li>
</ol>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Daftar Tugas
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Tugas</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($task->deadline)->format('d F Y') }}</td>
                            <td><span class="badge bg-warning">{{ $task->status }}</span></td>
                            <td>{{ $task->description }}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
