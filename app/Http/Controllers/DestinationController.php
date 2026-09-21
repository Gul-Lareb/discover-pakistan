<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();

        return view('index.destinations.list', compact('destinations'));
    }

    public function create()
    {
        return view('index.destinations.create');
    }

  public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        'region' => 'required|string|max:100',
        'title' => 'required|string|max:100',
        'about' => 'required|string|max:500',
        'best_for' => 'required|string|max:255',
        'button_text' => 'required|string|max:50',
        'button_link' => 'required|string|max:255'
    ]);

    $destination = new Destination();

    $destination->region = $request->region;
    $destination->title = $request->title;
    $destination->about = $request->about;
    $destination->best_for = $request->best_for;
    $destination->button_text = $request->button_text;
    $destination->button_link = $request->button_link;
    $destination->is_active = $request->has('is_active') ? 1 : 0;

    $image = $request->file('image');
    $imageName = time().'_'.$image->getClientOriginalName();
    $image->move(public_path('assets/images'), $imageName);

    $destination->image = $imageName;

    $destination->save();

    return redirect()
        ->route('destinations.list')
        ->with('success', 'Destination added successfully.');
}

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);

        return view('index.destinations.edit', compact('destination'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'region' => 'required|string|max:100',
        'title' => 'required|string|max:100',
        'about' => 'required|string|max:500',
        'best_for' => 'required|string|max:255',
        'button_text' => 'required|string|max:50',
        'button_link' => 'required|string|max:255'
    ]);

    $destination = Destination::findOrFail($id);

    $destination->region = $request->region;
    $destination->title = $request->title;
    $destination->about = $request->about;
    $destination->best_for = $request->best_for;
    $destination->button_text = $request->button_text;
    $destination->button_link = $request->button_link;
    $destination->is_active = $request->has('is_active') ? 1 : 0;

    if($request->hasFile('image')){

        $oldImage = public_path('assets/images/'.$destination->image);

        if($destination->image && is_file($oldImage)){
            unlink($oldImage);
        }

        $image = $request->file('image');
        $imageName = time().'_'.$image->getClientOriginalName();

        $image->move(public_path('assets/images'), $imageName);

        $destination->image = $imageName;
    }

    $destination->save();

    return redirect()
        ->route('destinations.list')
        ->with('success', 'Destination updated successfully.');
}
} 