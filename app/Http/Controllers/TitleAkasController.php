<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TitleAka;

class TitleAkasController extends Controller
{
    public function index()
    {
        return response()->json(TitleAka::all());
    }
}
