<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Page;

class AdminController extends Controller
{

    public function home(){
        return view('admin.home');
    }

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function categories(){
        $categories = Category::get();
        return view('admin.categories')->with("categories", $categories);
    }

    public function addslider(){
        return view('admin.addslider');
    }

    public function sliders(){
        $sliders = Slider::get();
        return view('admin.sliders')->with('sliders', $sliders);
    }

    public function addarticle(){
        return view('admin.addarticle');
    }    
    
    public function articles(){
        $articles = Article::get();
        return view('admin.articles')->with('articles', $articles);
    }

    public function addpage(){
        return view('admin.addpage');
    }    
    
    public function pages(){
        $pages = Page::get();
        return view('admin.pages')->with('pages', $pages);
    }
}
