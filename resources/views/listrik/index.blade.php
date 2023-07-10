@extends('layouts.app')

@section('content')
    <div class="container">

        <h3 align="center">
            Daftar Tagihan Listrik
           
        </h3>

<br>
<form class="form" method="get" action="{{ route('search') }}">
                 <div class="form-group w-50 mb-3 float-end">
                    <label for="search" class="d-block mr-2"></label>
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari berdasarkan nama">
                    <button type="submit" class="btn btn-dark mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
                </div>
            </form>

<br>
  <a class="btn btn-success btn-sm float-end" href="{{ url('listrik/create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            Input Data Pelanggan
        </a>      
        <br>
        <br>
        <table class="table table-borderless table-dark">
            <tr>
                <td>NO PELANGGAN</td>
                <td>NAMA PELANGGAN</td>
                <td>ALAMAT</td>
                <td>JUMLAH TAGIHAN</td>
                <td>KETERANGAN</td>
                <td colspan="2" align="center">AKSI</td>
            
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->no_pelanggan }}</td>
                    <td>{{ $row->nama_pelanggan }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->jml_tagihan }}</td>
                    <td>{{ $row->keterangan }}</td>

                    <td>
                    <a href="{{ url('listrik/' . $row->id_pelanggan . '/edit') }}" class="btn btn-warning btn-sm" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                            Edit
                        </a>
                    
                    </td>
                    
                    <td>
                        <form action="{{ url('listrik/' . $row->id_pelanggan) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                                    Delete
                            </button>
                        </form>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>
@endsection