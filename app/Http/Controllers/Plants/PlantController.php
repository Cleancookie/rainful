<?php

namespace App\Http\Controllers\Plants;

use App\Http\Controllers\Controller;
use App\Models\Plants\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    public function list()
    {
        $plants = Plant::where('owned_by', Auth::id())->paginate();

        return view('plants/list', [
            'plants' => $plants
        ]);
    }
}
