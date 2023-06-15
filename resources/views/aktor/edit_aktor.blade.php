@extends('layout.main') @section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4>Edit Akun
                    {{ $title }}</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="flash-data" data-flashdata="{{ session('success') }}">
                                </div>
                                <div class="card-header">
                                <strong class="card-title">Data
                                    {{ $title }}</strong>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" action="/{{ $role }}/{{ $post->username }}" method="post">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" name="kelas_id" id="kelas_id" value="{{ $kelas_id }}">
                                    <div class="form-group">
                                        <input type="hidden" name="role" id="role" value="{{ $role }}">
                                        <label for="inputAddress">Nama</label>
                                        <input
                                            type="text"
                                            name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            id="nama"
                                            required="required"
                                            value="{{ old('nama', $post->nama) }}" autofocus
                                            @if(auth()->user()->role == "Siswa")
                                            @endif
                                            >
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
                                            value="{{ old('username', $post->username) }}">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Nip / Nik</label>
                                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" required value="{{ old('nik', $post->nik) }}"
                                        @if(auth()->user()->role == "Siswa")
                                            readonly
                                        @endif
                                        >
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
                                                value="{{ old('email', $post->email) }}">
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
                                            @error('password', $post->password)
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer mr-3 mb-3 mt-0">
                                        <button class="btn btn-primary float-right" type="submit">Ubah</button>
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