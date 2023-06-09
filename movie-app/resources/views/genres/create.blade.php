@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genre Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genre</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Genre Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies">
                @csrf
                <div>
                    <label for="nama">Nama:</label><br>
                    <input type="text" id="nama" name="nama">
                </div>
                <div>
                    <label for="deskripsi">Deskripsi:</label><br>
                    <input type="text" id="deskripsi" name="deskripsi">
                </div>
                <button type="submit"class="btn btn-sm btn-warning">Add</button>
            </form>
        </div>
    </div>
@endsection