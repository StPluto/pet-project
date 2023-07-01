<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\View\View;

class MainPageController extends Controller
{
    public function list(): View{
        return view('welcome', ['posts' => Posts::all()]);
    }
}
