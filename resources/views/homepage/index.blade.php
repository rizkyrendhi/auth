@extends('layouts.template')
@section('content')
@endsection

<!-- kategori produk -->
<br><br>
  <!-- carousel -->
  <div class="container">
  <div class="row mt-5">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner" style="height: 300px; ">
          <div class="carousel-item active">
              <img src="{{ asset('images/carousel-3.jpg') }}" class="d-block w-150 h-250" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/carousel-2.jpg') }}" class="d-block w-150 h-250" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/carousel-4.jpg') }}" class="d-block w-150 h-250" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
  <!-- end carousel -->
  <br>
  <div class="container">
    <div class="col">
      
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <div class="card bg-dark" style="border-color: white; color:white;">
        <div class="card-body" style="width: 1500px;">
          <a class="brand mt-4 mt-lg-0"  style="color: white; font-size: 20px; text-decoration: none;">
            <strong> Platform </strong>&nbsp &nbsp &nbsp <a>|</a>
          </a> &nbsp &nbsp
          <a class="brand mt-4 mt-lg-0" href="{{ URL::to('kategori') }}">
            <img
              src="{{ asset('images/gam-1.png') }}"
              height="40"
              alt="MDB Logo"
              loading="lazy"
            />
          </a>&nbsp &nbsp &nbsp &nbsp
          <a class="brand mt-4 mt-lg-0" href="{{ URL::to('kategori') }}">
            <img
              src="{{ asset('images/gam-4.png') }}"
              height="40"
              alt="MDB Logo"
              loading="lazy"
            />
          </a>&nbsp &nbsp &nbsp 
          <a class="brand mt-4 mt-lg-0" href="{{ URL::to('kategori') }}">
            <img
              src="{{ asset('images/gam-3.png') }}"
              height="40"
              alt="MDB Logo"
              loading="lazy"
            />
          </a>&nbsp &nbsp &nbsp &nbsp
          <a class="brand mt-4 mt-lg-0" href="{{ URL::to('kategori') }}">
            <img
              src="{{ asset('images/gam-2.png') }}"
              height="40"
              alt="MDB Logo"
              loading="lazy"
            />
          </a>&nbsp &nbsp &nbsp &nbsp
          <a class="brand mt-4 mt-lg-0" href="{{ URL::to('kategori') }}">
            <img
              src="{{ asset('images/gam-5.png') }}"
              height="40"
              alt="MDB Logo"
              loading="lazy"
            />
          </a>
        </div>
    </div>
    </div>
  
  <!-- produk Terbaru-->
  <div class="row mt-4" >
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-left" style="color: white; ">Rekomendasi</h2>
     
    </div>
    @foreach($itemproduk as $produk)
    @if ($produk->foto !=null)
    <!-- produk pertama -->
    <div class="col-md-3">
      <div class="card mb-4 shadow-sm bg-dark">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{ \Storage::url($produk->foto) }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
            <p class="card-text" style="color: white;">
            {{ $produk->nama_produk }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-dark">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p style="color: white;">
              {{ number_format($produk->harga, 2) }}
              </p>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
@endforeach
  <!-- produk Terbaru-->
  <!--<div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-left" style="color: white; ">Rekomendasi</h2>
      <a class="text-right" style="color: white; text-decoration: none; float: right;" href="{{ URL::to('produk') }}">Lihat Produk Lainnya  &nbsp<i class="fa-solid fa-arrow-right"></i></a>
    </div>-->
     <!-- kategori pertama -->
     <!--<div class="col-md-2">
      <div class="card mb-4 shadow-sm bg-dark">
        <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{asset('images/makanan.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
            <p class="card-text">Makanan</p>
          </a>
        </div>
      </div>
    </div>-->
    <!-- kategori kedua -->
    <!--<div class="col-md-2">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{asset('images/sabun.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
            <p class="card-text">Shampoo</p>
          </a>
        </div>
      </div>
    </div>-->
    <!-- kategori ketiga -->
    <!--<div class="col-md-2">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{asset('images/aksesoris.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Aksesoris</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>-->
  <!-- end produk terbaru -->