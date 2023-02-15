<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Page;

class FrontController extends Controller
{
    public function home(){
        $sliders = Slider::where('status',1)->get();
        $articles = Article::where('status',1)->get();

        return view('front.home')->with('sliders', $sliders)->with('articles', $articles);
    }

    public function article(){
        $articles = Article::where('status',1)->get();

        return view('front.blog')->with('articles', $articles);
    }

    public function contact(){
        return view('front.contact');
    }

    public function solutions(){
        return view('front.solutions');
    }

    public function silver(){
        return view('front.silver');
    }

    public function gold(){
        return view('front.gold');
    }

    public function platinium(){
        return view('front.platinium');
    }

    public function ultimate(){
        return view('front.ultimate');
    }

    public function ubuntu(){
        return view('front.ubuntu');
    }

    public function apache(){
        $articles = Article::where('status',1)->get();

        return view('front.apache')->with('articles', $articles);
    }

    public function php(){
        $pages = Page::where('status',1)->get();

        return view('front.php')->with('pages', $pages);
    }

    public function mariadb(){
        return view('front.mariadb');
    }

    public function phpmyadmin(){
        return view('front.phpmyadmin');
    }

    public function pureftpd(){
        return view('front.pureftpd');
    }

    public function realvnc(){
        return view('front.realvnc');
    }

    public function aapanel(){
        return view('front.aapanel');
    }
}
