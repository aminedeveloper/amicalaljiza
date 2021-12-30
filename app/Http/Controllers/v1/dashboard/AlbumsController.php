<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::get();
        return view('v1.dashboard.albums.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.dashboard.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $album = new Album();
       $album->name = $request->name;
       $album->save();
       alert()->success('Félicitation','Album a été bien ajouté');
       return redirect(route('admin.albums.index'));

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
        $album = Album::where('id',$id)->first() ?? abort(404);
        return view('v1.dashboard.albums.edit',compact('album'));

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
        $album = Album::where('id',$id)->first() ?? abort(404); 
        $album->name = $request->name;
        $album->save();
        alert()->success('Félicitation','Album a été bien modifié');
        return redirect(route('admin.albums.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $album = Album::where('id',$id)->first() ?? abort(404);
     $album->delete();
     alert()->success('Félicitation','Album a été bien supprimé');
     return redirect(route('admin.albums.index'));
    } 
}
