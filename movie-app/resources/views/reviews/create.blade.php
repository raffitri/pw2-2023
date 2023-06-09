@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Review</li>
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
            Review Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies">
                @csrf
                <div>
                    <label for="film">Film:</label><br>
                    <input type="text" id="film" name="film">
                </div>
                <div>
                    <label for="user">User:</label><br>
                    <input type="text" id="user" name="user">
                </div>
                <div>
                    <label for="rating">Rating:</label><br>
                    <input type="text" id="rating" name="rating">
                </div>
                <div>
                    <label for="review">Review:</label><br>
                    <input type="text" id="review" name="review">
                </div>
                <div>
                    <label for="tanggal">Tanggal:</label><br>
                    <input type="text" id="tanggal" name="tanggal">
                </div>
                
                <button type="submit"class="btn btn-sm btn-success">Add</button>
            </form>
        </div>
    </div>
@endsection