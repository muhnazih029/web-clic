<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();

        $event = new Event();
        $event->uuid = Str::uuid();
        $event->name = $validated['name'];
        $event->content = $validated['content'];
        $event->date = $validated['date'];
        $event->location = $validated['location'];
        $event->locationUrl = $validated['locationUrl'];

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('public/images');
            $event->image = basename($filePath);
        }

        $event->userId = auth()->id();
        $event->save();

        return redirect()->route('home')->with('success', 'Event berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
