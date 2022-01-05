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
        <div class="row">
            @foreach ($tranche->media as $media)
                <div id="media_{{ $media->id }}" class="col-4 mt-3 text-center">
                    <div class="symbol symbol-150px me-5">
                        <img src="{{ Storage::url($media->path) }}" class="" alt="">
                    </div>
                    <div class="mt-5">
                        <button type="button" media="{{ $media->id }}" class="btn btn-danger deletemedia">Supprimer</button>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $('.deletemedia').click(function() {
            console.log('amine');
            let id = $(this).attr('media');
            let token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.tranches.media.delete') }}",
                data: {
                    'id': id,
                    '_token': token,
                },
                success: function(response) {
                    Swal.fire(
                        'Félicitations',
                        'Media a ete supprimer',
                        'success'
                    )
                    $('#media_'+id).remove();
                },
            });

        });
    </script>
@endsection
