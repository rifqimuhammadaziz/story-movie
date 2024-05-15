<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data['new_categories'] = $this->category->Query()->limit(5)->get();
        return view('frontend.home');
    }
}
