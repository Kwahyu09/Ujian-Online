@extends('layout.main') @section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="h3 mb-0 page-title">Data
                            {{ $title }}
                            Kelas
                            {{ $kelas }}</h2>
                        <br>
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <a href="/siswa/create/{{ $kelas }}" class="btn btn-primary">
                                    <span class="fe fe-plus-circle fe-12 mr-2"></span>Tambah</a>
                            </div>
                            <div class="col-auto">
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
                        </div>
                        <!-- table -->
                        <div class="flash-data" data-flashdata="{{ session('success') }}">
                        </div>
                        @if ($post->count())
                        <table class="table table-hover table-borderless border-v">
                            <thead class="thead-dark">
                                <tr> 
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
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
                                    <td>{{ $pos->nik }}</td>
                                    <td>{{ $pos->nama }}</td>
                                    <td>{{ $pos->username }}</td>
                                    <td>{{ $pos->email }}</td>
                                    <td style="width:90px">
                                        <a href="/siswa/{{ $pos->username }}/edit" class="badge bg-warning badge-light">
                                            <i class="fe fe-16 fe-edit"></i>
                                        </a>
                                        <a href="/siswa/{{ $pos->username }}/delete" class="badge bg-danger badge-light tombol-hapus">
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
                            Kelas
                            {{ $kelas }}</p>
                        @endif
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