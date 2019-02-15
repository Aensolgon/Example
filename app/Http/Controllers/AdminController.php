<?php

namespace App\Http\Controllers;

use App\FileUpload;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Page;
use App\Review;
use App\Setting;
use App\Request as Reque;
use App\Blog;
use App\Http\Middleware\LocaleMiddleware;
use App\CategoryBlog;
use App\User;
use App\Alfabet;
use App\Portfolio;
use App\ServicesList;
use App\Classes\HelperImage;


class AdminController extends Controller
{
    public function main()
    {
        return view('admin.main');
    }

    public function typograph(){
        return view('admin.graphs');
    }


    public function servicesList(){

        return view('admin.services-list',[
            'sList' => ServicesList::all()
            ]
        );
    }

    public function addService(){
        return view('admin.service-list-add');
    }

    public function editService($id){


        return view('admin.service-list-edit',[
            'service'=>ServicesList::find($id)
        ]);
    }

    public function servicesAdd(Request $request){

        $servList = new ServicesList;

        $servList->name = $request->name;
        $servList['content'] = HelperImage::saveToPublicUpload($request['content']);
        $servList->metaTitle = $request->meta_title;
        $servList->metaDescription = $request->meta_description;
        $servList->metaKeywords = $request->keywords;
        $servList->service_text = $request->service_text;
        $servList->service_img = $this->fileUpload($request->service_img);
        $servList->link = $request->link;
        $servList->lang = $request->lang;

        $servList->save();


        return redirect()->action('AdminController@servicesList');
    }



    public function servicesEdit(Request $request){
        if($request->has('del_id')){
            ServicesList::find($request->del_id)->delete();
        }
        else{
                $sList = ServicesList::find($request->id);
                $image = $this->fileUpload($request->service_img);
                $sList->metaTitle = $request->meta_title;
                $sList->metaDescription = $request->meta_description;
                $sList->metaKeywords = $request->keywords;
                $sList->name = $request->name;
                $sList->service_text = $request->service_text;
                if(!empty($image)){
                    $sList->service_img = $image;
                }
                $sList->content = HelperImage::saveToPublicUpload($request['content']);
                $sList->link = $request->link;
                $sList->status = $request->status;
                $sList->save();
        }
        return redirect()->action('AdminController@servicesList');
    }

    public function editParagraph(Request $request){

        if($request->has("del_id")){
            $alfabet = Alfabet::find($request->del_id)->delete();
        }
        else{
            foreach($request->id as $key=>$value){
                $alfabet = Alfabet::find($value);
                $alfabet->name = $request->name[$key];
                $alfabet->link = $request->link[$key];
                $alfabet->letter = mb_strtoupper(mb_substr($request->name[$key],0,1,"UTF-8"));
                if(isset($request->image[$key])){
                    $alfabet->image = $this->fileUpload($request->image[$key]);
                }
                $alfabet->header = $request->header[$key];

                $alfabet->save();
            }
        }


        return redirect()->action("AdminController@alfabetList");
    }

    public function portfolioList(){
        $portfolio = Portfolio::all();
        return view('admin.portfolio',['portfolio' => $portfolio]);
    }

    public function portfolioAdd(Request $request){

        $portfolio = new Portfolio;

        $portfolio->title = $request->title;

        if ($request->hasFile('img_path')) {
            $portfolio->img_path = $this->fileUpload($request->img_path);
        }

        $portfolio->short_text = $request->short_text;
        $portfolio->link = $request->link;
        $portfolio->metaTitle = $request->metaTitle;
        $portfolio->metaDescription = $request->metaDescription;
        $portfolio->metaKeywords = $request->metaKeywords;
        $portfolio->tag = $request->tag;
        $portfolio->tag_en = $request->tag_en;
        $portfolio->title_en = $request->title_en;
        $portfolio->short_text_en = $request->short_text_en;

        $portfolio->save();

        return redirect()->action("AdminController@portfolioList");
    }

    public function portfolioEdit(Request $request){
        if($request->has("del_id")){
            $portfolio = Portfolio::find($request->del_id)->delete();
        }
        else{
            foreach ($request->id as $key=>$value){
                $portfolio = Portfolio::find($value);

                $portfolio->title = $request->title[$key];

                if(isset($request->img_path[$key])){
                    $portfolio->img_path = $this->fileUpload($request->img_path[$key]);
                }
                $portfolio->link = $request->link[$key];
                $portfolio->short_text = $request->short_text[$key];
                $portfolio->title_en = $request->title_en[$key];
                $portfolio->tag = $request->tag[$key];
                $portfolio->tag_en = $request->tag_en[$key];
                $portfolio->short_text_en = $request->short_text_en[$key];
                // $portfolio->metaTitle = $request->metaTitle[$key];
                // $portfolio->metaDescription = $request->metaDescription[$key];
                // $portfolio->metaKeywords = $request->metaKeywords[$key];
                $portfolio->save();


                $portfolio->save();
            }
        }
        return redirect()->action("AdminController@portfolioList");
    }



