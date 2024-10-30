@extends('layouts.master')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Tambah Pelanggan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
             <form action="/penjualan/simpan" class="m-4 ml-5 mr-5" method="post" autocomplete="off">
                @csrf
                <div class="mb-3">
                                <label for="" class="form-label">Nama Pelanggan</label>
                                <select name="id_pelanggan" id="id_pelanggan" class="form-control">
                                    <option value="">Pilih Pelanggan</option>
                                    @foreach($pelanggan as $pelanggan)
                                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama_pelanggan }}</option>
                                    @endforeach
                                </select>
                            </div>
                <button type="submit" class="btn btn-info">Tambah</button>
             </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection