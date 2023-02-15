<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;

class PageController extends Controller
{
    public function savepage(Request $request){
        $this->validate($request, [
            'page_title' => 'required',
            'page_subtitle' => 'required',
            'page_shortdescription' => 'required',
            'page_longdescription' => 'required',
            'page_image' => 'image|nullable|max:1999'
        ]);

        $fileNameWithExt = $request->file('page_image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $ext = $request->file('page_image')->getClientOriginalExtension();
        $fileNameToStore = $fileName."_".time().".".$ext;
        $path = $request->file('page_image')->storeAs("public/page_images", $fileNameToStore);
        $page = new Page();
        $page->page_title = $request->input('page_title');
        $page->page_subtitle = $request->input('page_subtitle');
        $page->page_shortdescription = $request->input('page_shortdescription');
        $page->page_longdescription = $request->input('page_longdescription');
        $page->page_image = $fileNameToStore;

        $page->save();

        return back()->with("status", "Votre page a été créé avec succès !");

    }

    public function deletepage($id){
        $page = Page::find($id);
        Storage::delete("public/page_images/$page->page_image");
        $page->delete();

        return back()->with("status", "Votre page a été supprimé avec succès !");
    }

    public function addpage(){
        return view('admin.addpage');
    }

    public function editpage($id){
        $page = Page::find($id);
        return view('admin.editpage')->with('page', $page);
    }

    public function pages(){
        return view('admin.pages');
    }

    public function updatepage($id, Request $request){

        $page = Page::find($id);
        $page->page_title = $request->input('page_title');
        $page->page_subtitle = $request->input('page_subtitle');
        $page->page_shortdescription = $request->input('page_shortdescription');
        $page->page_longdescription = $request->input('page_longdescription');

        if($request->file('page_image')){
            $this->validate($request, [
                'page_image' => 'image|nullable|max:1999'
            ]);

            $fileNameWithExt = $request->file('page_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('page_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName."_".time().".".$ext;
            
            Storage::delete("public/page_images/$page->page_image");
            $path = $request->file('page_image')->storeAs("public/page_images", $fileNameToStore);

            $page->page_image = $fileNameToStore;
        }

        $page->update();

        return back()->with("status", "Votre page a été mis à jour avec succès !");

    }

    public function unactivatepage($id){
        $page = Page::find($id);
        $page->status =0;

        $page->update();
        return back();
    }

    public function activatepage($id){
        $page = Page::find($id);
        $page->status =1;

        $page->update();
        return back();
    }

}
