@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border">
                <div class="card-body">
                    <h5 class="font-weight-bold">
                    Data Transaksi
                    </h5>
                    <div class="mb-2 mb-3">
                    <a href="{{route('ambil-form.transaksi')}}" class="btn btn-info">Tambah Transaksi</a>
                    </div>
                    <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No. Nota</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis</th>
                            <th>Total Biaya</th>
                            <th>Tanggal</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Ayam</td>
                            <td>Jantan</td>
                            <td>200.000</td>
                            <td>19-04-05</td>
                            <td>
                            <form action="" method="post">
                                <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                <button type="submit" class="btn btn-info btn-sm">Cetak Nota</button>
                            </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection