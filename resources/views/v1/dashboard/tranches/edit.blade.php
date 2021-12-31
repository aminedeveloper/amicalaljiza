@extends('v1.dashboard.layouts.default')
@section('content')
<form method="POST" action="{{ route('admin.tranches.update',$tranche->id) }}">
@csrf
@method('PUT')
    	<label class="required fs-5 fw-bold mb-2">Tranche</label>
       <input type="text" class="form-control " placeholder="Nom du tranche" name="name" required value="{{ old('name',$tranche->name) }}">
       <input type="submit" class="btn btn-warning mt-2" value="Editer">
</form>
@endsection
 