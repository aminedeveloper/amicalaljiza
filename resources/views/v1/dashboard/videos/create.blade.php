@extends('v1.dashboard.layouts.default')
@section('title', 'Creer des Videos')

@section('content')
    <form method="POST" action="{{ route('admin.videos.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 mt-3">
                <label class="required fs-5 fw-bold mb-2">Album</label>
                <select class="form-select" name="album" data-control="select2" required
                    data-placeholder="Selecter un album">
                    <option></option>
                    @foreach ($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 mt-3">
                <label class="required fs-5 fw-bold mb-2">Description</label>
                <textarea class="form-control " placeholder="Description du photo" required name="description"></textarea>
            </div>
            <div class="col-12 mt-3">
                <!--begin::Image input-->
                <div class="custom-file">
                    <input type="file" class="form-control" id="customFile" name="attachement" />
                </div>
            </div>
        </div>

        <input type="submit" class="btn btn-primary mt-2" value="Ajouter">
    </form>
@endsection
