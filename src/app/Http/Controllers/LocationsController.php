<?php

namespace Droplister\EduCore\App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Location $location)
    {
        // Paginate Schools
        $schools = $location->schools()
            ->orderBy('name', 'asc')
            ->paginate(20);

        return view('edu-core::locations.show', compact('location', 'schools'));
    }
}