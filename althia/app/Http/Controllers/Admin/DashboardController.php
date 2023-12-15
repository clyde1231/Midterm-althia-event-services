<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::count();
        $inquiry = Inquiry::count();


        return view('admin.dashboard', compact('bookings', 'inquiry'));
    }
}
