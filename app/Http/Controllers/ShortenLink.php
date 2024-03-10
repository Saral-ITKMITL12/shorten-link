<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortenLink extends Controller
{
    public function store(Request $request)
    {
        $longUrl = $request->input('long_url');
    }
}
