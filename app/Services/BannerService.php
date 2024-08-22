<?php

namespace App\Services;

use App\Models\Banner;
use App\Traits\ImageUpload;

class BannerService{
    // store all baner document code 
    public static function  storeDocument($request ,$img=null){
        if($request->img){
            $path = 'images/';
            $db_field_name="img";
            $img = ImageUpload::Image($request,$path,$db_field_name);
        }
           return array(
           "title"=>$request->title,
            "subtitle"=>$request->subtitle,
            "img"=>$img
           );
    }
    public static function findById($id){
        return Banner::find($id);
    }
    
    public static function findAll(){
        return Banner::all();
    }
    
    public static function createBanner($request){
        return Banner::create(BannerService::storeDocument($request));
    }
    // single delete section 
    public static function findByIdDeleteChecker($id){
        return Banner::where('id',$id)->delete();
    }
    // bulk delete section 
    public static function findByIdsDeleteChecker($ids){
        return Banner::destroy($ids);
    }
    // update service section
    public static function findByIdsUpdateChecker($request,$id){
          $banner =  BannerService::findById($id);
          return $banner->update((BannerService::storeDocument($request,$banner->img)));
    }
}