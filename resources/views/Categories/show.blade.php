@extends('layouts.app')

@section('title', 'Detail Kategori')

@section('content')
<h1 class="mt-4">Detail Kategori</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Daftar Kategori</a></li>
    <li class="breadcrumb-item active">Detail Kategori</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Detail Kategori
    </div>
    <div class="card-body">
        <h4>{{ $category->name }}</h4>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
