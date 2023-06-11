@extends('layout.main') @section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h3 mb-0 page-title">Data
                    {{ $title }}</h2>
                    <br>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center my-3">
                                <div class="col">
                                    <form method="post" action="{{ route('cetak') }}">
                                        @csrf
                                        <input type="hidden" name="ujian_id" id="ujian_id" value="{{ $ujian->id }}">
                                        <button class="btn btn-info"><span class="fe fe-printer fe-12 mr-2"></span>Cetak</button>
                                    </form>
                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                            <div class="row align-items-center my-2">
                                <div class="col">
                                    <h3>Laporan Nilai</h3>
                                    <br>
                                    <h5>Kelas : {{ $ujian->kelas }}</h5>
                                    <h5>Mata Pelajaran : {{ $ujian->mapel }}</h5>
                                </div>
                            <div class="col">
                                <br>
                                <br>
                                <br>
                                <h5>Nama Ujian : {{ $ujian->nama_ujian }}</h5>
                                <h5>Tanggal : {{ $ujian->tanggal }}</h5>
                                <br>
                            </div>
                        </div>
                        <div class="flash-data" data-flashdata="{{ session('success') }}">
                        </div>
                        @if ($hasil->count())
                        <!-- table -->
                        <table class="table table-hover table-borderless border-v text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama Siswa</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hasil as $has)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $has->nik_siswa }}</td>
                                    <td>{{ $has->nama_siswa }}</td>
                                    <td>{{ $has->nilai }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    </div>
    <!-- .col-12 -->
@else
    <p class="text-center fs-4">Tidak Ada Data
        {{ $title }}</p>
 @endif
<!-- .container-fluid -->
@endsection