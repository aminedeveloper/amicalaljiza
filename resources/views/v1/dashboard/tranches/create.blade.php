 @extends('v1.dashboard.layouts.default')
@section('content')
    <form method="POST" action="{{ route('admin.tranches.store') }}" enctype="multipart/form-data">
        @csrf
        <label class="required fs-5 fw-bold mb-2">Tranche</label>

        <input type="text" class="form-control " placeholder="Nom du tranche" name="name" required>
        <div class="col-12 mt-3">
            <div class="col-md-6">
                    <div class="form-group">
                        <label>File Browser</label>
                        <div class="custom-file">
                            <input type="file" class="form-control" multiple="multiple" id="customFile" name="attachement[]" />
                        </div>

                    </div>
                </div>
        </div>
        <input type="submit" class="btn btn-primary mt-2" value="Ajouter">
    </form>
@endsection
 