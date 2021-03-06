<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\TrancheVideos;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::get();
       return view('v1.dashboard.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::get();
        return view('v1.dashboard.videos.create',compact('albums'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new  Video(); 
        $video->description = $request->description;
        if($request->type == 'recents')
        {
            if($request->attachement){
                $file = $request->attachement;
                $filename = $file->getClientOriginalName();
                $path = 'videos/';
                $file->move($path, $filename);
                $path = 'videos/' . $filename;
                $video->path = $path;
            }
            $video->type = $request->type;

        }else{
            if($request->attachement){
                $file = $request->attachement;
                $filename = $file->getClientOriginalName();
                $path = 'videos/';
                $file->move($path, $filename);
                $path = 'videos/' . $filename;
            }
            $video->album_id = $request->album;

        }
     
       $video->save();
       if($request->type != 'recents')
       {
           $tranchesVideos = new TrancheVideos();
           $tranchesVideos->video_id = $video->id;
           $tranchesVideos->path = $path;
           $tranchesVideos->save();
       }
       alert()->success('F??licitation','Video a ??t?? bien ajout??');
       return redirect(route('admin.videos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::where('id',$id)->first() ?? abort(404);
        $albums = Album::get();
        return view('v1.dashboard.videos.edit',compact('albums','video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::where('id',$id)->first() ?? abort(404);
        $video->description = $request->description;
        $video->album_id = $request->album;
        if($request->attachement){
            $file = $request->attachement;
            $filename = $file->getClientOriginalName();
            $path = 'assets/videos/';
            $file->move($path, $filename);
            $path = 'videos/' . $filename;
            $video->path = $path;
       }
       $video->save();
       alert()->success('F??licitation','Video a ??t?? bien modifi??');
       return redirect(route('admin.videos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::where('id',$id)->first() ?? abort(404);
        $video->delete();
        alert()->success('F??licitation','Video a ??t?? bien supprim??');
        return redirect(route('admin.videos.index'));
    }
}
