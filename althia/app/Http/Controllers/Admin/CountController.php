<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CountRequest;
use App\Models\Count;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public function index()
    {
        $count = Count::all();
        return view('admin.count.index', compact('count'));
    }

    public function create()
    {
        return view('admin.count.create');
    }

    public function store(CountRequest $request)
    {
        $data = $request->validated();

        $count = new Count;
        $count->happy_customer = $data['happy_customer'];
        $count->videographer = $data['videographer'];
        $count->events_complete = $data['events_complete'];

        $count->save();

        return redirect('admin/count')->with('message', 'Event Counts Added');
    }

    public function edit($count_id)
    {
        $count = Count::find($count_id);
        return view('admin.count.edit', compact('count'));
    }

    public function update(CountRequest $request, $count_id)

    {
        $data = $request->validated();

        $count = Count::find($count_id);
        $count->happy_customer = $data['happy_customer'];
        $count->videographer = $data['videographer'];
        $count->events_complete = $data['events_complete'];

        $count->update();

        return redirect('admin/count')->with('message', 'Event Counts Updated');
    }
}
