@extends('layout.main')
@section('container')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="flash-data" data-flashdata="{{ session('success') }}">
              </div>
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">Selamat Datang {{ $aktor }} !</h2>
                </div>
              <div class="row my-4">
                @if (Auth::user()->role == 'Admin')
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Staff</small>
                          <h3 class="card-title mb-0">{{ $staff }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-user"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                @endif
                @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Staf')
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Guru</small>
                          <h3 class="card-title mb-0">{{ $guru }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-user"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Mata Pelajaran</small>
                          <h3 class="card-title mb-0">{{ $mapel }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-book-open"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Kelas</small>
                          <h3 class="card-title mb-0">{{ $kelas }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-file-text"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Siswa</small>
                          <h3 class="card-title mb-0">{{ $siswa }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-user"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                @endif
                @if (Auth::user()->role == 'Guru')
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Mata Pelajaran</small>
                          <h3 class="card-title mb-0">{{ $mapel }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-book-open"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                @endif
                @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Guru')

                 <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Grup Soal</small>
                          <h3 class="card-title mb-0">{{ $grupsoal }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-folder"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Soal</small>
                          <h3 class="card-title mb-0">{{ $soal }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-file-text"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Ujian</small>
                          <h3 class="card-title mb-0">{{ $ujian }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-file-text"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <small class="text-muted mb-1">Jumlah Hasil Ujian</small>
                          <h3 class="card-title mb-0">{{ $hasilujian }}</h3>
                        </div>
                        <div class="col-4 text-right">
                          <i class="fe fe-file-text"></i>
                        </div>
                      </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
                @endif
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
      </main> <!-- main -->
@endsection