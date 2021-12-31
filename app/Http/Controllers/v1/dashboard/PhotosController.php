<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::get();
       return view('v1.dashboard.photos.index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::get();
        return view('v1.dashboard.photos.create',compact('albums'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new Photo();
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
       alert()->success('Félicitation','Photo a été bien ajouté');
       return redirect(route('admin.photos.index'));
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
