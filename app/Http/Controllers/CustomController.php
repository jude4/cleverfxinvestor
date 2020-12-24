<?php

namespace App\Http\Controllers;

use App\Mail\CustomMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Message;

class CustomController extends Controller
{
    public function index(Request $request)
    {
        // $users = User::find($request->email);
        // return new CustomMail($user);
        $users = User::all();
        return view('custom.index', compact('users'));
    }

    public function sendCustomMail(Request $request)
    {

        $this->validate($request, [
             'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        
        $message = Message::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);        

        Mail::to($request->email)->send(new CustomMail($request));

        // return new CustomMail($request);
        Flash::success('Email Sent was Successful');

        return redirect()->back();
    }

    public function sentMessages()
    {
        $messages = Message::latest()->paginate(6);

        return view('custom.table', compact('messages'));
    }

    public function editEmails()
    {
        return view('custom.edit-emails');
    }

    public function deleteMessage($id)
    {
        $message = Message::find($id);
        $message->delete();
        Flash::success('Message has been deleted successfully!');
        return redirect()->back();
    }
    
}