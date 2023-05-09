@extends('layout.main') @section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4>Tambah Akun
                    {{ $title }}</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Data
                                    {{ $title }}</strong>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" action="/{{ $title }}/store" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="role" id="role" value="{{ $role }}">
                                        <label for="inputAddress">Nama</label>
                                        <input
                                            type="text"
                                            name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            id="nama"
                                            required="required"
                                            value="{{ old('nama') }}">
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Username</label>
                                        <input
                                            type="text"
                                            name="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            id="username"
                                            required="required"
                                            value="{{ old('username') }}">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Nik</label>
                                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" required value="{{ old('nik') }}">
                                        @error('nik')
                                        <div class="invalid-feedback">
                                                {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control  @error('email') is-invalid @enderror"
                                                id="email"
                                                required="required"
                                                value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input
                                                type="password"
                                                name="password"
                                                class="form-control  @error('password') is-invalid @enderror"
                                                id="password"
                                                required="required">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer mr-3 mb-3 mt-0">
                                        <button class="btn btn-primary float-right" type="submit">Tambah</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- end section -->
            </div>
            <!-- /.col-12 col-lg-10 col-xl-10 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container-fluid -->
</main>
@endsection