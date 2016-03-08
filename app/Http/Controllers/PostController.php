<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\PostRepository;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index($category, $slug)
    {
        $posts = $this->postRepository->getPostsTitleWithSameCategory($category);
        dd(var_dump($posts));
        $posts = $this->postRepository->getPostsWithAllRelations($slug);
        if(empty($posts)){
            return redirect('errors/404');
        }
        //var_dump(dd($posts));
        return view('posts.index',compact('posts'));
    }
}
