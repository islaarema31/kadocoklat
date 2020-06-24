<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;
// use Intervention\Image\ImageManager;
// use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;

class ProductController extends Controller
{
    protected $now;

    public function upload(Request $request)
    {
    	
         $validation = Validator::make($request->all(),[ 
	        'token'  	    => 'required',
	        'code'   	    => 'required',
	        'name'   		=> 'required',
	        'description'   => 'required',
        ]);

        if($validation->fails()){
            $errors = $validation->errors();
            return $errors->toJson();
        }elseif($request->get('token') != 'mendolkayusotel'){
            return 'Errors';
        }

    	if(!empty($request->get('id'))){
    		$model = Product::find($request->get('id'));
    	}else{
    		$model = new Product();
    	}

    	$model->code 			= $request->get('code'); 
    	$model->name 			= $request->get('name'); 
    	$model->tag 			= $request->get('tag'); 
    	$model->link 			= $request->get('link'); 
    	$model->description 	= $request->get('description'); 
    	$model->price_before 	= $request->get('price_before'); 
    	$model->discount 		= $request->get('discount'); 
    	$model->price 			= $request->get('price'); 
    	$model->best_seller 	= $request->get('best_seller'); 
    	$model->order_by 		= $request->get('order_by'); 

    	$photo = $request->file('photo');
        if ($photo !== null) {
            $photoName     = $photo->getClientOriginalName();
            $model->photo  = $photoName;
        }

        $model->save();

        if ($photo !== null) {
            $p_photo_original = Image::make($photo->getRealPath())->resize(500, 500)->save('assets/images/product/324/'.$photoName);
        }

        return 'Success';
    }
}
