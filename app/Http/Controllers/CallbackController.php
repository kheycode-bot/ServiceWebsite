<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Callback;

class CallbackController extends Controller
{
    // Display all callbacks
    public function index()
    {
        $callbacks = Callback::latest()->get();
        return view('callbacks.index', compact('callbacks'));
    }

    // Store a new callback request
    public function store(Request $request)
{
    $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|regex:/^[0-9\-\+\s]+$/|min:10|max:15',
            'purpose' => 'required|string|max:200',
            'message' => 'required|string|max:1000',
    ]);

    // Save form data to database
    $callback = Callback::create($request->all());

    // Send email notification
    Mail::to('admin@example.com')->send(new CallbackMail($request->all()));

    return redirect()->back()->with('success', 'Your request has been sent successfully!');
}
}