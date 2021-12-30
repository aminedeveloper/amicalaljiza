@extends('v1.dashboard.layouts.default')
@section('title', 'Ajouter une nouvelle')
@section('content')
    <div class="card">
        <form class="form" method="POST" action="{{ route('admin.nouveautes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-7">
                <div class="col-md-6">
                    <div class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="acceuil" id="acceuil" name="type[]" />
                        <label class="form-check-label" for="acceuil">
                            Page d'accueil
                        </label>
                    </div>

                    <label class="form-check form-check-custom form-check-solid mt-5">
                        <input class="form-check-input" type="checkbox" value="news" id="news" name="type[]" />
                        <span class="form-check-label" for="news">
                            Page d'actualités
                        </span>
                    </label>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-custom form-check-solid">
                        <input checked class="form-check-input" type="radio" value="1" id="active" name="status" />
                        <label class="form-check-label" for="active">
                            Active
                        </label>
                    </div>

                    <label class="form-check form-check-custom form-check-solid mt-5">
                        <input class="form-check-input" type="radio" value="0" id="inactive" name="status" />
                        <span class="form-check-label" for="inactive">
                            Inactive
                        </span>
                    </label>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Titre</label>
                    <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Titre">
                </div>
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Description</label>
                    <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" id="" cols="30"
                        rows="2"></textarea>
                </div>
            </div>
            <div class="row mb-7">
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Categorie</label>
                    <input type="text" name="category" class="form-control form-control-solid mb-3 mb-lg-0"
                        placeholder="Categorie">
                </div>
                <div class="col-md-6">
                    <label class="required fw-bold fs-6 mb-2">Step</label>
                    <input type="number" name="step" class="form-control form-control-solid mb-3 mb-lg-0">
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
                        Ajouter des nouvelles
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
