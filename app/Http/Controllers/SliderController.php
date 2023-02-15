<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;

class SliderController extends Controller
{
    public function sliders(){
        return view('admin.sliders');
    }

    public function addslider(){
        return view('admin.addslider');
    }

    public function editslider($id){
        $slider = Slider::find($id);

        return view('admin/editslider')->with("slider", $slider);
    }

    public function updateslider($id, Request $request){
        $slider = Slider::find($id);
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');

        if($request->file('image')){
            $this->validate($request, [
                'image' => 'image|nullable|max:1999'
            ]);

            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName."_".time().".".$ext;
            
            Storage::delete("public/slider_images/$slider->image");
            $path = $request->file('image')->storeAs("public/slider_images", $fileNameToStore);

            $slider->image = $fileNameToStore;
        }

        $slider->update();

        return back()->with("status", "Votre diapositive a été mis à jour avec succès !");
    }

    public function deleteslider($id){
        $slider = Slider::find($id);
        Storage::delete("public/slider_images/$slider->image");
        $slider->delete();

        return back()->with("status", "Votre diapositive a été supprimé avec succès !");

    }

    public function saveslider(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        // getting file name with extension
        $fileNameWithExt = $request->file('image')->getClientOriginalName();

        // Getting file
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Getting extension
        $ext = $request->file('image')->getClientOriginalExtension();

        // File name to store
        $fileNameToStore = $fileName."_".time().".".$ext;

        // Uploading image in the Laravel file
        $path = $request->file('image')->storeAs("public/slider_images", $fileNameToStore);

        $slider = new slider();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->image = $fileNameToStore;

        $slider->save();

        return redirect('admin/sliders')->with("status", "Votre diapositive a été créé avec succès !");

    }

    public function unactivateslider($id){
        $slider = Slider::find($id);
        $slider->status =0;

        $slider->update();
        return back();
    }

    public function activateslider($id){
        $slider = Slider::find($id);
        $slider->status =1;

        $slider->update();
        return back();
    }
}
