<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;


use Illuminate\Http\Request;

class adminHomeController extends Controller
{
    public function admin(){
        return view('admin/adminHome');
    }

    public function category(){
        $categoryData=CategoryModel::get();
        return view('admin/adminCategory',['categoryData' =>$categoryData]);
    }


    public function addCategory(Request $request){

        $request->validate([
            'CategoryName'=> 'required|string|max:255|unique:category',
            'Description'=> 'required|string|max:255'
        ]);
       $CategoryName= $request->input('CategoryName');
       $Description= $request->input('Description');
        
         $addCategory_result= CategoryModel::insert([
                
                "CategoryName"=> $CategoryName, 
                "Description"=> $Description
           ]);
           return redirect ('/category')->with('actionMessage','Category added Success');
        

    }

    public function updateCategory(Request $request){

        
        $categoryid = $request->input('updateCategoryid');
       $CategoryName= $request->input('updateCategoryName');
       $Description= $request->input('updateDescription');

     // dd($categoryid);
        
         $updateCategory_result= CategoryModel::where('categoryid', $categoryid)->update([  
                "CategoryName"=> $CategoryName, 
                "Description"=> $Description
           ]);
           if($updateCategory_result){
            $message='Category updateed Success';
           }
           else{
            $message='Category updateed fail';
           }

           return redirect ('/category')->with('actionMessage', $message);
        

    }

    public function deleteCategory($id){

        $categoryDelete=CategoryModel::where('categoryid', $id)->delete();
        return redirect ('/category')->with('actionMessage','Category Deleted');;
    }

    public function product(){
        $productData=ProductModel::get();
        return view('admin/adminProduct',['productData'=>$productData]);
    }


}
