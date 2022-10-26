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
        return view('newsOne')->with('news', $news);
    }
//список категорий
    public function сategory(){
        $category = news::getCategorys();
        return view('category')->with('category', $category);
    }

    public function categoryNews($id){
        $categoryNews = news::getCategoryNews($id);
        return view('categoryNews')->with('categoryNews', $categoryNews);
    }
}

