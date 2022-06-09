<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class DashboardController extends Controller
{
    
    public function home(){
        return view('admin/dashboard');
    }

    public function createCategory(){
        return view('admin/createcategory');
    }

    public function addProduct(){
        $category = Category::all(); // Select * from category;
        return view('admin/addproduct')->with(['category'=>$category]);
    }

}
