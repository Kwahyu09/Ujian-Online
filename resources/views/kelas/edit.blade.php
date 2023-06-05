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
                                <form action="/kelas/{{ $post->slug }}/update" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <input
                                            type="text"
                                            name="jurusan"
                                            class="form-control @error('jurusan') is-invalid @enderror"
                                            id="jurusan"
                                            required="required"
                                            value="{{ old('jurusan', $post->jurusan) }}">
                                        @error('jurusan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="tahun">Tahun</label>
                                                <select name="tahun" class="form-control  @error('tahun') is-invalid @enderror" id="tahun">
                                                <?php
                                                for ($year = (int)date('Y'); 1990 <= $year; $year--): ?>
                                                @if(old('tahun', $post->tahun) == $year)
                                                    <option value="<?=$year;?>" selected><?=$year;?></option>
                                                @else
                                                    <option value="<?=$year;?>"><?=$year;?></option>
                                                @endif
                                                <?php endfor; ?>
                                                </select>
                                                @error('tahun')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="singkat_jur">Singkat Jurusan</label>
                                            <input
                                                type="text"
                                                name="singkat_jur"
                                                class="form-control @error('singkat_jur') is-invalid @enderror"
                                                id="singkat_jur"
                                                required="required"
                                                value="{{ old('singkat_jur' , $post->singkat_jur) }}">
                                            @error('singkat_jur')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_kelas">Nama {{ $title }}</label>
                                        <input
                                            type="text"
                                            name="nama_kelas"
                                            class="form-control @error('nama_kelas') is-invalid @enderror"
                                            id="nama_kelas"
                                            required="required"
                                            value="{{ old('nama_kelas', $post->nama_kelas) }}">
                                        @error('nama_kelas')
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
                                            id="slug" required="required" readonly value="{{ old('slug', $post->slug) }}">
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
    const nama_kelas = document.querySelector('#nama_kelas');
    const tahun = document.querySelector('#tahun');
    const singkat_jur = document.querySelector('#singkat_jur');
    const slug = document.querySelector('#slug');

    nama_kelas.addEventListener('change', function(){
        fetch('/kelas/create/checkSlug?nama_kelas=' + nama_kelas.value + ' ' + tahun.value + ' ' + singkat_jur.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>

@endsection