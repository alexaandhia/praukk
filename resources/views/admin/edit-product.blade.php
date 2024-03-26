@extends('layout.adminpage')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Produk</h4>
            @if ($errors->any())
                  <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </div>
                  @endif
                  @if (Session::get('errorEdit'))
                  <p class="alert alert-danger">{{Session::get('errorEdit')}}</p>
                  @endif
            <form action="{{route('update-product', $produk['id'])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Nama Produk <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="nama_produk" class="form-control form-control-line "  value="{{ $produk['nama_produk'] }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Gambar Produk <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="file" name="gambar" class="form-control form-control-line " accept="image/png, image/jpg, image/jpeg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Harga <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="harga" class="form-control form-control-line " value="{{ $produk['harga'] }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Stok <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="stok" class="form-control form-control-line " value="{{ $produk['stok'] }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection