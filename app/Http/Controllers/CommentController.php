<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Display a listing of the resource.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Show the form for creating a new resource.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        //Store a newly created resource in storage.
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //Display the specified resource
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //Show the form for editing the specified resource
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //Update the specified resource in storage
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //Remove the specified resource from storage
    }
}
