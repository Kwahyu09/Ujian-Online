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
                            <div class="flash-dataerror" data-flashdataerror="{{ session('success') }}">
                            </div>
                            <form action="{{ route('ujian-data') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="nama_ujian">Nama Ujian</label>
                                        <select class="form-control" id="id_ujian" name="id_ujian" required>
                                            @foreach ($post as $pos)
                                                @if(old('nama_ujian')  == $pos->nama_ujian )
                                                    <option value="{{ $pos->id }}" selected>{{ $pos->nama_ujian }}</option>
                                                @else
                                                    <option value="{{ $pos->id }}">{{ $pos->nama_ujian }}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kd_ujian">Kode Ujian</label>
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
                                        <input href="/ujian-siswa/masuk" class="btn btn-primary float-right" value="Masuk Ujian" type="submit">
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