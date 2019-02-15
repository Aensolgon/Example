<?php

namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Storage;

class HelperImage
{

    public static function EncodeAndDownload($data){
        $folderName = "upload";

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $imageName = time().'.png';
        $image_name= "/$folderName/" . $imageName;
        $path = public_path() . $image_name;
        file_put_contents($path, $data);

        $pathAr = explode("/",$path);
        $index = array_search($folderName, $pathAr);

        return $pathAr[$index-1]."/$folderName/".$imageName;
    }

    public static function uploadPosterAndLinkImage($request){

        $folderName = 'upload';
        $path = public_path("/$folderName/");
        $pathAr = explode("/",$path);
        $imageName = time().'.'.$request->getClientOriginalExtension();
        $request->move($path, $imageName);

        $index = array_search($folderName, $pathAr);

        return $pathAr[$index-1]."/$folderName/".$imageName;
    }

    public static function saveToPublicUpload($file){
        $detail=$file;
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'),LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            if(strpos($data,';') || strpos($data,',')){
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/upload/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }
        $detail = $dom->saveHTML();
        return $detail;
    }

}
