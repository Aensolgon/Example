<?php

namespace App\Http\Middleware;

use Closure;
use App\Linkmenu;
use App\Classes\Debug;
use Request;
use App\ServicesList;
use App;

class BreadCrumbs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public static $breadcrumbs = [];


    public static function getBreadCrumbs(){
        $uri = Request::path();
        $segmentsURI = explode('/',$uri);
       // Debug::debug($segmentsURI);
        $valueMain = "Главная";
        if(App::getLocale() == "en"){
            $valueMain = "Main";

            foreach($segmentsURI as $key=>$value){
                if($value != "" && $value!="eng"){
                    $crumb = Linkmenu::where('linkEn', 'LIKE', '%'.$value.'%')->first();
                    if($key==count($segmentsURI)-1){
                        $breadcrumbs['#'] = $crumb['nameEn'];
                    }
                    else{
                        $breadcrumbs[$crumb['linkEn']] = $crumb['nameEn'];
                    }

                }
            }
        }
        else{
            foreach($segmentsURI as $key=>$value){
                if($value != "" && $value!="eng"){
                    $crumb = Linkmenu::where('linkRu', 'LIKE', '%'.$value.'%')->first();
                    if($key==count($segmentsURI)-1){
                        $breadcrumbs['#'] = $crumb['nameRu'];
                    }
                    else{
                        $breadcrumbs[$crumb['linkRu']] = $crumb['nameRu'];
                    }

                }
            }

        }
        $breadcrumbs["/"] = $valueMain;
        return $breadcrumbs;
    }

    public function handle($request, Closure $next)
    {   
              
        return $next($request);
    }
}
