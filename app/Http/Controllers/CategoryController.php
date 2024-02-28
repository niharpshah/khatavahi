<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    //

    public function create(){
        $url = url('category');
        $title = "Category Registration";
        $category = null;
        $data = compact('url','title','category');
        return view('category')->with($data);
    }

    public function store(Request $request){
        //
        $category = new Category;

        $date = Carbon::now();
        $time = Carbon::now();
        // echo $date->toDateString(); 
        // echo $time->toTimeString();
        $category->cat_name = $request['catname'];
        $category->date = $date;
        $category->time = $time;

        $category->save();
        return redirect('/category');
    }

    public function view(){
        $category = Category::all();
        $data = compact('category');
        return view('category-view')->with($data);
    }

    public function delete($id){
        $category = Category::find($id);
        // echo $id;
        if (!is_null($category)) {
            $category->delete();
        }
        return redirect('category');
    }

    public function edit($id){
        $category = Category::find($id);
        if(!is_null($category)){
            // Found
            $url = url('/category/update')."/".$id;
            $title = "Update Category";
            $data = compact('category','url','title');
            return view('category')->with($data);
        }else{
            // NOT FOUND
            return redirect('category');
        }
    }

    public function update($id,Request $request){
        $category = Category::find($id);

        $category->cat_name = $request['catname'];

        $category->save();
        return redirect('/category');
    }
}
