<?php
use App\Http\Middleware\LocaleMiddleware;

use Request as R;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::group(['prefix' =>  App\Http\Middleware\LocaleMiddleware::getLocale(),'middleware' => ['breadcrumbs']], function(){
    Route::group(['prefix' => "admin",'middleware'=>['auth']],function(){
        Route::get('/settings-add','AdminController@addSetting')->name('addSetting');
        Route::get('/service/{id}/edit','AdminController@editService')->name('service-edit');
        Route::get('/service/add','AdminController@addService')->name('service-add');
        Route::get('/', 'AdminController@main')->name('admin');
        Route::get('/reviews', 'AdminController@pageReview')->name('page-reviews');
        Route::get('/settings', 'AdminController@settings')->name('settings');
        Route::get('/settings/save', 'AdminController@saveSettings')->name('settings-save');
        Route::get('/blogs', 'AdminController@blogList')->name('blogs');
        Route::get('/create', 'AdminController@createBlog')->name('create-blog');
        Route::post('/save-blog', 'AdminController@saveBlog')->name('save-blog');
        Route::post('/save-edit-blog','AdminController@saveEditBlog')->name('save-edit-blog');
        Route::get('/blogs/edit-blog/{id}', 'AdminController@editBlog')->name('edit-blog');
        Route::get('/blogs/delete-blog/{id}', 'AdminController@deleteBlog')->name('delete-blog');
        Route::get('/save-category-menu','AdminController@changeCategory')->name('changeCategory');
        Route::get('/role-list','AdminController@roleList')->name('role-list');
        Route::get('/save-role','AdminController@saveRole')->name('save-role');
        Route::get('/alfabet-list','AdminController@alfabetList')->name('alfabet-list');
        Route::post('/alfabet-list','AdminController@addParagraph')->name('add-paragraph');
        Route::post('/alfabet-list/save','AdminController@editParagraph')->name('edit-paragraph');
        Route::get('/portfolio-list','AdminController@portfolioList')->name('portfolio-admin');
        Route::post('/portfolio-edit','AdminController@portfolioEdit')->name('edit-portfolio');
        Route::post('/portfolio-add','AdminController@portfolioAdd')->name('add-portfolio');
        Route::get('/services-list','AdminController@servicesList')->name('services-list');
        Route::Post('services-save','AdminController@servicesEdit')->name('save-services');
        Route::Post('services-add','AdminController@servicesAdd')->name('add-services');
        Route::Get('/typograph','AdminController@typograph')->name('typograph');
        Route::Get('/edit-alfabet/{id}','AdminController@editAlfabet')->name('edit-alfabet');
        Route::Post('/save-alfabet','AdminController@saveAlfabet')->name('save-alfabet');
        Route::Get('/delete-image/{id}','AdminController@deleteImage')->name('delete-image');

        Route::get('blog/getBlog/{id}','RouteController@getBlogs')->name('takeBlog');

        Route::get('/create-review', 'AdminController@createReview')->name('create-review');
        Route::post('/save', 'AdminController@saveReview')->name('save-review');
        Route::post('fileUpload', [
            'as'=>'fileUpload',
            'uses'=>'AdminController@fileUpload']);
        Route::group(['prefix' => "page-list"],function(){
            Route::get('/', 'AdminController@pageList')->name('page-list');
            Route::get('edit-page/{id}', 'AdminController@showEditPage')->name('edit-page');
            Route::post('edit-page/save', 'AdminController@saveEditPage')->name('save-edit-page');
        });
    });
      
    //Переключение языков
    Route::get('/portfolio/{link}', 'RouteController@goToPortfolio')->name('portfolio_item');
    Route::get('/solutions/{alfaUrl}','RouteController@goToAfla')->name('alfaPage');

        Route::get('/update-publish-status/{id}','AjaxController@updatePublish');
        Route::get('/request','AjaxController@request')->name('request');
        Route::get('/calling','AjaxController@calling')->name('calling');
        Route::get('/question','AjaxController@question')->name('question');
        Route::get('/','RouteController@welcome')->name("home");
        Route::get('/services', 'RouteController@services')->name("services");
        Route::get('/blog', 'RouteController@blog')->name("blog");
        Route::get('/contacts', 'RouteController@contact')->name("contacts");
        Route::get('/portfolio', 'RouteController@portfolio')->name("portfolio");
        Route::get('/blog/{name}','RouteController@getBlog')->name('getBlog');
        Route::group(['prefix' => "services"],function(){

            Route::get('/digital-service',"RouteController@digital")->name('digital-page');

            Route::get('/page-digital', 'RouteController@digitalAdvertisingPage')->name('pageDigital');


            Route::get('/in-solutions-services',"LinkController@solution")->name('inSolutions');

            Route::get('/create-site', 'RouteController@createSite')->name('create-site');

            Route::get('/{url}','RouteController@getServicePage')->name('go-to-page');
        });
});
Route::get('setlocale/{lang}',function ($lang){
    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != LocaleMiddleware::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }

    //формируем полный URL
    $url = R::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу
})->name('setlocale');
//Route::get('/','RouteController@welcome');

