<?php

namespace App\Http\Controllers;

use App\HowItWork;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class HowItWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = HowItWork::latest()->paginate(6);

        return view('how-it-work.index', ['works' => $works]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('how-it-work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required', 'string',
            'description' => 'required', 'string'
        ]);

        $work = HowItWork::create(request()->all());

        Flash::success('How it works saved successfully.');
    

        return redirect(route('works.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = HowItWork::find($id);

        if (empty($work)) {
            Flash::error('How it work not found');

            return redirect(route('works.index'));
        }

        return view('how-it-work.show')->with('work', $work);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = HowItWork::find($id);

        if (empty($work)) {
            Flash::error('How it work not found');

            return redirect(route('works.index'));
        }

        return view('how-it-work.edit')->with('work', $work);
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
        $work = HowItWork::find($id);

        if (empty($work)) {
            Flash::error('How it work not found');

            return redirect(route('works.index'));
        }

        $work->update(request()->all());

        Flash::success('How it works updated successfully.');

        return redirect(route('works.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = HowItWork::find($id);

        if (empty($work)) {
            Flash::error('How it work not found');

            return redirect(route('works.index'));
        }

        $work->delete($id);

        Flash::success('How it work deleted successfully.');

        return redirect(route('works.index'));
    }
}
