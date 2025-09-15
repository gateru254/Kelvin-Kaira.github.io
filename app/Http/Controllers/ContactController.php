<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::raw("Message from: {$data['name']} ({$data['email']})\n\n{$data['message']}", function ($msg) use ($data) {
            $msg->to('yourname@email.com') // your email
                ->subject('New Contact Form Message');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
