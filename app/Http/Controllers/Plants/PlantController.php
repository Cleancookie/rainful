<?php

namespace App\Http\Controllers\Plants;

use App\Http\Controllers\Controller;
use App\Models\Plants\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
