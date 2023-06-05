@extends('layout.main') 
@section('container')
    <main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4>Ubah Data
                    {{ $title }}</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Data
                                    {{ $title }}</strong>
                            </div>
                            <div class="card-body">
                                <form action="/grupsoal/{{ $post->id }}/update" method="POST">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" name="nama_mapel" id="nama_mapel" value="{{ $nama_mapel }}">
                                    <input type="hidden" name="slug_mapel" id="slug_mapel" value="{{ $slug_mapel }}">
                                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                                    <div class="form-group">
                                        <input type="hidden" name="mapel_id" id="mapel_id" value="{{ $post->mapel_id }}">
                                        <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                                        <label for="nama_grup">Nama {{ $title }}</label>
                                        <input
                                            type="text"
                                            name="nama_grup"
                                            class="form-control @error('nama_grup') is-invalid @enderror"
                                            id="nama_grup"
                                            required="required"
                                            value="{{ old('nama_grup', $post->nama_grup) }}">
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
                                            id="slug" value="{{ $post->slug }}">
                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
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

<script>
    const nama_mapel = document.querySelector('#nama_mapel');
    const nama_grup = document.querySelector('#nama_grup');
    const slug_mapel = document.querySelector('#slug_mapel');
    const slug = document.querySelector('#slug');
    
    nama_grup.addEventListener('change', function(){
        fetch('/grupsoal/'+ slug_mapel.value +'/checkSlug?nama_grup=' + nama_grup.value + ' ' + nama_mapel.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>

@endsection