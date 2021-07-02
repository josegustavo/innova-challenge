<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = '')
    {
        $stories = Story::inRandomOrder()->get();
        $current_page  = Menu::firstWhere('slug', $category);

        return view('home', compact('stories', 'current_page'));
    }
}
