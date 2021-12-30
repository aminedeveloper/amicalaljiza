@extends('v1.dashboard.layouts.default')
@section('content')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <a href="{{route('admin.projects.create')}}" type="button" class="btn btn-primary">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                    transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                            </svg>
                        </span>
                        Ajouter un project
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                        role="grid">
                        <thead>
                            <tr>
                                <th>Projet</th>
                                <th>tranche</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-bold">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
