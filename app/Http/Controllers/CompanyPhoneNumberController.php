<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyPhoneNumberController extends Controller
{
    public function index()
    {
        return view('phones.index');
    }
}