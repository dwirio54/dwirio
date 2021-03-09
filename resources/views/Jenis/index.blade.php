@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border">
                <div class="card-body">
                    <h5 class="font-weight-bold">
                    Data Jenis Transaksi
                    </h5>
                    <div class="mb-2 mb-3">
                    <a href="{{route('ambil-form.jenis')}}" class="btn btn-info">Tambah Jenis</a>
                    </div>
                    <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Jenis Transaksi</th>
                            <th>Nominal</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mobil</td>
                            <td>50.000</td>
                            <td>
                            <form action="" method="post">
                                <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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