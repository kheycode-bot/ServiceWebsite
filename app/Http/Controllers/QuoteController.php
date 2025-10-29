<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequestMail;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|regex:/^[0-9\-\+\s]+$/|min:10|max:15',
            'purpose' => 'required|string|max:200',
            'message' => 'required|string|max:1000',
        ]);

        // Store the quote request in the database
        $quote = Quote::create($request->all());

        // Send an email to the company
        Mail::to('yourcompany@example.com')->send(new QuoteRequestMail($quote));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your request has been submitted. We will contact you soon.');
    }
}
