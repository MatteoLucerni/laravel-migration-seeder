<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        dd($trains);
        return view('home', compact('trains'));
    }
}
