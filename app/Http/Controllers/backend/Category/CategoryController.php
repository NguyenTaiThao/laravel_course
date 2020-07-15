<?php

namespace App\Http\Controllers\backend\Category;

use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facade;
use App\Category;
class CategoryController extends Controller
{
    // category controller
    public function category(){
        $list = Category::all();
        return view("backend.category.category", compact('list'));
    } 

    public function addcategory(){
        return view("backend.category.addcategory");
    }
    
    public function editcategory($id){
        $list = Category::all();
        $parent = Category::find($id)->parent_id;
        $arr = ["1"=>$list, "2"=>$parent];
        return view("backend.category.editcategory", compact('arr'));
    } 
}
