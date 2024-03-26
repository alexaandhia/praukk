@extends('layout.adminpage')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah User</h4>
            <form action="/register" method="post">
                @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Email <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control form-control-line ">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Nama <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Role <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                        <select class="form-control" id="" name="role">
                        <option selected disabled>Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="cashier">Kasir</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Password <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="password" class="form-control form-control-line ">
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