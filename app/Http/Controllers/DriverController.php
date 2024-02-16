<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('driver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number_seats' => 'required|integer',
            'image' => 'required|string',
            'typ_veicl' => 'required|string',
            'matricule' => 'required|integer',
            'price' => 'required|integer',
            'method_payment' => 'required|in:cart,espase',
            'description' => 'required|string',
        ]);
        Driver::create($request->all());
        return redirect()->route('drivers.index')->with('success', 'Driver added successfully!');
    }

    public function updateAvailability(Request $request, Driver $driver)
{
    $driver->update(['availability' => $request->availability]);
    return redirect()->back()->with('success', 'Availability updated successfully!');
}

public function showHistoryAndRatings(Driver $driver)
{
    // Assuming you have a "trips" table with driver_id as a foreign key
    $trips = $driver->trips;
    $ratings = $driver->ratings;

    return view('drivers.history_ratings', compact('trips', 'ratings'));
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
