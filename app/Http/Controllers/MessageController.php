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
    public function index(): View
    {
        $data = [
            'judul' => 'Customer Messages',
            'DataM' => Message::latest()->get(),
            'cMC' => Message::where('status_messages', 'Unread')->count(),
        ];
        return view('pages.admin.message', $data);
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
    public function store(Request $request)
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
    public function show(string $id)
    {
        $message = Message::findOrFail($id);

        $message->update([
            'status_messages'   => 'Read',
            'modified_by'       => Auth::user()->email,
        ]);

        $data = [
            'judul' => 'Detail Message',
            'DetailM' => Message::findOrFail($id),
            'cMC' => Message::where('status_messages', 'Unread')->count(),
        ];
        return view('pages.admin.message_detail', $data);
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
    public function update(string $id): RedirectResponse
    {
        $message = Message::findOrFail($id);

        $message->update([
            'status_messages'   => 'Unread',
            'modified_by'       => Auth::user()->email,
        ]);

        return redirect()->route('message.data')->with(['success' => 'Message marked Unread!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get by ID
        $message = Message::findOrFail($id);

        //delete
        $message->delete();

        //redirect to index
        return redirect()->route('message.data')->with(['success' => 'Message has been Deleted!']);
    }
}
