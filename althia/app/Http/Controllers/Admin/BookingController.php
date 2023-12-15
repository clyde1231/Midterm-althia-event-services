<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookingFormRequest;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $books = Booking::all();
        return view('admin.booking.index', compact('books'));
    }

    public function create()
    {
        $event = Event::all();
        return view('pages.bookings.create', compact('event'));
    }

    public function store(BookingFormRequest $request)
    {
        $data = $request->validated();

        $book = new Booking;
        $book->event_id = $data['event_id'];
        $book->name = $data['name'];
        $book->email = $data['email'];
        $book->number = $data['number'];
        $book->date_picker = $data['date_picker'];
        $book->message = $data['message'];
        $book->save();

        return redirect('/add-booking')->with('message', 'New Booking Added Successfully!');
    }

    public function edit($booking_id)
    {
        $event = Event::all();
        $book = Booking::find($booking_id);
        return view('admin.booking.edit', compact('book', 'event'));
    }

    public function update(BookingFormRequest $request, $booking_id)
    {
        $data = $request->validated();

        $book = Booking::find($booking_id);
        $book->event_id = $data['event_id'];
        $book->name = $data['name'];
        $book->email = $data['email'];
        $book->number = $data['number'];
        $book->date_picker = $data['date_picker'];
        $book->message = $data['message'];

        // Update the status and payment fields
        $book->status = $data['status'];
        $book->payment = $data['payment'];

        $book->update();

        return redirect('admin/bookings')->with('message', 'Booking Updated Successfully!');
    }

    public function show($booking_id)
    {
        // Retrieve the single booking by ID and display it
        $booking = Booking::find($booking_id);

        return view('admin.booking.show', compact('booking'));
    }

    public function destroy($booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->delete();

        return redirect('admin/bookings')->with('message', 'Booking Deleted Successfully!');
    }
}
