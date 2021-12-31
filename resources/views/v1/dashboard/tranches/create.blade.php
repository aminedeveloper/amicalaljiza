@extends('v1.dashboard.layouts.default')
@section('content')
<form method="POST" action="{{ route('admin.tranches.store') }}">
@csrf
    	<label class="required fs-5 fw-bold mb-2">Tranche</label>
      <input type="text" class="form-control " placeholder="Nom du tranche" name="name" required>
      <input type="submit" class="btn btn-primary mt-2" value="Ajouter">
</form>
@endsection
