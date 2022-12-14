@extends('admin.layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row text-center">
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-success">
                            <i class="material-icons-outlined">person</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">User On</span>
                            <span class="widget-stats-amount">38,211</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-danger">
                            <i class="material-icons-outlined">person</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">User Off</span>
                            <span class="widget-stats-amount">23,491</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 text-center">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-primary">
                            <i class="material-icons-outlined">person</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Jumlah User</span>
                            <span class="widget-stats-amount">140,390</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jenis Usaha</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        @if (Session::has('success'))
        const Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 3000,
           timerProgressBar: true,
           didOpen: (toast) => {
               toast.addEventListener('mouseenter', Swal.stopTimer)
               toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
           })
           Toast.fire({
           icon: 'success',
           title: '{{ Session::get('success') }}'
           })
        @endif
    </script>
@endpush
