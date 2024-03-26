@extends('layout.adminpage')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit User</h4>
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
                  
            <form action="{{route('update-user', $user['id'])}}" method="post">
                @csrf
                @method('PATCH')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Email <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control form-control-line " value="{{ $user['email'] }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Nama <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line " value="{{ $user['name'] }}">
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
                        <option value="admin" {{$user['role'] == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="cashier" {{$user['role'] == 'cashier' ? 'selected' : ''}}>Kasir</option>
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