<?php
    namespace App\Classes;
 
    use Illuminate\Http\Request;
    use Illuminate\Validation\ValidationException;
    use Illuminate\Support\Facades\Hash;

    class Debug
    {
        public static function debug($var){
            dd($var);
            die;
        }
    }