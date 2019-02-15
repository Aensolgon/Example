<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\Facades\App;
use App\Page;
use App\Review;
use App\Classes\PageBuilder;
use App\ServicesList;
use App\CategoryBlog;
use App\Alfabet;
use Illuminate\Support\Facades\DB;
use Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\LocaleMiddleware;
use Request as R;

class LinkController extends Controller
{
    public function solution(){


        $page = PageBuilder::getLocalizePage('in-solution');
        $services = PageBuilder::getLocalizePage('services');
        $comments = Review::where('status', 1)->get();
        $services = PageBuilder::getLocalizePage('services');
        $weLove = PageBuilder::getLocalizePage('we-love');
        $alpfabet = Alfabet::all();

        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();

        return view('otraslevyye-resheniya', [
            'page' => $page,
            'alfabet'=>$alpfabet,
            //'comments' => $comments,
            'services' => $services,
            //'weLove' => $weLove,
            'menuHead' => $menuHead,
            'services' => $services,
        ]);
    }
}
