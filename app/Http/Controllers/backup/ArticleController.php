<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;

class ArticleController extends Controller
{

    public function savearticle(Request $request){
        $this->validate($request, [
            'article_title' => 'required',
            'article_shortdescription' => 'required',
            'article_longdescription' => 'required',
            'article_image' => 'image|nullable|max:1999'
        ]);

        $fileNameWithExt = $request->file('article_image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $ext = $request->file('article_image')->getClientOriginalExtension();
        $fileNameToStore = $fileName."_".time().".".$ext;
        $path = $request->file('article_image')->storeAs("public/article_images", $fileNameToStore);
        $article = new Article();
        $article->article_title = $request->input('article_title');
        $article->article_shortdescription = $request->input('article_shortdescription');
        $article->article_longdescription = $request->input('article_longdescription');
        $article->article_image = $fileNameToStore;

        $article->save();

        return back()->with("status", "Votre article a été créé avec succès !");

    }

    public function deletearticle($id){
        $article = Article::find($id);
        Storage::delete("public/article_images/$article->article_image");
        $article->delete();

        return back()->with("status", "Votre article a été supprimé avec succès !");
    }

    public function addarticle(){
        return view('admin.addarticle');
    }

    public function editarticle($id){
        $article = Article::find($id);
        return view('admin.editarticle')->with('article', $article);
    }

    public function articles(){
        return view('admin.articles');
    }

    public function updatearticle($id, Request $request){

        $article = Article::find($id);
        $article->article_title = $request->input('article_title');
        $article->article_shortdescription = $request->input('article_shortdescription');
        $article->article_longdescription = $request->input('article_longdescription');

        if($request->file('article_image')){
            $this->validate($request, [
                'article_image' => 'image|nullable|max:1999'
            ]);

            $fileNameWithExt = $request->file('article_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('article_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName."_".time().".".$ext;
            
            Storage::delete("public/article_images/$article->article_image");
            $path = $request->file('article_image')->storeAs("public/article_images", $fileNameToStore);

            $article->article_image = $fileNameToStore;
        }

        $article->update();

        return back()->with("status", "Votre article a été mis à jour avec succès !");

    }

    public function unactivatearticle($id){
        $article = Article::find($id);
        $article->status =0;

        $article->update();
        return back();
    }

    public function activatearticle($id){
        $article = Article::find($id);
        $article->status =1;

        $article->update();
        return back();
    }
}
