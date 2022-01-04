@extends('v1.dashboard.layouts.default')
@section('content')
    <form method="POST" action="{{ route('admin.tranches.update', $tranche->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label class="required fs-5 fw-bold mb-2">Tranche</label>
        <input type="text" class="form-control " placeholder="Nom du tranche" name="name" required
            value="{{ old('name', $tranche->name) }}">
        <div class="col-12 mt-3">
            <!--begin::Image input-->
            <div class="form-group">
                <label>File Browser</label>
                <div class="custom-file">
                    <input type="file" class="form-control" multiple="multiple" id="customFile" name="attachement[]" />
                </div>

            </div>
        </div>
        <input type="submit" class="btn btn-warning mt-2" value="Editer">
    </form>
@endsection