    public function pageList()
    {
        return view('admin.page-list', [
            'pages' => Page::with('linkMenu')->get()
        ]);
    }

    public function pageReview()
    {
        $query = Review::all();
        return view('admin.page-reviews', ['reviews' => $query]);
    }

    public function createReview()
    {
        return view('admin.create-review');
    }

    public function saveReview(Request $request)
    {
        $model = new Review;
        $model->company_name = $request->companyName;
        $model->author_name = $request->authorName;
        $model->description = $request->description;

        if ($request->hasFile('companyLogo')) {
            $model->company_logo = $this->fileUpload($request->companyLogo);
        }

        if ($request->hasFile('authorLogo')) {
            $model->author_logo = $this->fileUpload($request->authorLogo);
        }

        $model->save();
        return redirect()->action("AdminController@pageReview");
    }

    public function showEditPage($id)
    {

        return view('admin.edit-page', [
            'page' => Page::find($id)
        ]);
    }

    public function saveEditBlog(Request $request)
    {
        $blog = Blog::find($request->id);

        $blog->meta_title = $request->metaTitle;
        $blog->meta_keywords = $request->metaKeywords;
        $blog->meta_keywords = $request->metaKeywords;
        $blog->meta_description = $request->metaDescription;
        $blog->meta_canonical = $request->metaCanonical;
        $blog->category_blogs = $request->category;


        $blog->title = $request->title;
        $blog->title_second = $request->title;
        $blog->short_text = $request->shortText;
        $blog->content = HelperImage::saveToPublicUpload($request->content);
        $blog->link = $request->link;

        if ($request->lang == "en") {
            $blog->language = "en";
        } else {
            $blog->language = "ru";
        }

        if ($request->hasFile('imgPath')) {
            $blog->img_path = $this->fileUpload($request->imgPath);
        }
        $blog->save();

        return redirect()->action('AdminController@blogList');
    }

    public function fileUpload($request,$id = 0)
    {
        $image = $request;
        if($image == null){
            return "";
        }
        if($id != 0){
            $input = time() .'.'.$id. '.' . $image->getClientOriginalExtension();
        }
        else{
            $input = time() . '.' . $image->getClientOriginalExtension();
        }

        $destinationPath = public_path('images');
        $image->move($destinationPath, $input);
        $savePath = explode("/", $destinationPath);
        if(count($savePath) == 1){
            $savePath = explode('\\', $destinationPath);
        
        }
        return "/" . $savePath[count($savePath) - 1] . "/" . $input;
    }

    public function deleteBlog($id)
    {
        Blog::find($id)->delete();
        return redirect()->action("AdminController@blogList");
    }

    public function editBlog($id)
    {
        $blog = Blog::find($id);
        $menu = CategoryBlog::where('language', $this->getLang())->get();
        return view("admin.edit-blog", [
            'blog' => $blog,
            'menu' => $menu
        ]);
    }

    public function changeCategory(Request $request)
    {

        $lang = LocaleMiddleware::getLocale();
        if ($lang != "eng") {
            $lang = "ru";
        } else {
            $lang = "en";
        }

        foreach ($request->name as $key => $value) {
            $category = CategoryBlog::find($request->id[$key]);
            if ($value == null) {
                $category->delete();
            } else {
                $category->name = $value;
                $category->save();
            }
        }

        if ($request->new_name != null) {
            $addValues = explode(',', $request->new_name);
            foreach ($addValues as $value) {
                $category = new CategoryBlog;
                $category->name = $value;
                $category->language = $lang;
                $category->save();
            }
        }

        return redirect()->action("AdminController@blogList");
    }

    public function blogList()
    {
        $blog = Blog::where('language', $this->getLang())->with('blog')->get();
        $menu = CategoryBlog::where('language', $this->getLang())->get();
        return view('admin.blog-list', [
            'blogs' => $blog,
            'menu' => $menu,
        ]);
    }

    public function getLang()
    {
        $lang = LocaleMiddleware::getLocale();
        if ($lang != "eng") {
            return "ru";
        }
        return "en";
    }


    public function createBlog()
    {

        $menu = CategoryBlog::where('language', $this->getLang())->get();
        return view('admin.create-blog', ['menu' => $menu]);
    }

