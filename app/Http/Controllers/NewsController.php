<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = news::getNews();
        return view('news')->with('news', $news);
    }
    public function show($id){
        $news = news::getNewsId($id);
//        dump($news);
        return view('newsOne')->with('news', $news);
    }

    public function сategory(){
        $category = news::getCategorys();
//        dd($news);
        return view('category')->with('category', $category);
    }
}
