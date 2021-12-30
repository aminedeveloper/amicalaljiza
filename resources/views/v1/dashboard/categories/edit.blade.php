@extends('v1.dashboard.layouts.default')
@section('content')
<form method="POST" action="{{ route('admin.categories.update',$category->id) }}">
@csrf
@method('PUT')
    	<label class="required fs-5 fw-bold mb-2">Categorie</label>
      <input type="text" class="form-control " placeholder="Nom du categorie" name="name" value="{{ old('name',$category->name) }}" required>
      <input type="submit" class="btn btn-warning mt-2" value="Editer">
</form>
@endsection
