<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;

class AboutPageController extends Controller
{
    function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function getIndex($slug = 'about')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getIeee($slug = 'ieee')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getHistory($slug = 'history')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getIact($slug = 'iact')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getAwards($slug = 'awards')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getElections($slug = 'election')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }

    public function getGoverningDocuments($slug = 'GoverningDocuments')
    {
        $pages = $this->pageRepository->getPagesWithAllRelations($slug);
        if(empty($pages)){
            return redirect('errors/404');
        }
        return view('pages.index',compact('pages'));
    }
}
