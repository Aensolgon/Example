<?php
    namespace App\Classes;
 
    use Illuminate\Http\Request;
    use Illuminate\Validation\ValidationException;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\DB;
    use App\Page;

    class PageBuilder
    {

        public $metaTitle;
        public $metaKeywords;
        public $metaDescription;
        public $metaCanonical;
        public $content;


        private $enum = [   // here you can see pages id from database
            "main" =>1,
            "portfolio"=>20,
            "services"=>3,
            "contacts"=>4,
            "blog"=>5,
            "reklama"=>6,
            "in-solution"=>7,
            "commerce"=>8,
            "landing"=>9,
            "creditSite"=>10,
            "enterprise"=>12,
            "ask-form"=>13,
            "common-question"=>14,
            "diff-site"=>15,
            "ideal"=>16,
            "question-form"=>17,
            "we-love"=>18,
            "word-for-you"=>19,
            //'meeting'=>21
        ];

        private $engColumns =[
            'meta_title_en','meta_keywords_en','meta_description_en','meta_canonical_en','content_en'
        ];

        private $ruColumns =[
            'meta_title_ru','meta_keywords_ru','meta_description_ru','meta_canonical_ru','content_ru'
        ];

        private function getPage($key,$columns,$pageBuilder){
            return Page::where("id",$key)
                        ->select(DB::raw(implode(",",$columns)))->first();
        }

        private function engObject($page,$pageBuilder){

            if(isset($page->meta_title_en)){
                $pageBuilder->metaTitle = $page->meta_title_en;
            }


            if(isset($page->meta_keywords_en)){
                $pageBuilder->metaKeywords = $page->meta_keywords_en;
            }

            if(isset($page->meta_description_en)){
                $pageBuilder->metaDescription = $page->meta_description_en;
            }

            if(isset($page->meta_canonical_en)){
                $pageBuilder->metaCanonical = $page->meta_canonical_en;
            }

            if(isset($page->content_en)){
                $pageBuilder->content = $page->content_en;
            }
            

            return $pageBuilder;
        }

        private function ruObject($page,$pageBuilder){

            if(isset($page->meta_title_ru)){
                $pageBuilder->metaTitle = $page->meta_title_ru;
            }

            if(isset($page->meta_keywords_ru)){
                $pageBuilder->metaKeywords = $page->meta_keywords_ru;
            }

            if(isset($page->meta_description_ru)){
                $pageBuilder->metaDescription = $page->meta_description_ru;
            }

            if(isset($page->meta_canonical_ru)){
                $pageBuilder->metaCanonical= $page->meta_canonical_ru;
            }

            if(isset($page->content_ru)){
                $pageBuilder->content = $page->content_ru;
            }


            return $pageBuilder;
        }

        public static function getLocalizePage($key){
               $pageBuilder = new PageBuilder;
               $page = "";
               $key = $pageBuilder->enum[$key];

               if(App::getLocale() == "en"){
                   $page = $pageBuilder->getPage($key,$pageBuilder->engColumns,$pageBuilder);
                   $pageBuilder = $pageBuilder->engObject($page,$pageBuilder);
               }
               else{
                    $page = $pageBuilder->getPage($key,$pageBuilder->ruColumns,$pageBuilder);
                    $pageBuilder = $pageBuilder->ruObject($page,$pageBuilder);
               }

               return $pageBuilder;
        }
    }
