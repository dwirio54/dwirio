@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-danger">
                <h5 class="font-weight-bold">Perhatian</h5>
                <h5>Isi Formulir Dengan Benar!</h5>
                </div>
                <form action="" method="post"></form>
                @csrf 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="">Biaya</label>
                        <input type="text" name="no_nota" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="">Jenis Kendaraan</label>
                        <select name="" id="" class="form-control">
                        <option value="">Pilih Jenis Kendaraan</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info">Simpan Transaksi</button>
                        <a href="{{route('tampilkan-data.jenis')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection