<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect()->route('events.index');
    }
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Evento eliminado correctamente');
    }
}