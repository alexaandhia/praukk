@extends('layout.adminpage')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Produk</h4>
            <div class="row d-flex align-items-end m-3">
                <a href="/new-product" class="btn btn-info">Tambah Produk</a>
                @if (Session('success'))
                <div style="width: 100%; padding: 10px">
                <ul class="alert alert-info" role="alert">{{ session('success') }}</ul>
                </div>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                        @endphp
                        @foreach( $produk as $pdk )
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>
                                <a href="../assets/images/produk/{{$pdk->gambar}}" target="_blank">
                                    <img src="{{ asset("assets/produk/{$pdk->gambar}") }}" width="120">
                                </a>
                            </td>
                            <td>{{$pdk->nama_produk}}</td>
                            <td>Rp. {{$pdk->harga}}</td>
                            <td>{{$pdk->stok}}</td>
                            <td>
                                <a href="/edit-product/{{$pdk->id}}" class="btn waves-effect waves-light btn-rounded btn-warning">Edit</a>
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-info" data-toggle="modal"
                                        data-target="#modal-{{$pdk->id}}">Update Stock</button>
                                <form action="/delete-product/{{$pdk->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-danger">Hapus</button>
                                </form>
                            </td>
                            <div class="modal fade" id="modal-{{$pdk->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollableModalTitle">Upload Stok</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>upload stok ({{$pdk->nama_produk}})</p>
                                                <form action="{{route('update-stock', $pdk->id)}}"  method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                        <label class="col-md-12">Stok <span class="text-danger">*</span></label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="stok" class="form-control form-control-line " value="{{ $pdk['stok'] }}">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Edit Stok</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection