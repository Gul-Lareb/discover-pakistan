<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('index.banner.list', compact('banners'));
    }

    public function create()
    {
        return view('index.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:50',
            'sub_title' => 'required|string|max:100',
            'btn_txt'   => 'required|string|max:20',
            'btn_link'  => 'required|url',
            'bg_img'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->btn_txt = $request->btn_txt;
        $banner->btn_link = $request->btn_link;

        $image = $request->file('bg_img');
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('assets/images'), $imageName);
        $banner->bg_img = $imageName;

        $banner->save();

        return redirect()->route('banner.list')
            ->with('success', 'Banner added successfully.');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('index.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => 'required|string|max:50',
            'sub_title' => 'required|string|max:200',
            'btn_txt'   => 'required|string|max:20',
            'btn_link'  => 'required|url',
            'bg_img'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $banner = Banner::findOrFail($id);

        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->btn_txt = $request->btn_txt;
        $banner->btn_link = $request->btn_link;

        if ($request->hasFile('bg_img')) {
            $oldImage = public_path('assets/images/'.$banner->bg_img);

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $image = $request->file('bg_img');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('assets/images'), $imageName);

            $banner->bg_img = $imageName;
        }

        // This code will only run for current inactive banner
       if ($request->is_active) {
                Banner::where('id', '!=', $id)->update(['is_active' => 0]);
                $banner->is_active = 1;
        } 
         

        $banner->save();

        return redirect()->route('banner.list')->with('success', 'Banner updated successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        if($banner->is_active){
        return redirect()->back()->with('error', 'Select any other as active banner first! and try again!');
        }

        $image = public_path('assets/images/'.$banner->bg_img);
        if (file_exists($image)) {
            unlink($image);
        }

        $banner->delete();

        return redirect()->route('banner.list')->with('success', 'Banner deleted successfully.');
    }
}