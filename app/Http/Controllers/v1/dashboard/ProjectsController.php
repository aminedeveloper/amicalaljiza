<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Tranche;
use App\Models\Category;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Str;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('v1.dashboard.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $tranches = Tranche::get();
        return view('v1.dashboard.projects.create',compact('categories','tranches'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
       $project = new Project();
       $project->name = $request->name;
       $project->description = $request->description;
       $project->category_id = $request->category;
       $project->tranche_id = $request->tranche;
        if($request->avatar){
            $filename = date('d-m-Y');
            $filename .= pathinfo($request->avatar->getClientOriginalName(), PATHINFO_FILENAME);
            $filename .= '-' . time() . '-' . Str::random(4);
            $filename .= '.' . $request->avatar->getClientOriginalExtension();
            $filename = strtolower($filename);
            Storage::disk('public')->putFileAs('projects' , $request->avatar, $filename);
            //    $news->extension = $request->attachement->getClientOriginalExtension();
            $path = 'projects/' . $filename;
            $project->path = $path;
            }
        $project->save();
        alert()->success('Félicitation','Project a été bien ajouter');
        return redirect(route('admin.projects.index'));

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
        $project = Project::where('id',$id)->first() ?? abort(404);
        $categories = Category::get();
        $tranches = Tranche::get();
        return view('v1.dashboard.projects.edit',compact('categories','tranches','project'));
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
        $project = Project::where('id',$id)->first() ?? abort(404);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->category_id = $request->category;
        $project->tranche_id = $request->tranche;
         if($request->avatar){
             $filename = date('d-m-Y');
             $filename .= pathinfo($request->avatar->getClientOriginalName(), PATHINFO_FILENAME);
             $filename .= '-' . time() . '-' . Str::random(4);
             $filename .= '.' . $request->avatar->getClientOriginalExtension();
             $filename = strtolower($filename);
             Storage::disk('public')->putFileAs('projects' , $request->avatar, $filename);
             //    $news->extension = $request->attachement->getClientOriginalExtension();
             $path = 'projects/' . $filename;
             $project->path = $path;
        }
         $project->save();
         alert()->success('Félicitation','Project a été bien modifié');
         return redirect(route('admin.projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::where('id',$id)->first() ?? abort(404);
        $project->delete();
        alert()->success('Félicitation','Projet a été bien supprimé');
        return redirect(route('admin.projects.index'));
    }
}
