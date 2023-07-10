@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Tagihan</h3>
        <form action="{{ url('/listrik/' . $row->id_pelanggan) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3 w-50">
                <label>NO PELANGGAN</label>
                <input type="text" class="form-control" name="no_pelanggan" value="{{ $row->no_pelanggan }}">
            </div>
            <div class="mb-3 w-50">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="nama_pelanggan" value="{{ $row->nama_pelanggan }}">
            </div>
            <div class="mb-3 w-50">
                <label>ALAMAT</label>
                <input type="text" class="form-control" name="alamat" value="{{ $row->alamat }}">
            </div>
            <div class="mb-3 w-50">
                <label>JUMLAH TAGIHAN</label>
                <input type="text" class="form-control" name="jml_tagihan" value="{{ $row->jml_tagihan }}">
            </div>
            <div class="mb-3 w-50">
                <label>KETERANGAN</label>
                <input type="text" class="form-control" name="keterangan" value="{{ $row->keterangan }}">
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
