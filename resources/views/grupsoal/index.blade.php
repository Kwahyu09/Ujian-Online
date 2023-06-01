@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center my-4">
                <div class="col">
                  <h2 class="h3 mb-0 page-title">Data {{ $title }} {{ $nama_mapel }}</h2>
                  <br>
                  <a href="/create/{{ $slug }}" class="btn btn-primary"><span class="fe fe-plus-circle fe-12 mr-1"></span>Tambah</a>
                </div>
              </div>
              @if(session()->has('success'))
                  <div class="alert alert-success alert-block">
                    {{ session('success') }}
                      <button type="button" class="close" data-dismiss="alert">
                          <a href="/" style="text-decoration: none;">×</a>
                      </button>
                </div>
              @endif
              @if ($post->count())
              <div class="row">
                @foreach ($post as $pos)
                <div class="col-md-3">
                  <a class="text-decoration-none" href="/grupsoal/{{ $pos->slug }}">
                  <div class="card shadow mb-4">
                    <div class="card-body text-center">
                      <div class="card-text my-2">
                        <h5>{{ $pos->nama_grup }}</h5>
                        <br>
                      </div>
                    </div> <!-- ./card-text -->
                    <div class="card-footer">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                          <h6>Grup Soal</h6>
                        </div>
                        <div class="col-auto">
                          <div class="file-action">
                            <a href="/grupsoal/{{ $pos->slug }}" class="badge bg-warning badge-light"><i class="fe fe-16 fe-edit"></i>
                            </a>
                            |
                            <form action="/grupsoal/{{ $pos->slug }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger badge-light border-0" onclick="return confirm('Yakin Data Ini Dihapus ?')"><i class="fe fe-16 fe-trash-2"></i></button>
                              </form>
                            </td>
                          </div>
                        </div>
                      </div>
                    </div> <!-- /.card-footer -->
                  </div>
                  </a>
                </div> <!-- .col -->
                @endforeach
              </div> <!-- .row -->
              @else
              <p class="text-center fs-4">Tidak Ada Data
                  {{ $title }} {{ $nama_mapel }}</p>
              @endif
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection