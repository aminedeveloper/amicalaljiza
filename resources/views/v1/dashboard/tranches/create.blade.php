@extends('v1.dashboard.layouts.default')
@section('content')
    <form method="POST" action="{{ route('admin.tranches.store') }}" enctype="multipart/form-data">
        @csrf
        <label class="required fs-5 fw-bold mb-2">Tranche</label>

        <input type="text" class="form-control " placeholder="Nom du tranche" name="name" required>
        <div class="col-12 mt-3">
            <!--begin::Image input-->
            <div class="image-input image-input-outline" data-kt-image-input="true"
                style="background-image: url()">
                <div class="image-input-wrapper w-450px h-325px"
                    style="background-image: url()">
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
        <input type="submit" class="btn btn-primary mt-2" value="Ajouter">
    </form>
@endsection
 