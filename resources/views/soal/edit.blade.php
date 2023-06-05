@extends('layout.main') @section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4>Ubah Data
                    {{ $title }}</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Data
                                    {{ $title }}</strong>
                            </div>
                            @if(session()->has('success'))
                                <div class="alert alert-success alert-block">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert">
                                        <a href="/" style="text-decoration: none;">×</a>
                                    </button>
                                </div>
                            @endif
                            <div class="card-body">
                                <form action="/soal/{{ $post->slug }}/update" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="row mb-4">
                                        <div class="col-md-2">
                                            <input type="hidden" name="kd_soal" id="kd_soal" value="{{ $post->kd_soal }}">
                                            <input type="hidden" name="slug" id="slug" value="{{ $post->slug }}">
                                            <input type="hidden" name="grupsoal_id" id="grupsoal_id" value="{{ $post->grupsoal_id }}">
                                            <h5 class="card-title">Pertanyaan</h5>
                                        </div>
                                        <div class="col-md-10 mb-4">
                                            @error('pertanyaan')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="pertanyaan" type="hidden" name="pertanyaan" value="{{ old('pertanyaan',$post->pertanyaan) }}">
                                            <trix-editor input="pertanyaan"></trix-editor>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 class="card-title mt-2">Opsi A</h5>
                                        </div>
                                        <div class="col-md-10 mb-4">
                                            @error('opsi_a')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="opsi_a" type="hidden" name="opsi_a" value="{{ old('opsi_a',$post->opsi_a) }}">
                                            <trix-editor input="opsi_a"></trix-editor>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 class="card-title mt-2">Opsi B</h5>
                                        </div>
                                        <div class="col-md-10 mb-4">
                                            @error('opsi_b')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="opsi_b" type="hidden" name="opsi_b" value="{{ old('opsi_b',$post->opsi_b) }}">
                                            <trix-editor input="opsi_b"></trix-editor>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 class="card-title mt-2">Opsi C</h5>
                                        </div>
                                        <div class="col-md-10 mb-4">
                                            @error('opsi_c')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="opsi_c" type="hidden" name="opsi_c" value="{{ old('opsi_c',$post->opsi_c) }}">
                                            <trix-editor input="opsi_c"></trix-editor>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 class="card-title mt-2">Opsi D</h5>
                                        </div>
                                        <div class="col-md-10 mb-2">
                                            @error('opsi_d')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="opsi_d" type="hidden" name="opsi_d" value="{{ old('opsi_d',$post->opsi_d) }}">
                                            <trix-editor input="opsi_d"></trix-editor>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-2">
                                            <h5 class="card-title mt-2">Jawaban</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" id="jawaban" name="jawaban">
                                                @if($post->jawaban ==  $post->opsi_a)
                                                    <option value="opsi_a" selected>Opsi A</option>
                                                    <option value="opsi_b">Opsi B</option>
                                                    <option value="opsi_c">Opsi C</option>
                                                    <option value="opsi_d">Opsi D</option>
                                                @elseif($post->jawaban ==  $post->opsi_b)
                                                    <option value="opsi_a">Opsi A</option>
                                                    <option value="opsi_b" selected>Opsi B</option>
                                                    <option value="opsi_c">Opsi C</option>
                                                    <option value="opsi_d">Opsi D</option>
                                                @elseif($post->jawaban ==  $post->opsi_c)
                                                    <option value="opsi_a">Opsi A</option>
                                                    <option value="opsi_b">Opsi B</option>
                                                    <option value="opsi_c" selected>Opsi C</option>
                                                    <option value="opsi_d">Opsi D</option>
                                                @elseif($post->jawaban ==  $post->opsi_d)
                                                    <option value="opsi_a">Opsi A</option>
                                                    <option value="opsi_b">Opsi B</option>
                                                    <option value="opsi_c">Opsi C</option>
                                                    <option value="opsi_d" selected>Opsi D</option>
                                                @else
                                                    <option value="opsi_a">Opsi A</option>
                                                    <option value="opsi_b">Opsi B</option>
                                                    <option value="opsi_c">Opsi C</option>
                                                    <option value="opsi_d">Opsi D</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-2">
                                            <h5 class="card-title mt-2">Bobot</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control @error('bobot') is-invalid @enderror" id="bobot" name="bobot" value="{{ old('bobot',$post->bobot) }}" required>
                                            <?php
                                            for ($i = 1; $i <= 100; $i++){ ?>
                                                @if(old('bobot',$post->bobot)  == $i )
                                                    <option value="<?= $i ?>" selected><?= $i ?></option>
                                                @else
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                @endif
                                            <?php
                                                }
                                            ?>
                                            </select>
                                            @error('bobot')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- end section -->
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