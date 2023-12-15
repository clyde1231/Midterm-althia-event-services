<?php

namespace App\Http\Controllers;

use App\Models\Count;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $all_events = Event::all();
        $all_counts = Count::all();
        return view('frontend.index', compact('all_events', 'all_counts'));
    }
}
