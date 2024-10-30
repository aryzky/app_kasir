@extends('layouts.master')
@section('title'.'pelanggan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        @if(session('succes'))
                            <div class="alert alert-info">
                                    {{ session('succes') }}
                            </div>
                            @endif
                            <h3>Halaman Data Pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan/tambah">Tambah Data</a>
                        </div>  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No-Telepon</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pelanggan as $pelanggan)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $pelanggan->nama_pelanggan}}</td>
                                            <td>{{ $pelanggan->alamat}}</td>
                                            <td>{{ $pelanggan->no_telepon}}</td>
                                            <td><a class="btn btn-warning" href="/pelanggan/{{ $pelanggan->id }}/show">Edit</a>
                                            <a class="btn btn-danger" href="/pelanggan/{{ $pelanggan->id }}/delete" 
                                            onclick="return confirm('Yakin Mau di Hapus')">Delete</a>
                                        </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection