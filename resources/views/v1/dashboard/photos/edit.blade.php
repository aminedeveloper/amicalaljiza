@extends('v1.dashboard.layouts.default')
@section('title', 'Modifier des Photos')

@section('content')
<form method="POST" action="{{ route('admin.photos.update',$photo->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
 <div class="row">
     <div class="col-12 mt-3">
        <label class="required fs-5 fw-bold mb-2">Album</label>
        <select class="form-select" name="album" data-control="select2" required data-placeholder="Selecter un album">
            <option></option>
            @foreach ($albums as $album)
                <option value="{{ $album->id }}" {{ ($album->id==$photo->album_id)?'selected':'' }}>{{ $album->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12 mt-3">
      <label class="required fs-5 fw-bold mb-2">Description</label>
      <textarea  class="form-control " placeholder="Description du photo" required  name="description">{{ old('description',$photo->description) }}</textarea>
    </div>
    <div class="col-12 mt-3">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline" data-kt-image-input="true"
                        style="background-image: url(/assets/dashboard/media/avatars/vd2.jpg)">
                        <div class="image-input-wrapper w-450px h-325px"
                            style="background-image: url({{Storage::url($photo->path)}})">
                        </div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <input type="file" name="avatar" required accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                        </label>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Cancel avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                            title="Remove avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                    </div>
                </div>
 </div>
    
      <input type="submit" class="btn btn-warning mt-2" value="Editer">
</form>
@endsection
