@extends('v1.dashboard.layouts.default')
@section('title', 'Modifier un album')

@section('content')
<form method="POST" action="{{ route('admin.albums.update',$album->id) }}">
@csrf
@method('PUT')
    	<label class="required fs-5 fw-bold mb-2">Album</label>
       <input type="text" class="form-control " placeholder="Nom d'album" name="name" required value="{{ old('name',$album->name) }}">
       <input type="submit" class="btn btn-warning mt-2" value="Editer">
</form>
@endsection
 