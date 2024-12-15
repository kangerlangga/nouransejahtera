<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MessageController extends Controller
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
    public function store(Request $request): RedirectResponse
    {
        // validate form
        $request->validate([
            'name'      => 'required|max:255',
            'phone'     => 'required|numeric|max_digits:20',
            'email'     => 'required|email|max:255',
            'subject'   => 'required|max:255',
            'message'   => 'required',
        ]);

        //create
        Message::create([
            'id_messages'       => 'Message'.Str::random(33),
            'name_messages'     => $request->name,
            'email_messages'    => $request->email,
            'phone_messages'    => $request->phone,
            'subject_messages'  => $request->subject,
            'content_messages'  => $request->message,
            'status_messages'   => 'Unread',
            'created_by'        => $request->email.' (Customer)',
            'modified_by'       => $request->email.' (Customer)',
        ]);

        //redirect
        if ($request->source == "Home") {
            return redirect()->route('home.publik')->with(['success' => 'Your message has been Sent!']);
        }elseif ($request->source == "Contact") {
            return redirect()->route('contact.publik')->with(['success' => 'Your message has been Sent!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
