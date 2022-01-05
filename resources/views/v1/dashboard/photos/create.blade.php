@extends('v1.dashboard.layouts.default')
@section('title', 'Creer des Photos')

@section('content')
<form method="POST" action="{{ route('admin.photos.store') }}" enctype="multipart/form-data">
@csrf
 <div class="row">
    <div class="col-12 mt-3">
        <div class="row">

            <div class="col-md-6"> 
                <label class="required fs-5 fw-bold mb-2">Album</label>
                <select class="form-select" name="album" data-control="select2"  data-placeholder="Selecter un album">
                    <option></option>
                    @foreach ($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->name }}</option>
                    @endforeach
                </select>
            </div> 
            <div class="col-md-6">
                <div class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="recents" id="recents" name="type" />
                    <label class="form-check-label" for="recents">
                        Photos Recentes
                    </label>
                </div>
            </div>
        </div>
    </div>
 
    <div class="col-12 mt-3">
      <label class="required fs-5 fw-bold mb-2">Description</label>
      <textarea  class="form-control " placeholder="Description du photo" required  name="description"></textarea>
    </div>
    <div class="col-12 mt-3">
                    
                </div>
 </div>
    
      <input type="submit" class="btn btn-primary mt-2" value="Ajouter">
</form>
@endsection
