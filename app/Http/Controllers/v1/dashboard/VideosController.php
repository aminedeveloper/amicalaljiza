<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Album;
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
        $video->album_id = $request->album;
        if($request->attachement){
            $file = $request->attachement;
            $filename = $file->getClientOriginalName();
            $path = 'assets/videos/';
            $file->move($path, $filename);

       }
       $path = 'videos/' . $filename;
       $video->path = $path;
       $video->save();
       alert()->success('Félicitation','Video a été bien ajouté');
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
        $photo = Photo::where('id',$id)->first() ?? abort(404);
        $albums = Album::get();
        return view('v1.dashboard.photos.edit',compact('albums','photo'));
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
        $photo = Photo::where('id',$id)->first() ?? abort(404);
        $photo->description = $request->description;
        $photo->album_id = $request->album;
        if($request->avatar){
            $filename = date('d-m-Y');
            $filename .= pathinfo($request->avatar->getClientOriginalName(), PATHINFO_FILENAME);
            $filename .= '-' . time() . '-' . Str::random(4);
            $filename .= '.' . $request->avatar->getClientOriginalExtension();
            $filename = strtolower($filename);
            Storage::disk('public')->putFileAs('photos' , $request->avatar, $filename);
            //    $news->extension = $request->attachement->getClientOriginalExtension();
            $path = 'photos/' . $filename;
            $photo->path = $path;
       }
       $photo->save();
       alert()->success('Félicitation','Photo a été bien modifié');
       return redirect(route('admin.photos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::where('id',$id)->first() ?? abort(404);
        $photo->delete();
        alert()->success('Félicitation','Photo a été bien supprimé');
        return redirect(route('admin.photos.index'));
    }
}
