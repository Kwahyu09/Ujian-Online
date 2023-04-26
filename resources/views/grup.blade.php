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
                  <button type="button" class="btn btn-primary"><span class="fe fe-plus-circle fe-12 mr-1"></span>Tambah</button>
                </div>
              </div>
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
                            <a href="/grupsoal/{{ $pos->slug }}" class="badge bg-danger badge-light"><i class="fe fe-16 fe-trash-2"></i></a>
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