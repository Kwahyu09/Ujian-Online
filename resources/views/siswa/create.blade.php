@extends('layout.main') 
@section('container')
    <main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4>Tambah Data
                    {{ $title }}</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Data
                                    {{ $title }}</strong>
                            </div>
                            <div class="card-body">
                                <form action="/siswa/store" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="kelas_id" id="kelas_id" value="{{ $kelas_id }}">
                                        <label for="nama">Nama {{ $title }}</label>
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
                                        <label for="username">Username</label>
                                        <input
                                            type="text"
                                            name="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            id="username">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" required value="{{ old('alamat') }}"></textarea>
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input
                                                type="text"
                                                name="tempat_lahir"
                                                class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                id="tempat_lahir"
                                                required="required"
                                                value="{{ old('tempat_lahir') }}">
                                            @error('tempat_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input
                                                type="date"
                                                name="tanggal_lahir"
                                                class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                id="tanggal_lahir"
                                                required="required"
                                                value="{{ old('tanggal_lahir') }}">
                                            @error('tanggal_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-check-inline mt-2">
                                        <label for="">Jenis Kelamin : </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="jenis_kel" id="jenis_kel" value="L">
                                        <label class="form-check-label" for="jenis_kel">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="jenis_kel" id="jenis_kel" value="P">
                                        <label class="form-check-label" for="jenis_kel">Perempuan</label>
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