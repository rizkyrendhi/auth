@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <h5 class="card-header">Featured</h5>
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="card-body">
              @if ($message = Session::get('error'))
                  <div class="alert alert-warning">
                      <p>{{ $message }}</p>
                  </div>
              @endif
              @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
              @endif
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($itemwishlist as $wish)
                    <tr>
                      <td>
                        {{ ++$no }}
                      </td>
                      <td>
                        {{ $wish->produk->kode_produk }}
                      </td>
                      <td>
                        {{ $wish->produk->nama_produk }}
                      </td>
                      <td>
                        <form action="{{ route('wishlist.destroy', $wish->id) }}" method="post" style="display:inline;">
                          @csrf
                          {{ method_field('delete') }}
                          <button type="submit" class="btn btn-sm btn-danger mb-2">
                            Hapus
                          </button>                    
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $itemwishlist->links() }}
              </div>
            </div>
            
        </div>
        <div class="card">
          
          
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection