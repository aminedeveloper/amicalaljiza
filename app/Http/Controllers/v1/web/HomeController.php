<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\News;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Tranche;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
 
      $news = News::where('status',1)->orderBy('step', 'DESC')->get();
      $topnews = News::orderBy('step', 'DESC')->first();

      $tranches = Tranche::get();
      
      return view('v1.web.index',compact('news','topnews','tranches'));
   }
   
   public function news()
   {
      $news = News::where('status',1)->orderBy('step', 'DESC')->get();
      $topnews = News::orderBy('step', 'DESC')->first();

      return view('v1.web.news',compact('news','topnews'));
   }

   public function allnews()
   {
      $news = News::where('status',1)->orderBy('step', 'ASC')->get();
      $topNews = News::where('status',1)->orderBy('step', 'DESC')->get();

      return view('v1.web.allnews',compact('news','topNews'));
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

   public function newsShow($id)
   {
      $new = News::where('id',$id)->first();
      $news = News::where('status',1)->orderBy('step', 'ASC')->get();
      return view('v1.web.pages.single.news',compact('new','news'));
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
      $photos = Photo::where('album_id',$id)->get();
 
      return view('v1.web.pages.single.gallery',compact('photos'));
   } 

   public function lastPhotos()
   {
      $photos = Photo::orderBy('id','DESC')->get();

      return view('v1.web.pages.last_photos',compact('photos'));
   }

   public function lastVideos()
   {
      $videos = Video::orderBy('id','DESC')->get();
 
      return view('v1.web.pages.last_videos',compact('videos'));
   }
}
