<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CreatePostController extends Controller
{
    //
    public function insertForm(){
        return view('record_add');
        }
        public function insert(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $data=['id'=>$id,"name"=>$name,"description"=>$description];
        DB::table('posts')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
}
