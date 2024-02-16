<!-- resources/views/drivers/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Driver</h2>

    <form action="{{ route('drivers.update', $driver) }}" method="post">
        @csrf
        @method('PUT')

        <!-- Populate the form fields with current values -->
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $driver->name }}" required>

        <!-- Add other fields as per your requirements -->

        <button type="submit">Update Driver</button>
    </form>
@endsection
