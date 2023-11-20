<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class VisitorController extends Controller
{
    public function showContent()
    {
        Visit::create(); 

        return view('content');
    }

    public function showVisitors()
    {
        $visitors = Visit::count(); 

        return view('visitors', compact('visitors'));
    }
}

