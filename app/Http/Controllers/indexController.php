<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Models\Category;
class indexController extends Controller
{
    function __construct(Post $posts , Category $categories)
    {
        $this->posts = $posts;
        $this->categories = $categories;
    }

    public function index() {
        $slider = $this->posts->where('slider', true)->orderBy('created_at','desc')->take(3)->get()->toArray();
        $catNews = $this->categories->where('title', 'News')->get()->toArray()[0]['id'];
        $catWorkshops = $this->categories->where('title', 'workshops')->get()->toArray()[0]['id'];
        $catArticles = $this->categories->where('title', 'articles')->get()->toArray()[0]['id'];
        //$catClasses = $this->categories->where('title', 'classes')->get()->toArray()[0]['id'];
        $news = $this->posts->where(['category_id'=> $catNews, 'slider'=>'false'])->orderBy('created_at','desc')->take(3)->get()->toArray();
        $workshops = $this->posts->where('category_id', $catWorkshops)->orderBy('created_at','desc')->take(4)->get()->toArray();
        $articles = $this->posts->where('category_id', $catArticles)->orderBy('created_at','desc')->take(3)->get()->toArray();
//        dd(var_dump($slider));
//        $workshops = $this->posts->where('id', 2);
//        $classes = $this->posts->where('id', 3);
//        $articles = $this->posts->where('id', 4);

        //dd(var_dump($articles));
        return view('index', compact(['slider','news','articles']));
    }
}
