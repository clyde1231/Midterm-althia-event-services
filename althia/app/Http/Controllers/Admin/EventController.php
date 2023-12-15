<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventFormRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class EventController extends Controller
{
    public function index()
    {

        $event = Event::all();
        return view('admin.event.index', compact('event'));
    }

    public function create()
    {
        return view('admin.event.create');
    }
    public function store(EventFormRequest $request)
    {
        $data = $request->validated();

        $event = new Event;
        $event->name = $data['name'];
        $event->slug = $data['slug'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/event/', $filename);
            $event->image = $filename;
        }

        $event->navbar_status = $request->navbar_status == true ? '1' : '0';
        $event->status = $request->status == true ? '1' : '0';
        $event->save();

        return redirect('admin/event')->with('message', 'Event Added Successfully!');
    }

    public function edit($event_id)
    {
        $event = Event::find($event_id);
        return view('admin.event.edit', compact('event'));
    }

    public function update(EventFormRequest $request, $event_id)
    {
        $data = $request->validated();

        $event = Event::find($event_id);
        $event->name = $data['name'];
        $event->slug = $data['slug'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/event/' . $event->image;
            if (FacadesFile::exists($destination)) {
                FacadesFile::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/event/', $filename);
            $event->image = $filename;
        }

        $event->navbar_status = $request->navbar_status == true ? '1' : '0';
        $event->status = $request->status == true ? '1' : '0';
        $event->update();

        return redirect('admin/event')->with('message', 'Event Edit Successfully!');
    }

    public function destroy($event_id)
    {
        $event = Event::find($event_id);
        if ($event) {

            $destination = 'uploads/event/' . $event->image;
            if (FacadesFile::exists($destination)) {
                FacadesFile::delete($destination);
            }

            $event->bookings()->delete();
            $event->delete();

            return redirect('admin/event')->with('message', 'Event Deleted Successfully!');
        } else {
            return redirect('admin/event')->with('message', 'No Event Id Found!');
        }
    }
}
