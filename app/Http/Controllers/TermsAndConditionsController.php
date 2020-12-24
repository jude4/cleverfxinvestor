<?php

namespace App\Http\Controllers;

use Laracasts\Flash\Flash;
use App\TermsAndConditions;
use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    public function index()
    {
        $terms = TermsAndConditions::find(2);
        return view('terms.index', ['terms' => $terms]); 
    }

    public function store(Request $request)
    {

         $this->validate($request, [
            'body' => 'required', 'string',
        ]);

       
        $work = TermsAndConditions::create(request()->all());

        Flash::success('Terms and conditions saved successfully.');

        return view('terms.index');
    }

    public function show($id)
    {
        $term = TermsAndConditions::find($id);

        if (empty($term)) {
            Flash::error('Opps!, Page not found');

            return redirect(route('terms.index'));
        }

        return view('terms.show')->with('term', $term);
    }

    public function edit($id)
    {
        $term = TermsAndConditions::find($id);

        if (empty($term)) {
            Flash::error('Opps!, Page not found');

            return redirect(route('terms.index'));
        }

        return view('terms.show')->with('term', $term);
    }

    public function update(Request $request, $id)
    {
        $term = TermsAndConditions::find($id);

        if (empty($term)) {
            Flash::error('Page not found not found');

            return redirect(route('terms.index'));
        }

        $term->update(request()->all());

        Flash::success('Terms and conditions updated successfully.');

        return redirect(route('conditions.index'));
    }

}
