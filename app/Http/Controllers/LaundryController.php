<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
use Illuminate\Database\Eloquent\Model;

class LaundryController extends Controller
{
    public function index()
    {
        $laundries = Laundry::all();
        return view('home', compact('laundries'));
    }
}
