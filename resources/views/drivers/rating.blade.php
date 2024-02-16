<!-- resources/views/drivers/history_ratings.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Driver History and Ratings</h2>

    <!-- Display driver's trip history -->
    <h3>Trip History</h3>
    @foreach ($trips as $trip)
        <!-- Display trip details -->
    @endforeach

    <!-- Display driver's ratings -->
    <h3>Ratings</h3>
    @foreach ($ratings as $rating)
        <!-- Display rating details -->
    @endforeach
@endsection
