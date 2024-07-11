<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Support\Str;
use App\Http\Requests\StoreDiscussionRequest;
use App\Http\Requests\UpdateDiscussionRequest;

class DiscussionController extends Controller
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
    public function store(StoreDiscussionRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        // Cek apakah eventId ada di tabel events
        // $eventExists = \App\Models\Event::where('id', $request->input('eventId'))->exists();

        // if (!$eventExists) {
        //     return redirect()->back()->withErrors(['eventId' => 'Event ID tidak valid.']);
        // }

        $discussion = new Discussion();
        $discussion->uuid = Str::uuid();
        // $discussion->eventId = $request->input('eventId');
        $discussion->content = $validated['content'];

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('public/images');
            $discussion->image = basename($filePath);
        }

        $discussion->userId = auth()->id();
        // dd($discussion);
        // dd($filePath, $discussion);
        $discussion->save();

        //!!INI ERROR BG
        // return redirect()->route('home')->with('success', 'Diskusi berhasil dibuat!');
        //?? INI YANG BENER
        return redirect()->intended('home')->with('success', 'Discussion has been created!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Discussion $discussion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiscussionRequest $request, Discussion $discussion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discussion $discussion)
    {
        //
    }
}
