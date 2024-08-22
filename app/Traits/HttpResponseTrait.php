<?php

namespace App\Traits;
use Illuminate\Support\Str;
trait HttpResponseTrait{
     public function HttpSuccessResponse($message,$data,$status_code){
        return response()->json([
            'status'=>true,
            'message'=>$message,
            'data'=>$data
        ],$status_code);
     }
    
     public function HttpErrorResponse($errors, $status_code){
        return response()->json([
            'status'=>false,
            'message'=>$errors
        ],$status_code);
     }
   
}