    public function saveBlog(Request $request)
    {
        $blog = new Blog;

        $blog->meta_title = $request->metaTitle;
        $blog->meta_keywords = $request->metaKeywords;
        $blog->meta_keywords = $request->metaKeywords;
        $blog->meta_description = $request->metaDescription;
        $blog->meta_canonical = $request->metaCanonical;
        $blog->category_blogs = $request->category;


        $blog->title = $request->title;
        $blog->title_second = $request->title;
        $blog->short_text = $request->shortText;
        $blog->content = HelperImage::saveToPublicUpload($request->content);
        $blog->link = $request->link;

        if ($request->lang == "en") {
            $blog->language = "en";
        } else {
            $blog->language = "ru";
        }

        if ($request->hasFile('imgPath')) {
            $blog->img_path = $this->fileUpload($request->imgPath);
        }
        $blog->save();

        return redirect()->action('AdminController@blogList');
    }

    public function addSetting(Request $request){

        $settings = new Setting();
        $settings->emails = $request->mail;
        $settings->email_text = $request->mail_text;
        $settings->save();
        return redirect()->action("AdminController@settings");
    }

    public function settings()
    {
        return view('admin.settings', [
            'settings' => Setting::all(),
            'request' => Reque::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

    public function saveSettings(Request $request)
    {

        foreach ($request->id as $key => $item) {
            $setting = Setting::find($item);
                $setting->emails = $request->mail[$key];
                $setting->email_text = $request->text[$key];
                $setting->save();
        }
        return redirect()->action("AdminController@settings");
    }


    public function saveEditPage(Request $request)
    {

        $page = Page::find($request->pageId);

        if (Input::has('meta_title_en')) {
            $page->meta_title_en = $request->meta_title_en;
            $page->meta_keywords_en = $request->meta_keywords_en;
            $page->meta_description_en = $request->meta_description_en;
            $page->meta_canonical_en = $request->meta_canonical_en;
            $page->content_en = HelperImage::saveToPublicUpload($request->content_en);
            $page->save();
        } else {
            $page->meta_title_ru = $request->meta_title_ru;
            $page->meta_keywords_ru = $request->meta_keywords_ru;
            $page->meta_description_ru = $request->meta_description_ru;
            $page->meta_canonical_ru = $request->meta_canonical_ru;
            $page->content_ru = HelperImage::saveToPublicUpload($request->content_ru);
            $page->save();
        }


        return redirect()->action("AdminController@pageList");
    }

    public function roleList()
    {
        $query = User::all();
        return view('admin.role-list', ['role' => $query]);
    }


    public function saveRole(Request $request)
    {
        foreach ($request->id as $value) {
            $user = User::find($value);
            $user->role_id = $request["role_$value"];

            $user->save();
        }
        return redirect()->action("AdminController@roleList");

    }
    public function addParagraph(Request $request){

        $alfabet = new Alfabet;
        $alfabet->name = $request->name;
        $alfabet->link = $request->link;
        $alfabet->letter = mb_strtoupper(mb_substr($request->name,0,1,"UTF-8"));

        $alfabet->header = $request->header;
        $alfabet->save();

        if($request->hasFile('image')){
            foreach ($request->image as $key=>$value){
                $uploadFile = new FileUpload();
                $uploadFile->alfabet_id = $alfabet->id;
                $uploadFile->image_path = $this->fileUpload($value);
                $uploadFile->save();
            }
        }

        return redirect()->action("AdminController@alfabetList");
    }

    public function alfabetList()
    {
        $query = Alfabet::all();
        return view('admin.alfabet',['alfabet' => $query]);
    }
    public function editAlfabet($id){
        $alfabet = Alfabet::find($id);
        $file = \App\FileUpload::where('alfabet_id',$alfabet->id)->get();
        return view('admin.edit-alfabet',['alfabet' => $alfabet, 'file' => $file]);
    }
    public function saveAlfabet(Request $request)
    {
        $alfabet = Alfabet::find($request->id);
        $alfabet->name = $request->name;
        $alfabet->link = $request->link;
        $alfabet->content = $request->content;
        $alfabet->slider_text = $request->slider_text;
        $alfabet->header = $request->header;
        $alfabet->letter = mb_strtoupper(mb_substr($request->name, 0, 1, "UTF-8"));
        if($request->has('image')){
                    foreach ($request->image as $key => $value) {
                        $fileUpload = new FileUpload();
                        $fileUpload->alfabet_id = $request->id;
                        $fileUpload->image_path = $this->fileUpload($value,$key);
                        $fileUpload->save();
                    }

        }


        $alfabet->save();
        return redirect()->action('AdminController@alfabetList');
    }
    public function deleteImage($id){
        $delete = FileUpload::find($id);
        $delete->delete();
        return back();
    }
}
