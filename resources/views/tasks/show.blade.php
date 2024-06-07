@extends('layouts.app')

@section('title', 'Detail Tugas')

@section('content')
<h1 class="mt-4">Detail Tugas</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('tasks.index') }}">Daftar Tugas</a></li>
    <li class="breadcrumb-item active">Detail Tugas</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Detail Tugas
    </div>
    <div class="card-body">
        <h4>{{ $task->name }}</h4>
        <p><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($task->deadline)->format('d F Y') }}</p>
        <p><strong>Status:</strong> <span class="badge bg-warning">{{ $task->status }}</span></p>
        <p><strong>Deskripsi:</strong> {{ $task->description }}</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
