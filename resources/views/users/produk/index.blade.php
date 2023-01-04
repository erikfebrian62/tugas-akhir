@extends('users.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nama produk</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga beli</th>
                    <th>Harga jual</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <button class="btn btn-danger btn-sm" id="hapus"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection