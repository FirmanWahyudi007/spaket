<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        $location = Location::create([
            'lat' => $request->lat,
            'long' => $request->long,
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        return response()->json($location, 201);
    }

    public function index()
    {
        $locations = Location::all();
        return response()->json($locations, 200);
    }
}
