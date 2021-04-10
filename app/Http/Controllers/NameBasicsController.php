<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NameBasic;

class NameBasicsController extends Controller
{
    public function index()
    {
        return response()->json(NameBasic::all());
    }
}
