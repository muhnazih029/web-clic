<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tidak Menggunakan Create Karena Sudah Dimasukkkan ke Modal
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    { 
        // dd($request);
        $validated = $request->validated(); //!! ERROR DI RULENYAH, BENERIN SENDIRI YAH 
        // dd($validated);
        $event = new Event();
        // $event->uuid = Str::uuid();
        $event->name = $validated['name'];
        $event->content = $validated['content'];
        $event->date = $validated['date'];
        $event->location = $validated['location'];
        $event->locationUrl = $validated['locationUrl'];

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('public/img');
            $event->image = basename($filePath);
        }

        $event->userId = auth()->id();
        // dd($event);
        $event->save();

        //?? UDH TA BENERIN REDIRECTNYA
        return redirect()->intended('home')->with('success', 'Event berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('dashboard', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        // Tidak Perlu Karena Sudah Menggunakan Modal Bukan ke Halaman Baru
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $validated = $request->validated();
        $event->name = $validated['name'];
        $event->content = $validated['content'];
        $event->date = $validated['date'];
        $event->location = $validated['location'];
        $event->locationUrl = $validated['locationUrl'];

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('public/img');
            $event->image = basename($filePath);
        }

        $event->save();
        if ($event->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return redirect()->route('dashboard')->with('success', 'Event berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        // return redirect()->route('events.index')->with('success', 'Event berhasil dihapus!');
        return redirect()->route('dashboard')->with('success', 'Event berhasil dihapus!');
    }
}
