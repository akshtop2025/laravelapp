<!-- resources/views/admin/sliders/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Slider</h1>
    <form method="POST" action="{{ route('admin.sliders.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload Slider</button>
    </form>
</div>
@endsection
