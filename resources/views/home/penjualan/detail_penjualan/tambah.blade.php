@extends('layouts.master')
@section('title','Tambah Keranjang')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Tambah Keranjang</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <form action="/detailpenjualan/simpan" class="mx-3" method="post" autocomplete="off">
                @csrf
                <div class="input-group input-group-outline mb-3 w-75 mx-3">
                  <input 
                  type="hidden"
                  id="id_penjualan" 
                  name="id_penjualan" 
                  class="form-control"
                  value="{{ $penjualan->id}}"
                  >    
                </div>
                
                <label class="form-label mx-3" for="nama_pelanggan">Nama Pelanggan</label>
                <div class="input-group input-group-outline mb-3 w-75 mx-3">
                    @foreach($pelanggan as $pelanggan)
                    <input 
                        type="text"
                        id="nama_pelanggan" 
                        name="nama_pelanggan" 
                        class="form-control"
                        disabled
                        value="{{ $pelanggan->nama_pelanggan }}"
                    >    
                    @endforeach    
                </div>
                
                <label class="form-label mx-3" for="ProdukID">Nama Produk</label>
                <div class="input-group input-group-outline mb-3 w-75 mx-3">
                    <select name="produkID" id="produkID" class="form-control">
                        <option value="">Pilih Produk</option>
                        @foreach($produk as $item)
                            <option value="{{ $item->id }}" data-harga="{{ $item->harga }}">{{ $item->nama_produk }}</option>
                        @endforeach
                    </select>  
                </div>      
            
                <label class="form-label mx-3" for="harga">Harga</label>
                <div class="input-group input-group-outline mb-3 w-75 mx-3">
                    <input 
                        type="number"
                        id="harga" 
                        name="harga" 
                        class="form-control"
                        disabled
                        value=""
                    >  
                </div>      
                <label class="form-label mx-3" for="jumlah_produk">Jumlah Produk</label>
                <div class="input-group input-group-outline mb-3 w-75 mx-3">
                    <input
                    type="number" 
                    id="jumlah_produk" 
                    name="jumlah_produk" 
                    class="form-control"
                    oninput="bebas()"
                    >  
                </div>
                <label class="form-label mx-3" for="subtotal">Subtotal</label>
                <div class="input-group input-group-outline mb-3 w-75 mx-3">
                    <input 
                        type="number"
                        id="subtotal"
                        name="subtotal" 
                        class="form-control"
                        readonly
                        value=""
                    >  
                </div>  
                <button type="submit" class="btn btn-info m-2">Tambah</button>
            </form>
            
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Table Detail Penjualan</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Produk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah Produk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subtotal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach($detailpenjualan as $detailpenjualan)
                    <tr>
                      <td> <h6 class="mb-0 text-sm m-3">{{ $detailpenjualan->Produk->nama_produk }}</h6> </td>
                      <td> <p class="text-xs text-secondary mb-0">{{ $detailpenjualan->Produk->jumlah_produk }}</p> </td>
                      <td> <p class="text-xs text-secondary mb-0">Rp. {{ number_format ($detailpenjualan->subtotal, 2, '.','.')}}</p> </td>
                      <td class="align-middle text-center text-sm">
                        <a href="/detailpenjualan/" class="badge badge-sm bg-gradient-danger">
                          Hapus
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    </tr>
                  </tbody>
                </table>
              </div>
              <form action="" class="d-flex justify-content-between">
                <div class="d-block">   
                    <label for="" class="mx-3">Subtotal</label> 
                    <input type="text" name="subtotal" value="0" class="border-0 form-control mx-3" readonly>
                </div>
                <button type="submit" class="btn btn-info mx-3 w-25">Bayar</button>
              </form>
            </div>
          </div>
      </div>
    </div>
</div>

<script>
    // Ambil elemen dropdown dan input harga
    const produkDropdown = document.getElementById('produkID');
    const hargaInput = document.getElementById('harga');

    // Tambahkan event listener untuk mendeteksi perubahan di dropdown produk
    produkDropdown.addEventListener('change', function() {
        const selectedOption = produkDropdown.options[produkDropdown.selectedIndex];
        const harga = selectedOption.getAttribute('data-harga');

        if (harga) {
            hargaInput.value = harga;
        } else {
            hargaInput.value = '';
        }
    });
</script>

<script>
    function bebas() {
        const harga = document.getElementById('harga').value;
        const jumlahProduk = document.getElementById('jumlah_produk').value;

        const subtotal = harga * jumlahProduk;

        document.getElementById('subtotal').value = subtotal;
        
    }
</script>

<script>
function sweet(){
  Swal.fire({
  title: "Berhasil!",
  text: "session('berhasil')",
  icon: "success"
});
}
</script>


@endsection\