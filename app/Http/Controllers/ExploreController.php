<?php

namespace App\Http\Controllers;

use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        $explores = Explore::all();
        return view('index.explore.list', compact('explores'));
    }

    public function create()
    {
        return view('index.explore.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'card1_title'=>'required|string|max:100',
            'card1_description'=>'required|string|max:255',
            'card1_button'=>'required|string|max:50',
            'card1_link'=>'required|string|max:255',

            'card2_title'=>'required|string|max:100',
            'card2_description'=>'required|string|max:255',
            'card2_button'=>'required|string|max:50',
            'card2_link'=>'required|string|max:255',

            'card3_title'=>'required|string|max:100',
            'card3_description'=>'required|string|max:255',
            'card3_button'=>'required|string|max:50',
            'card3_link'=>'required|string|max:255',
        ]);

        Explore::create($request->only([
            'card1_title','card1_description','card1_button','card1_link',
            'card2_title','card2_description','card2_button','card2_link',
            'card3_title','card3_description','card3_button','card3_link'
        ]));

        return redirect()->route('explore.list')->with('success','Explore More section added successfully.');
    }

    public function edit($id)
    {
        $explore = Explore::findOrFail($id);
        return view('index.explore.edit', compact('explore'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'card1_title'=>'required|string|max:100',
            'card1_description'=>'required|string|max:255',
            'card1_button'=>'required|string|max:50',
            'card1_link'=>'required|string|max:255',

            'card2_title'=>'required|string|max:100',
            'card2_description'=>'required|string|max:255',
            'card2_button'=>'required|string|max:50',
            'card2_link'=>'required|string|max:255',

            'card3_title'=>'required|string|max:100',
            'card3_description'=>'required|string|max:255',
            'card3_button'=>'required|string|max:50',
            'card3_link'=>'required|string|max:255',
        ]);

        $explore = Explore::findOrFail($id);

        $explore->fill($request->only([
            'card1_title','card1_description','card1_button','card1_link',
            'card2_title','card2_description','card2_button','card2_link',
            'card3_title','card3_description','card3_button','card3_link'
        ]));

        if($request->is_active){
            Explore::where('id','!=',$id)->update(['is_active'=>0]);
            $explore->is_active=1;
        }

        $explore->save();

        return redirect()->route('explore.list')->with('success','Explore More section updated successfully.');
    }

    public function destroy($id)
    {
        $explore = Explore::findOrFail($id);

        if($explore->is_active)
            return back()->with('error','Select another Explore More section as active first!');

        $explore->delete();

        return redirect()->route('explore.list')->with('success','Explore More section deleted successfully.');
    }
}