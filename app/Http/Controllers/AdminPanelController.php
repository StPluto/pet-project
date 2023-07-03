<?php
namespace App\Http\Controllers;
use App\Models\Posts;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPanelController extends Controller
{
	public function index() : View{
		return view('admin',['posts'=>Posts::all(),'count'=>Posts::where('id','>','1')->count()] );
	}
	public function countRows() {
     return Posts::where('id','>','1')->count();
}
}
