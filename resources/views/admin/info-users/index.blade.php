@extends('admin.layouts.main')

@section('title')
    Info Users
@endsection

@section('content')
<div class="row text-center">
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-content flex-fill">
                        <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                        </ul>
                        <!-- Button trigger modal -->
                        <button type="button" class=" mt-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Lihat Produk
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-content flex-fill">
                        <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                        </ul>
                        <!-- Button trigger modal -->
                        <button type="button" class=" mt-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Lihat Produk
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-content flex-fill">
                        <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                        </ul>
                        <!-- Button trigger modal -->
                        <button type="button" class=" mt-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Lihat Produk
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Produk usaha </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                    <div class="card">
                    <div class="shadow">
                        <div class="card-body">
                            <ul class="list-group text-center">
                                <li class="list-group-item bold">An item</li>
                                <li class="list-group-item">Harga: Rp </li>
                                <li class="list-group-item">Stok: </li>
                                <li class="list-group-item">Jumlah: Rp </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection                                                                     