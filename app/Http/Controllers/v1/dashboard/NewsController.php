<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();

        return view('v1.dashboard.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        if(count($request->type) == 2)
        {
           foreach ($request->type as $key => $value) {
               $news->type .= $value .',';
           }
        }
        if(count($request->type) == 1)
        {
            foreach ($request->type as $key => $value) {
                $news->type = $value ;
            }
        }

        $news->status = $request->status;
        $news->name = $request->name;
        $news->description = $request->description;
        $news->category = $request->category;
        $news->step = $request->step;
 

        if($request->attachement->getClientOriginalExtension() == 'mp4')
        {
            $file = $request->attachement;
            $filename = $file->getClientOriginalName();
            $path = public_path().'/news/';
            $file->move($path, $filename);

        }else{
            $filename = date('d-m-Y');
            $filename .= pathinfo($request->attachement->getClientOriginalName(), PATHINFO_FILENAME);
            $filename .= '-' . time() . '-' . Str::random(4);
            $filename .= '.' . $request->attachement->getClientOriginalExtension();
            $filename = strtolower($filename);
            Storage::disk('public')->putFileAs('news' , $request->attachement, $filename);
        }
        

        $news->extension = $request->attachement->getClientOriginalExtension();
        $path = 'news/' . $filename;
        $news->path = $path;
        $news->save();

        alert()->success('Félicitation','Nouvelle a été bien ajouté');

        return redirect(route('admin.nouveautes.index'));
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
        $news = News::where('id',$id)->first();

        return view('v1.dashboard.news.edit',compact('news'));
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
        $news = News::where('id',$id)->first();

        if(count($request->type) == 2)
        {
           foreach ($request->type as $key => $value) {
               $news->type .= $value .',';
           }
        }
        if(count($request->type) == 1)
        {
            foreach ($request->type as $key => $value) {
                $news->type = $value ;
            }
        }

        $news->status = $request->status;
        $news->name = $request->name;
        $news->description = $request->description;
        $news->category = $request->category;
        $news->step = $request->step;
 

        if($request->attachement->getClientOriginalExtension() == 'mp4')
        {
            $file = $request->attachement;
            $filename = $file->getClientOriginalName();
            $path = public_path().'/news/';
            $file->move($path, $filename);

        }else{
            $filename = date('d-m-Y');
            $filename .= pathinfo($request->attachement->getClientOriginalName(), PATHINFO_FILENAME);
            $filename .= '-' . time() . '-' . Str::random(4);
            $filename .= '.' . $request->attachement->getClientOriginalExtension();
            $filename = strtolower($filename);
            Storage::disk('public')->putFileAs('news' , $request->attachement, $filename);
        }
        

        $news->extension = $request->attachement->getClientOriginalExtension();
        $path = 'news/' . $filename;
        $news->path = $path;
        $news->save();

        alert()->success('Félicitation','Nouvelle a été bien Editer');

        return redirect(route('admin.nouveautes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::where('id',$id)->first();
        $news->delete();

        return redirect(route('admin.nouveautes.index'));
    }
}
