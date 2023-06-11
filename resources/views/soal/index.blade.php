@extends('layout.main') @section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="h3 mb-0 page-title">Data
                            {{ $title }}
                            {{ $grup }}</h2>
                        <br>
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <a href="/soal/create/{{ $grup }}" class="btn btn-primary">
                                    <span class="fe fe-plus-circle fe-12 mr-2"></span>Tambah</a>
                            </div>
                                <form action="{{ url()->full() }}" class="form-inline mr-auto searchform">
                                    <div class="input-group mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Cari.."
                                            name="search"
                                            value="{{ request('search') }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fe fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="flash-data" data-flashdata="{{ session('success') }}">
                            </div>
                            @if ($post->count())
                            <!-- table -->
                            <table class="table table-hover table-borderless border-v">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Soal</th>
                                    <th>Pertanyaan</th>
                                    <th>Gambar</th>
                                    <th>Opsi A</th>
                                    <th>Opsi B</th>
                                    <th>Opsi C</th>
                                    <th>Opsi D</th>
                                    <th>Jawaban</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $pos)
                                <tr
                                    class="accordion-toggle collapsed"
                                    id="c-2474"
                                    data-toggle="collapse"
                                    data-parent="#c-2474"
                                    href="#collap-2474">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pos->kd_soal }}</td>
                                    <td>{!! $pos->pertanyaan !!}</td>
                                    <td>{{ $pos->gambar }}</td>
                                    <td>{!! $pos->opsi_a !!}</td>
                                    <td>{!!$pos->opsi_b !!}</td>
                                    <td>{!! $pos->opsi_c !!}</td>
                                    <td>{!! $pos->opsi_d !!}</td>
                                    <td>{!! $pos->jawaban !!}</td>
                                    <td>{{ $pos->bobot }}</td>
                                    <td style="width:90px">
                                        <a href="/soal/{{ $pos->slug }}/edit" class="badge bg-warning badge-light">
                                            <i class="fe fe-16 fe-edit"></i>
                                        </a>
                                        <a href="/soal/{{ $pos->slug }}/delete" class="badge bg-danger badge-light tombol-hapus">
                                            <i class="fe fe-16 fe-trash-2"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-center fs-4">Tidak Ada Data
                            {{ $title }} {{ $grup }}</p>
                        @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section -->
        </div>
        <!-- .col-12 -->
    </div>
    <!-- .row -->
</div>
<!-- .container-fluid -->
@endsection