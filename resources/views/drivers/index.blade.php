<!-- resources/views/drivers/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Drivers List</h2>

    <!-- Display list of drivers -->
    @foreach ($drivers as $driver)
        <div>
            <h3>{{ $driver->name }}</h3>
            <!-- Display other driver details -->

            <a href="{{ route('drivers.edit', $driver) }}">Edit</a>
            <form action="{{ route('drivers.destroy', $driver) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection


