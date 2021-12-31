@extends('v1.dashboard.layouts.default')
@section('title', 'Creer Des categories')

@section('content')
<form method="POST" action="{{ route('admin.categories.store') }}">
@csrf
    	<label class="required fs-5 fw-bold mb-2">Categorie</label>
      <input type="text" class="form-control " placeholder="Nom du categorie" name="name" required>
      <input type="submit" class="btn btn-primary mt-2" value="Ajouter">
</form>
@endsection
