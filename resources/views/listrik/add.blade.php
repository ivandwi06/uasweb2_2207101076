@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Input Data Tagihan</h3>
        <form action="{{ url('/listrik') }}" method="POST">
            @csrf
            <div class="mb-3 w-50">
                <label>NO PELANGGAN</label>
                <input type="text" class="form-control" name="no_pelanggan">
            </div>
            <div class="mb-3 w-50">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="nama_pelanggan">
            </div>
            <div class="mb-3 w-50">
                <label>ALAMAT</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="mb-3 w-50">
                <label>JUMLAH TAGIHAN</label>
                <input type="text" class="form-control" name="jml_tagihan">
            </div>
            <div class="mb-3 w-50">
                <label>KETERANGAN</label>
                <input type="text" class="form-control" name="keterangan">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
