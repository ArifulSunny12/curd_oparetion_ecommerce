<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class adminProductController extends Controller
{
    public function addProduct(Request $request){

    //    dd($request);

        $request->validate([
            'ProductName'=> 'required|string|max:255',
            'ProductDescription'=> 'required|string|max:255'
        ]); 
       $ProductName= $request->input('ProductName');
       $ProductDescription= $request->input('ProductDescription');
       $ProductUnit= $request->input('ProductUnit');
       $ProductPrice= $request->input('ProductPrice');
       $ProductCategory= $request->input('ProductCategory');
       $ProductSupplier= $request->input('ProductSupplier');
        
       $addProduct_result= ProductModel::insert([
                
                "ProductName"=> $ProductName, 
                "description"=> $ProductDescription,
                "unit"=> $ProductUnit, 
                "price"=> $ProductPrice,
                "categoryid"=> $ProductCategory, 
                "supplierid"=> $ProductSupplier,
           ]); 
           if($addProduct_result){
            $message='Product added Success';
           }
           else{
            $message='Product added fail';
           }
           return redirect ('/product')->with('actionMessage', $message);
        

    }
}
