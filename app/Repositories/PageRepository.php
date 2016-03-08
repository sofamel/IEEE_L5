<?php
/**
 * Created by PhpStorm.
 * User: Mahdia
 * Date: 2/25/2016
 * Time: 11:27 AM
 */

namespace App\Repositories;
use App\Entities\DidYouKnowSchema;
use App\Models\DidYouKnow;
use App\Models\Page;

class PageRepository
{
    function __construct(Page $pages, DidYouKnow $didYouKnow)
    {
        $this->pages = $pages;
        $this->didYouKnow = $didYouKnow;
    }

    public function getPagesWithAllRelations($group)
    {
        return $this->pages->where('slug', $group)->with('pageComments')
                ->with('tags')->get()->toArray();
    }

    public function getAllRelatedPages()
    {

    }

    public function getDidYouKnow()
    {
        return $this->didYouKnow->get()->random()->toArray();
    }
}