<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhySection;

class WhySectionController extends Controller
{
    public function index()
    {
        $whysections = WhySection::all();

        return view('index.whysection.list', compact('whysections'));
    }


    public function create()
    {
        return view('index.whysection.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'sub_title'     => 'required',
            'card1_number'  => 'required',
            'card1_text'    => 'required',
            'card2_number'  => 'required',
            'card2_text'    => 'required',
            'card3_number'  => 'required',
            'card3_text'    => 'required',
        ]);

        WhySection::create($request->all());

        return redirect()
            ->route('whysection.index')
            ->with('success','Why Pakistan section added successfully.');
    }


    public function edit($id)
    {
        $why = WhySection::findOrFail($id);

        return view('index.whysection.edit', compact('why'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required',
            'sub_title'     => 'required',
            'card1_number'  => 'required',
            'card1_text'    => 'required',
            'card2_number'  => 'required',
            'card2_text'    => 'required',
            'card3_number'  => 'required',
            'card3_text'    => 'required',
        ]);

        $why = WhySection::findOrFail($id);

        $why->update($request->all());

        return redirect()
            ->route('whysection.index')
            ->with('success','Why Pakistan section updated successfully.');
    }


    public function destroy($id)
    {
        $why = WhySection::findOrFail($id);

        $why->delete();

        return redirect()
            ->route('whysection.index')
            ->with('success','Why Pakistan section deleted successfully.');
    }
}