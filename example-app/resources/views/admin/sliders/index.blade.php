<!-- resources/views/admin/sliders/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sliders</h1>
    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">Add New Slider</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
            <tr>
                <td>{{ $slider->id }}</td>
                <td><img src="{{ asset('images/sliders/' . $slider->image) }}" width="100"></td>
                <td>
                    <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
