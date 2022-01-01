<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\News;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Tranche;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
   $news = News::where('status',1)->orderBy('step', 'ASC')->get();
   $topnews = News::orderBy('step', 'ASC')->first();

   return view('v1.web.index',compact('news','topnews'));
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
   $news = News::where('status',1)->orderBy('step', 'ASC')->get();
      return view('v1.web.pages.nouveautes',compact('news'));
   }
   
   public function projects()
   {
      $tranches = Tranche::get();
      $projects = Project::get();

      return view('v1.web.pages.projects',compact('tranches','projects'));
   }

   public function tranches($id)
   {
      $tranche = Tranche::where('id',$id)->first();

      return view('v1.web.pages.single.project',compact('tranche'));
   }

   public function galleries($id)
   {
      $album = Album::where('id',$id)->first();
      return view('v1.web.pages.single.gallery',compact('album'));
   }

   public function lastPhotos()
   {
      $photos = Photo::get();
      return view('v1.web.pages.last_photos',compact('photos'));
   }
}
