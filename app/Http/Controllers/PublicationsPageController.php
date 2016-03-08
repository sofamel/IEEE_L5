<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;

class PublicationsPageController extends Controller
{
    function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function getIndex($slug = 'publications')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getArticles($slug = 'Articles')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getNewsletter($slug = 'Newsletter')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getSubscription($slug = 'Subscription')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }
}
