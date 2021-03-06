<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tranche;
use App\Models\TrancheMedia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TranchesController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $tranches = Tranche::get();
        return view('v1.dashboard.tranches.index',compact('tranches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.dashboard.tranches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
       $tranche = new Tranche();
       $tranche->name = $request->name;
       $tranche->save();
       if($request->attachement){
            foreach ($request->attachement as $media) {
            $filename = date('d-m-Y');
            $filename .= pathinfo($media->getClientOriginalName(), PATHINFO_FILENAME);
            $filename .= '-' . time() . '-' . Str::random(4);
            $filename .= '.' . $media->getClientOriginalExtension();
            $filename = strtolower($filename);
            Storage::disk('public')->putFileAs('tranches' , $media, $filename);
            //    $news->extension = $request->attachement->getClientOriginalExtension();
            $path = 'tranches/' . $filename;
                $trancheMecia = new TrancheMedia();
                $trancheMecia->tranche_id = $tranche->id;
                $trancheMecia->path = $path;
                $trancheMecia->save();
            }

        }
     

       alert()->success('Félicitation','tranche a été bien modifié');
       return redirect(route('admin.tranches.index'));
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
        $tranche = Tranche::where('id',$id)->first() ?? abort(404);
        return view('v1.dashboard.tranches.edit',compact('tranche'));
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
        $tranche = Tranche::where('id',$id)->first() ?? abort(404);
        $tranche->name = $request->name;
        $tranche->save();
        if($request->attachement){
            foreach ($request->attachement as $media) {
            $filename = date('d-m-Y');
            $filename .= pathinfo($media->getClientOriginalName(), PATHINFO_FILENAME);
            $filename .= '-' . time() . '-' . Str::random(4);
            $filename .= '.' . $media->getClientOriginalExtension();
            $filename = strtolower($filename);
            Storage::disk('public')->putFileAs('tranches' , $media, $filename);
            //    $news->extension = $request->attachement->getClientOriginalExtension();
            $path = 'tranches/' . $filename;
                $trancheMecia = new TrancheMedia();
                $trancheMecia->tranche_id = $tranche->id;
                $trancheMecia->path = $path;
                $trancheMecia->save();
            }

        }
        alert()->success('Félicitation','tranche a été bien modifié');
        return redirect(route('admin.tranches.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tranche = Tranche::where('id',$id)->first() ?? abort(404);
        $tranche->delete();
        alert()->success('Félicitation','Tranche a été bien supprimé');
        return redirect(route('admin.tranches.index'));
    }

    public function deletemedia(Request $request)
    {
        $trancheMedia = TrancheMedia::where('id',$request->id)->first() ?? abort(404);

        $trancheMedia->delete();

        return response()->json(['message'=>'de']);
    }
}
