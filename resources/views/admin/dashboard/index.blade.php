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
                    <div class="widget-stats-icon widget-stats-icon-warning">
                        <i class="bi bi-wallet"></i>
                    </div>
                    <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Modal Hari ini</span>
                        <span class="widget-stats-amount">Rp 38,211</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-icon widget-stats-icon-success">
                        <i class="material-icons-outlined">paid</i>
                    </div>
                    <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Keuntungan Hari ini</span>
                        <span class="widget-stats-amount">Rp 23,491</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 text-center">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-icon widget-stats-icon-danger">
                        <i class="material-icons-outlined">file_download</i>
                    </div>
                    <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Downloads</span>
                        <span class="widget-stats-amount">Rp 140,390</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
