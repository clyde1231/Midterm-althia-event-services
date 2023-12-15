<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InquiryFormRequest;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        $inquiry = Inquiry::all();
        return view('admin.inquiry.index', compact('inquiry'));
    }
    public function create()
    {
        return view('pages.contact.index');
    }
    public function store(InquiryFormRequest $request)
    {
        $data = $request->validated();

        $inquiry = new Inquiry;
        $inquiry->name = $data['name'];
        $inquiry->email = $data['email'];
        $inquiry->subject = $data['subject'];
        $inquiry->message = $data['message'];

        $inquiry->save();

        return redirect('/contact')->with('message', 'Inquiry Sent Successfully!');
    }

    public function show($inquiry_id)
    {
        // Retrieve the single booking by ID and display it
        $inquiry = Inquiry::find($inquiry_id);

        return view('admin.inquiry.show', compact('inquiry'));
    }

    public function destroy($inquiry_id)
    {
        $inquiry = Inquiry::find($inquiry_id);
        $inquiry->delete();

        return redirect('admin/inquiry')->with('message', 'Inquiry Deleted Successfully!');
    }
}
