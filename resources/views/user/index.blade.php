@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline bg-dark">
        <div class="card-body box-profile">
          <div class="text-center">
            <img src="{{ asset('img/user1-128x128.jpg') }}" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <h3 class="profile-username text-center" style="color: white;">{{ Auth::user()->name }}</h3>
    
          <hr>
          <strong style="color: white;">
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted" style="color: white;">
            Jekulo, Kab Kudus
          </p>
          <hr>
          <strong style="color: white;">
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted" style="color: white;">
            f4dlur@gmail.com
          </p>
          <hr>
          <strong style="color: white;">
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted" style="color: white;">
            Jekulo, Kab Kudus
          </p>
          <hr>
          <a href="{{ URL::to('user/setting') }}" class="btn btn-primary btn-block">Setting</a>
        </div>
      </div>      
    </div>
    <div class="col col-lg-8 col-md-8">
      <div class="card card-primary card-outline bg-dark">
        <div class="card-header">
          <h3 class="card-title" style="color: white;">History Transaksi</h3>
        </div>
        <div class="card-body">
       
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr style="color: white;">
                  <th>No</th>
                  <th>Invoice</th>
                  <th>Sub Total</th>
                  <th>Diskon</th>
                  <th>Ongkir</th>
                  <th>Total</th>
                  <th>Status Pembayaran</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
             
                <tr>
                  <td>
                  
                  </td>
                  <td>
                    
                  </td>
                  <td>
                   
                  </td>
                  <td>
                                  
                  </td>
                  <td>
                    
                  </td>
                  <td>
                    
                  </td>
                  <td>
                    
                  </td>
                  <td>
                    
                  </td>
                  <td>
                    <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                  </td>
                </tr>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection