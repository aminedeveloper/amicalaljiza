@extends('v1.dashboard.layouts.default')
@section('title', 'Creer un album')

@section('content')
<form method="POST" action="{{ route('admin.albums.store') }}">
@csrf
    	<label class="required fs-5 fw-bold mb-2">Album</label>
      <input type="text" class="form-control " placeholder="Nom d'album" name="name" required>
      <input type="submit" class="btn btn-primary mt-2" value="Ajouter">
</form>
@endsection
