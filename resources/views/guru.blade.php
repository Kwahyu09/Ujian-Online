@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card shadow">
                <div class="card-body">
                      <h2 class="h3 mb-0 page-title">Data {{ $title }}</h2> <br>
                      <div class="row align-items-center my-4">
                        <div class="col">
                        <button type="button" class="btn btn-primary"><span class="fe fe-plus-circle fe-12 mr-2"></span>Tambah</button>
                        </div>
                        <div class="col-auto">
                          <form class="form-inline mr-auto searchform">
                            <input class="form-control mr-sm-2 pl-4" type="text" placeholder="Cari..." name="search" value="{{ request('search') }}">
                          </form>
                        </div>
                    </div>
                    @if ($post->count())
                      <!-- table -->
                      <table class="table table-hover table-borderless border-v text-center">
                        <thead class="thead-dark">
                          <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Jenis Kelamin(P/L)</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($post as $pos)
                            <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $pos->nip }}</td>
                              <td>{{ $pos->nama_guru }}</td>
                              <td>{{ $pos->pendidikan }}</td>
                              <td>{{ $pos->jurusan }}</td>
                              <td>{{ $pos->jenis_kelamin }}</td>
                              <td>{{ $pos->email }}</td>
                              <td>{{ $pos->password }}</td>
                              <td style="width:90px">
                              <a href="/{{ $title }}" class="badge bg-warning badge-light"><i class="fe fe-16 fe-edit"></i>
                              </a>
                               | 
                              <a href="/{{ $title }}" class="badge bg-danger badge-light"><i class="fe fe-16 fe-trash-2"></i></a>
                            </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @else
                        <p class="text-center fs-4">Tidak Ada Data {{ $title }}</p>
                      @endif
                      <div class="d-flex justify-content-end">
                        {{ $post->links() }}
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection