<?php

namespace App\Http\Controllers;

use App\Blog;
use App\FileUpload;
use App\Portfolio;
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


use Zend\Diactoros\UploadedFile;


class RouteController extends Controller
{

    public function getBlogs($id){
        $page = PageBuilder::getLocalizePage('blog');
        $services = PageBuilder::getLocalizePage('services');
        $categoryBlog = CategoryBlog::where('language',App::getLocale())->get();
        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();

        if(App::getLocale() == 'en'){
            $blog = Blog::where('language','eng')->where('status',1)->where('category_blogs',$id)->get();
        }
        else{
            $blog = Blog::where('language','ru')->where('status',1)->where('category_blogs',$id)->get();
        }


        return view('blog',[
            'page' => $page,
            'services' => $services,
            'categoryBlog'=>$categoryBlog,
            'menuHead' => $menuHead

        ]);
    }

    public function getServicePage($url){


        $services = PageBuilder::getLocalizePage('services');
        $weLove = PageBuilder::getLocalizePage('we-love');
        $comments = Review::where('status', 1)->get();
        $commonQuestion = PageBuilder::getLocalizePage('common-question');
        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();
        $page = ServicesList::where('link',$url)->where('status',1)->first();

        return view('kommercheskiy-sayt',[
            'commonQuestion' => $commonQuestion,
            'page' => $page,
            'services' => $services,
            'weLove'=>$weLove,
            'menuHead' => $menuHead,
            'comments' => $comments,
        ]);
    }


    public function welcome()
    {
        $page = PageBuilder::getLocalizePage('main');
        $weLove = PageBuilder::getLocalizePage('we-love');
        $services = PageBuilder::getLocalizePage('services');
        $portfolio = Portfolio::select('title','short_text','link','img_path','tag');


        $comments = Review::where('status',1)->get();
        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();


        return view('welcome',[
            'portfolio' => $portfolio->get(),
            'page' => $page,
            'weLove'=>$weLove,
            'services'=>$services,
            'comments' => $comments,
            'menuHead'=>$menuHead,
        ]);
    }

    public function createSite(){
        $services = PageBuilder::getLocalizePage('services');
        $wordsForYou = PageBuilder::getLocalizePage('word-for-you');
        $diffSite = PageBuilder::getLocalizePage('diff-site');
        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();
        $page = ServicesList::where('lang',App::getLocale())->where('status',1)->first();

        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();

        return view('sozdaniye-saytov',[
            'page' => $page,
            'services' => $services,
            'menuHead' => $menuHead,
            'wordsForYou' => $wordsForYou,
            'diffSite' => $diffSite
        ]);
    }

    public function services()
    {
        $services = PageBuilder::getLocalizePage('services');
        $wordsForYou = PageBuilder::getLocalizePage('word-for-you');
        $comments = Review::where('status', 1)->get();
        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();
        $page = ServicesList::where('lang',App::getLocale())->where('status',1)->first();

        $menuHead = ServicesList::select('id','name','link','service_img','service_text')->where('lang',App::getLocale())->where('status',1)->get();

        return view('sozdaniye-saytov',[
            'page' => $page,
            'services' => $services,
            'menuHead' => $menuHead,
            'wordsForYou' => $wordsForYou,
        ]);
    }

    public function blog()
    {
        $page = PageBuilder::getLocalizePage('blog');
        $services = PageBuilder::getLocalizePage('services');

        $blog = "";
        $categoryBlog = CategoryBlog::where('language',App::getLocale())->get();

        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();

        if(App::getLocale() == 'en'){
            $blog = Blog::where('language','eng')->where('status',1)->get();
        }
        else{
            $blog = Blog::where('language','ru')->where('status',1)->get();
        }


        return view('blog',[
            'page' => $page,
            'services' => $services,
            'blog'=>$blog,
            'categoryBlog'=>$categoryBlog,
            'menuHead' => $menuHead

        ]);
    }

    public function portfolio()
    {
        $page = PageBuilder::getLocalizePage('portfolio');
        $services = PageBuilder::getLocalizePage('services');
        $portfolio = new Portfolio();

        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();

        if(App::getLocale() == 'en'){
            $portfolio = Portfolio::select(DB::Raw('title_en as title'),DB::Raw('tag_en as tag'),DB::Raw('short_text_en as short_text'),'link','img_path');
        }
        else{
            $portfolio = Portfolio::select('title','short_text','link','img_path','tag');
        }

        return view('portfolio',[
           'page' => $page,
            'services' => $services,
            'portfolio' => $portfolio->get(),
            'menuHead' => $menuHead
        ]);
    }

