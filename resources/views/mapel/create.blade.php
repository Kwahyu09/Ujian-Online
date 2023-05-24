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
                                <form action="{{ route('mapel.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_mapel">Nama Mata Pelajaran</label>
                                        <input
                                            type="text"
                                            name="nama_mapel"
                                            class="form-control @error('nama_mapel') is-invalid @enderror"
                                            id="nama_mapel"
                                            required="required"
                                            value="{{ old('nama_mapel') }}">
                                        @error('nama_mapel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input
                                            type="text"
                                            name="slug"
                                            class="form-control @error('slug') is-invalid @enderror"
                                            id="slug"
                                            value="{{ old('slug') }}" readonly>
                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="user_id">Guru Pengampu</label>
                                        <select name="user_id" class="form-control" id="user_id" 
                                            required="required"
                                            value="{{ old('nama_user') }}">
                                        @foreach ($post as $pos)
                                            <option value="{{ $pos->id }}">{{ $pos->nama }}</option>
                                        @endforeach
                                        </select>
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

<script>
    const nama_mapel = document.querySelector('#nama_mapel');
    const slug = document.querySelector('#slug');

    nama_mapel.addEventListener('change', function(){
        fetch('/mapel/create/checkSlug?nama_mapel=' + nama_mapel.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection