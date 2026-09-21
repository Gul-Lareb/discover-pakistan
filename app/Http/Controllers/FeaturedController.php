<?php

namespace App\Http\Controllers;

use App\Models\Featured;
use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function index()
    {
        $featureds = Featured::all();
        return view('index.featured.list', compact('featureds'));
    }

    public function create()
    {
        return view('index.featured.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'card1_image'=>'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card2_image'=>'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card3_image'=>'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card1_btn_link'=>'required|url','card2_btn_link'=>'required|url','card3_btn_link'=>'required|url'
        ]);

        $featured = new Featured();

        // Card 1
        $featured->card1_region = $request->card1_region;
        $featured->card1_title = $request->card1_title;
        $featured->card1_description = $request->card1_description;
        $featured->card1_best_for = $request->card1_best_for;
        $featured->card1_btn_txt = $request->card1_btn_txt;
        $featured->card1_btn_link = $request->card1_btn_link;

        $image1 = $request->file('card1_image');
        $image1Name = time().'_1_'.$image1->getClientOriginalName();
        $image1->move(public_path('assets/images'), $image1Name);
        $featured->card1_image = $image1Name;


        // Card 2
        $featured->card2_region = $request->card2_region;
        $featured->card2_title = $request->card2_title;
        $featured->card2_description = $request->card2_description;
        $featured->card2_best_for = $request->card2_best_for;
        $featured->card2_btn_txt = $request->card2_btn_txt;
        $featured->card2_btn_link = $request->card2_btn_link;

        $image2 = $request->file('card2_image');
        $image2Name = time().'_2_'.$image2->getClientOriginalName();
        $image2->move(public_path('assets/images'), $image2Name);
        $featured->card2_image = $image2Name;


        // Card 3
        $featured->card3_region = $request->card3_region;
        $featured->card3_title = $request->card3_title;
        $featured->card3_description = $request->card3_description;
        $featured->card3_best_for = $request->card3_best_for;
        $featured->card3_btn_txt = $request->card3_btn_txt;
        $featured->card3_btn_link = $request->card3_btn_link;

        $image3 = $request->file('card3_image');
        $image3Name = time().'_3_'.$image3->getClientOriginalName();
        $image3->move(public_path('assets/images'), $image3Name);
        $featured->card3_image = $image3Name;

        $featured->save();
        return redirect()->route('featured.list')->with('success','Featured section added successfully.');
    }

    public function edit($id)
    {
        $featured = Featured::findOrFail($id);
        return view('index.featured.edit',compact('featured'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'card1_image'=>'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card2_image'=>'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card3_image'=>'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'card1_btn_link'=>'required|url','card2_btn_link'=>'required|url','card3_btn_link'=>'required|url'
        ]);

        $featured=Featured::findOrFail($id); $fields=['region','title','description','best_for','btn_txt','btn_link'];

        for($i=1;$i<=3;$i++){
            foreach($fields as $field){ $name="card{$i}_{$field}"; $featured->$name=$request->$name; }

            $imageField="card{$i}_image";

        if($request->hasFile($imageField)){
            if($featured->$imageField){
                $old=public_path('assets/images/'.$featured->$imageField);
                if(is_file($old)) unlink($old);
    }

    $image=$request->file($imageField); $name=time()."_{$i}_".$image->getClientOriginalName();
    $image->move(public_path('assets/images'),$name); $featured->$imageField=$name;
}
        }

        if($request->is_active){ Featured::where('id','!=',$id)->update(['is_active'=>0]); $featured->is_active=1; }

        $featured->save();
        return redirect()->route('featured.list')->with('success','Featured section updated successfully.');
    }


    public function destroy($id)
    {
        $featured=Featured::findOrFail($id);
        if($featured->is_active) return back()->with('error','Select another featured section as active first!');

       // Delete Card 1 image
        $image1 = public_path('assets/images/'.$featured->card1_image);

        if($featured->card1_image && is_file($image1)){
            unlink($image1);
        }


        // Delete Card 2 image
        $image2 = public_path('assets/images/'.$featured->card2_image);

        if($featured->card2_image && is_file($image2)){
            unlink($image2);
        }


        // Delete Card 3 image
        $image3 = public_path('assets/images/'.$featured->card3_image);

        if($featured->card3_image && is_file($image3)){
            unlink($image3);
        }

                $featured->delete();
                return redirect()->route('featured.list')->with('success','Featured section deleted successfully.');
            }
        }