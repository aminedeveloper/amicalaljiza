<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('v1.web.index');
    }

    public function about()
    {
       return view('v1.web.pages.about');
    }

    public function team()
    {
       return view('v1.web.pages.team');
    }

    public function partners()
    {
       return view('v1.web.pages.partners');
    }

    public function mosquee()
    {
       return view('v1.web.pages.mosquee');
    }

    public function contact()
    {
       return view('v1.web.pages.contact');
    }

    public function nouveautes()
    {
       return view('v1.web.pages.nouveautes');
    }
    
    public function projects()
    {
       return view('v1.web.pages.projects');
    }

    public function tranches($id)
    {
       return view('v1.web.pages.single.project');
    }

    public function galleries($id)
    {
       return view('v1.web.pages.single.gallery');
    }
}
