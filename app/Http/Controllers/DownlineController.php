<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DownlineController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(auth()->id());
        $downlines = $user->children()->paginate(6); 
        return view('downlines.index', compact('downlines'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $downlines = $user->children()->paginate(6);
        return view('downlines.show', compact('downlines'));
    }
}