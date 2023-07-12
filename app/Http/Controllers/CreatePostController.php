<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use DB;

class CreatePostController extends Controller
{
    //
    public function insertForm(){
        return view('record_add',['categories'=>Categories::all()]);
        }
        public function insert(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $category_name = $request->input('category_name');
        $data=["name"=>$name,"description"=>$description,"category_name"=>$category_name];
        DB::table('posts')->insertGetId($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
}
