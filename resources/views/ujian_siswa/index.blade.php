@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3>Menu Ujian Siswa SMK N 4 Kota Bengkulu</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="GET">
                                    <div class="form-group">
                                        <label for="nama_ujian">Nama Ujian</label>
                                        <select class="form-control" id="nama_ujian" name="nama_ujian">
                                            @foreach ($post as $pos)
                                                @if(old('nama_ujian')  == $pos->nama_ujian )
                                                    <option value="{{ $pos->nama_ujian }}" selected>{{ $pos->nama_ujian }}</option>
                                                @else
                                                    <option value="{{ $pos->nama_ujian }}">{{ $pos->nama_ujian }}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        @error('nama_ujian')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ujian">Kode Ujian</label>
                                        <input
                                            type="text"
                                            name="kd_ujian"
                                            class="form-control @error('kd_ujian') is-invalid @enderror"
                                            id="kd_ujian"
                                            required="required"
                                            value="{{ old('kd_ujian') }}">
                                        @error('kd_ujian')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="card-footer mr-3 mb-3 mt-0">
                                        <a href="/ujiansiswa/masuk" class="btn btn-primary float-right" type="submit">Masuk</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
        </div> <!-- .container-fluid -->
@endsection