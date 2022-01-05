@extends('v1.dashboard.layouts.default')
@section('title', 'Editer une nouvelle')
@section('content')
    <div class="card">
        <form class="form" method="POST" action="{{ route('admin.nouveautes.update',$news->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-7">
                <div class="col-md-6">
                    <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" @if (in_array('acceuil', explode(',', $news->type))) checked  @endif type="checkbox" value="acceuil" id="acceuil" name="type[]" />
                        <label class="form-check-label" for="acceuil">
                            Page d'accueil
                        </label>
                    </div>

                    <label class="form-check form-check-custom form-check-solid mt-5">
                        <input class="form-check-input" @if (in_array('news', explode(',', $news->type))) checked  @endif type="checkbox" value="news" id="news" name="type[]" />
                        <span class="form-check-label" for="news">
                            Page d'actualités
                        </span>
                    </label>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-custom form-check-solid">
                        <input checked class="form-check-input" @if($news->status == 1) checked @endif type="radio" value="1" id="active" name="status" />
                        <label class="form-check-label" for="active">
                            Active
                        </label>
                    </div>

                    <label class="form-check form-check-custom form-check-solid mt-5">
                        <input class="form-check-input" type="radio" @if($news->status == 0) checked @endif value="0" id="inactive" name="status" />
                        <span class="form-check-label" for="inactive">
                            Inactive
                        </span>
                    </label>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Titre</label>
                    <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Titre" value="{{$news->name}}">
                </div>
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Description</label>
                    <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" id="" cols="30"
                        rows="2">{{$news->description}}</textarea>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Categorie</label>
                    <input type="text" name="category" value="{{$news->category}}" class="form-control form-control-solid mb-3 mb-lg-0"
                        placeholder="Categorie">
                </div>
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Step</label>
                    <input type="number" name="step" value="{{$news->step}}" class="form-control form-control-solid mb-3 mb-lg-0">
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>File Browser</label>
                        <div class="custom-file">
                            <input type="file" class="form-control" id="customFile" name="attachement" />
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Editer 
                    </button>
                </div>
            </div>
            <div class="row mb-7">
                @if($news->extension == 'mp4')
                <div class="col-6 mt-3">
                    <video width="300" height="100" controls>
                        <source src="/{{$news->path}}" type="video/mp4">
                        <source src="/{{$news->path}}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
               
                @else
                
                    <div class="col-12 mt-3">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url({{Storage::url($news->path)}})">
                            <div class="image-input-wrapper w-450px h-325px"
                                style="background-image: url({{Storage::url($news->path)}})">
                            </div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input type="file" name="avatar"  accept=".png, .jpg, .jpeg" />
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
                    
                @endif
            </div>
        </form>
    </div>

@endsection
