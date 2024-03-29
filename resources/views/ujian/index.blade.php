@extends('layout.main') @section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="h3 mb-0 page-title">Data
                            {{ $title }}</h2>
                        <br>
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <a href="/ujian/create" class="btn btn-primary">
                                    <span class="fe fe-plus-circle fe-12 mr-2"></span>Tambah</a>
                            </div>
                            <div class="col-auto">
                                <form class="form-inline mr-auto searchform">
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
                        </div>
                        <!-- table -->
                        <div class="flash-data" data-flashdata="{{ session('success') }}">
                        </div>
                        @if ($post->count())
                        <table class="table table-hover table-borderless border-v text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Ujian</th>
                                    <th>Nama Ujian</th>
                                    <th>Tanggal</th>
                                    <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Grup Soal</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
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
                                    <td>{{ ($post->currentPage() - 1)  * $post->links()->paginator->perPage() + $loop->iteration }}</td>
                                    <td>{{ $pos->kd_ujian }}</td>
                                    <td>{{ $pos->nama_ujian }}</td>
                                    <td>{{ $pos->tanggal }}</td>
                                    <td>{{ $pos->kelas }}</td>
                                    <td>{{ $pos->mapel }}</td>
                                    <td>{{ $pos->grup_soal }}</td>
                                    <td>{{ $pos->waktu_mulai }}</td>
                                    <td>{{ $pos->waktu_selesai }}</td>
                                    <td style="width:90px">
                                        <a href="/ujian/{{ $pos->slug }}/edit" class="badge bg-warning badge-light">
                                            <i class="fe fe-16 fe-edit"></i>
                                        </a>
                                        <a href="/ujian/{{ $pos->slug }}/delete" class="badge bg-danger badge-light tombol-hapus">
                                            <i class="fe fe-16 fe-trash-2"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-center fs-4">Tidak Ada Data
                            {{ $title }}
                        </p>
                        @endif
                        <div class="mt-3 d-flex justify-content-end">
                            {{ $post->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container-fluid -->
    @endsection