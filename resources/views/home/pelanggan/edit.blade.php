@extends('layouts.master')
@section('title','pelanggan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                            <h3>Halaman Edit Data Pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan">Kembali</a>
                        </div>  
                        <div class="card-body">
                            <form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Pelanggan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_pelanggan"
                                        value="{{ old('nama_pelanggan',$pelanggan->nama_pelanggan) }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_pelanggan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        value="{{ old('alamat',$pelanggan->alamat) }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">No-Telepon</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="no_telepon"
                                        value="{{ old('no_telepon',$pelanggan->no_telepon) }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('no_telepon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type=submit>Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
