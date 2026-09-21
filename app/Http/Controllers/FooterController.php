<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        return view('index.footer.list', compact('footer'));
    }

    public function create()
    {
        return view('index.footer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'instagram_link'=>'nullable|string|max:255',
            'facebook_link'=>'nullable|string|max:255',
            'youtube_link'=>'nullable|string|max:255',
            'linkedin_link'=>'nullable|string|max:255',
            'description'=>'required|string|max:255',
            'tagline'=>'required|string|max:150'
        ]);

        if(Footer::exists()){
            return redirect()->route('footer.list')->with('error','Footer already exists. Please edit the existing footer.');
        }

        Footer::create($request->only([
            'instagram_link',
            'facebook_link',
            'youtube_link',
            'linkedin_link',
            'description',
            'tagline'
        ]));

        return redirect()->route('footer.list')->with('success','Footer added successfully.');
    }

    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        return view('index.footer.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'instagram_link'=>'nullable|string|max:255',
            'facebook_link'=>'nullable|string|max:255',
            'youtube_link'=>'nullable|string|max:255',
            'linkedin_link'=>'nullable|string|max:255',
            'description'=>'required|string|max:255',
            'tagline'=>'required|string|max:150'
        ]);

        $footer = Footer::findOrFail($id);

        $footer->update($request->only([
            'instagram_link',
            'facebook_link',
            'youtube_link',
            'linkedin_link',
            'description',
            'tagline'
        ]));

        return redirect()->route('footer.list')->with('success','Footer updated successfully.');
    }
}