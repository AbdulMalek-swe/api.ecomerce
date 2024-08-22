<?php

namespace App\Http\Controllers\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Services\BannerService;
use App\Traits\HttpResponseTrait;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use HttpResponseTrait;
    // get banner data
    public function getBanner(){
        try{
            $result = BannerService::findAll();
            return $this->HttpSuccessResponse("banner list",$result,200);
             
        }catch(\Throwable $th){
            throw  $th;
        }
    }
    // create banner data 
    public function createBanner(BannerRequest $request){
        try{
             $result = BannerService::createBanner($request);
             return $this->HttpSuccessResponse("banner list create",$result,200);
             
        }catch(\Throwable $th){
            throw $th ;
        }
    }
    // delete banner item 
    public function deleteBanner(string $id){
        try{
             $result = BannerService::findByIdDeleteChecker($id);
             return $this->HttpSuccessResponse("delete banner item",$result,200);
             
        }catch(\Throwable $th){
            throw $th ;
        }
    }
    // bulk delete in banner 
    public function deleteBulkBanner(Request $request){
        try{
             $result = BannerService::findByIdsDeleteChecker($request->ids);
             return $this->HttpSuccessResponse("banner lists delete",$result,200);
             
        }catch(\Throwable $th){
            throw $th ;
        }
    }
    // banner update 
    public function updateBanner(Request $request,$id){
        try{
             $result = BannerService::findByIdsUpdateChecker($request,$id);
             return $this->HttpSuccessResponse("banner lists delete",$result,200);
             
        }catch(\Throwable $th){
            throw $th ;
        }
    }
}
