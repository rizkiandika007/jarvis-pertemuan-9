@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<h1 class="mt-4">Tambah Kategori</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Daftar Kategori</a></li>
    <li class="breadcrumb-item active">Tambah Kategori</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Tambah Kategori
    </div>
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
