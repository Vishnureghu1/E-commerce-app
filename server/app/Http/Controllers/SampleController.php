<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function sample()
    {
        return response()->json(['message' => 'This is a sample API response']);
    }
}
