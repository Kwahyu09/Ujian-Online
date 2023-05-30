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
                            <input type="hidden" name="nama_mapel" id="nama_mapel" value="{{ $nama_mapel }}">
                            <div class="card-body">
                                <form action="/grupsoal/store" method="POST">
                                    @csrf
                                    <input type="hidden" name="slug_mapel" id="slug_mapel" value="{{ $slug_mapel }}">
                                    <div class="form-group">
                                        <input type="hidden" name="mapel_id" id="mapel_id" value="{{ $mapel_id }}">
                                        <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                                        <label for="nama_grup">Nama {{ $title }}</label>
                                        <input
                                            type="text"
                                            name="nama_grup"
                                            class="form-control @error('nama_grup') is-invalid @enderror"
                                            id="nama_grup"
                                            required="required"
                                            value="{{ old('nama_grup') }}">
                                        @error('nama_grup')
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
                                            id="slug" readonly>
                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
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
    const nama_grup = document.querySelector('#nama_grup');
    const slug_mapel = document.querySelector('#slug_mapel');
    const slug = document.querySelector('#slug');
    
    nama_grup.addEventListener('change', function(){
        fetch('/create/'+ slug_mapel.value +'/checkSlug?nama_grup=' + nama_grup.value + ' ' + nama_mapel.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>

@endsection