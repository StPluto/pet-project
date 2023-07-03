<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class DbInputController extends Controller
{
    //
    public function insertform(){
        return view('record_add');
        }
        public function insert(Request $request){
        $id = 1 + int(Posts::where('id','>','1')->count());
        $name = $request->input('name');
        $description = $request->input('description');
        $data=['id'=>$id,"name"=>$name,"description"=>$description];
        DB::table('posts')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
}
