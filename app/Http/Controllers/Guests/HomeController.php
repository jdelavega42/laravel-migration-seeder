<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::where('estimated_departure', '>=', now())->get();
        return view('home', compact('trains'));
    }
}
