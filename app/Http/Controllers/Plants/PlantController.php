<?php

namespace App\Http\Controllers\Plants;

use App\Http\Controllers\Controller;
use App\Models\Plants\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Plant::where('owned_by', Auth::id())->paginate();

        return view('plants/index', [
            'plants' => $plants
        ]);
    }

    public function show(Plant $plant)
    {
        return view('plants/show', [
            'plant' => $plant
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('plants/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }
}
