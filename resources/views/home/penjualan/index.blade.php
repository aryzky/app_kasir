@extends('layouts.master')
@section('title'.'penjualan')
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
                            <h3>Halaman Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/tambah">Tambah Data</a>
                        </div>  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Tanggal Penjualan</th>
                                            <th scope="col">Total Harga</th>
                                            <th scope="col">Id Pelanggan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penjualan as $penjualan)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $penjualan->tanggal_penjualan}}</td>
                                            <td>{{ $penjualan->total_harga}}</td>
                                            <td>{{ $penjualan->id_pelanggan}}</td>
                                            <td><a class="btn btn-warning" href="/penjualan/{{ $penjualan->id }}/show">Isi Keranjang</a>
                                            
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