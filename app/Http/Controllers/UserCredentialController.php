<?php

namespace App\Http\Controllers;

use App\Credential;
use App\Models\User;
use App\Notifications\CredentialConfirmation;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class UserCredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credentials = Credential::with('user')->latest()->get();
        return view('users-credentials.index', compact('credentials'));
    }

    
    public function confirmCredential($id)
    {
        $credential = Credential::find($id);

        $credential->status = true;

        $credential->save();
        $user = User::find($credential->user_id);
        // Send a email notification
        $user->notify(new CredentialConfirmation($user));

        Flash::success('Confirmed');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $credential = Credential::find($id)->with('user')->first();

        return view('users-credentials.show', compact('credential'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}