    public function contact()
    {
        $page = PageBuilder::getLocalizePage('contacts');
        $services = PageBuilder::getLocalizePage('services');

        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();


        return view('kontakty',[
            'page' => $page,
            'services' => $services,
            'menuHead' => $menuHead
        ]);
    }


    public function goToPortfolio($link)
    {
        $services = PageBuilder::getLocalizePage('services');
        $portfolio = new Portfolio();
        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();
        $portfolioItem = new Portfolio();

        if(App::getLocale() == 'en'){
            $portfolio = Portfolio::select(DB::Raw('title_en as title'),DB::Raw('short_text_en as short_text'),'link','img_path');
            $portfolioItem = Portfolio::select(DB::Raw('title_en as title'),DB::Raw('short_text_en as short_text'),'link','img_path')->where('link',$link);
        }
        else {
            $portfolio = Portfolio::select('title','short_text','link','img_path');
            $portfolioItem = Portfolio::select('title', 'short_text', 'link', 'img_path')->where('link', $link);
        }

            return view("portfolio-proekt",[
                'portfolioList'=>$portfolioItem->first(),
                'portfolio'=>$portfolio->get(),
                'menuHead' => $menuHead,
                'services' => $services,
            ]);

    }

    public function digital(){
        $page = PageBuilder::getLocalizePage('reklama');

        $comments = Review::where('status', 1)->get();
        $services = PageBuilder::getLocalizePage('services');
        $askForm = PageBuilder::getLocalizePage('ask-form');
        $idealFor = PageBuilder::getLocalizePage('ideal');
        $wordForYou = PageBuilder::getLocalizePage('word-for-you');
        $commonQuestion = PageBuilder::getLocalizePage('common-question');
        $questionForm = PageBuilder::getLocalizePage('question-form');

        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();


        return view('poiskovaya-reklama', [
            'askForm'=>$askForm,
            'idealForm' => $idealFor,
            'wordForYou' => $wordForYou,
            'commonQuestion'=>$commonQuestion,
            'page' => $page,
            'comments' => $comments,
            'services' => $services,
            'menuHead' => $menuHead,
            'questionForm' => $questionForm
        ]);
    }

    public function digitalAdvertisingPage()
    {

    }

    public function goToAfla($alfaUrl)
    {

        $alfabet = Alfabet::where('link', $alfaUrl)->first();
        $comments = Review::where('status', 1)->get();
        $services = PageBuilder::getLocalizePage('services');
        $askForm = PageBuilder::getLocalizePage('ask-form');
        $idealFor = PageBuilder::getLocalizePage('ideal');
        $wordForYou = PageBuilder::getLocalizePage('word-for-you');
        $commonQuestion = PageBuilder::getLocalizePage('common-question');
        $questionForm = PageBuilder::getLocalizePage('question-form');

        $menuHead = ServicesList::select('id','name','link','service_img','service_text')->where('lang',App::getLocale())->where('status',1)->get();

        return view('alfabet', [
            'uploadImages'=>FileUpload::where('alfabet_id',$alfabet->id)->get(),
            'alfabet' => $alfabet,
            'askForm' => $askForm,
            'idealForm' => $idealFor,
            'wordForYou' => $wordForYou,
            'commonQuestion' => $commonQuestion,
            'comments' => $comments,
            'services' => $services,
            'menuHead' => $menuHead,
            'questionForm' => $questionForm
        ]);
    }

    public function getBlog($name){

        $menuHead = ServicesList::select('id','name','link')->where('lang',App::getLocale())->where('status',1)->get();
        $categoryBlog = CategoryBlog::where('language',App::getLocale())->get();

        $blog = Blog::where('link',$name)->first();
        $services = PageBuilder::getLocalizePage('services');
        return view('blog-art',[
            'categoryBlog' => $categoryBlog,
            'blog'=>$blog,
            'services' => $services,
            'menuHead' => $menuHead
        ]);
    }

    public function changeLang($lang){

    }

}
