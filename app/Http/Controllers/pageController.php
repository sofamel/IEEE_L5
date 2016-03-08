<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
    function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function index()
    {
//        here we should receive all media data for EX and show by list
//        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
//        if(empty($pages)){
//            return redirect('errors/404');
//        }
        //var_dump(dd($pages));
        //return view('pages.index',compact('pages'));
    }

//    public function getAbout($slug = 'about')
//    {
//        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
//        if(empty($pages)){
//            return redirect('errors/404');
//        }
//        return view('pages.index',compact('pages'));
//    }
//
//    public function getHistory($slug = 'history')
//    {
//        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
//        if(empty($pages)){
//            return redirect('errors/404');
//        }
//        return view('pages.index',compact('pages'));
//    }
//
//    public function getChapter($slug = 'chapter')
//    {
//        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
//        if(empty($pages)){
//            return redirect('errors/404');
//        }
//        return view('pages.index',compact('pages'));
//    }
}
