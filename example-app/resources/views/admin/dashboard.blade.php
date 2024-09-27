@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard!</p>
    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">Create Slider</a>
</div>
@endsection
