@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h3 mb-0 page-title">Data {{ $title }}</h2> <br>
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center my-4">
                        <div class="col">
                        <button type="button" class="btn btn-primary"><span class="fe fe-plus-circle fe-12 mr-2"></span>Tambah</button>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline mr-auto searchform text-muted">
                                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Cari..." aria-label="Search">
                            </form>
                        </div>
                      </div>
                      <!-- table -->
                      <table class="table table-hover table-borderless border-v text-center">
                        <thead class="thead-dark">
                          <tr>
                            <th>No</th>
                            <th>Nama Ujian</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Grup Soal</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                            <td>1</td>
                            <td>Ujian Tengah Semester</td>
                            <td>X</td>
                            <td>Matematika</td>
                            <td>UTS Matematika</td>
                            <td>
                              <a href="/{{ $title }}" class="badge bg-warning badge-light"><i class="fe fe-24 fe-edit"></i>
                              </a>
                               || 
                              <a href="/{{ $title }}" class="badge bg-danger badge-light"><i class="fe fe-24 fe-trash-2"></i></a>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                            <td>2</td>
                            <td>Ujian Harian</td>
                            <td>XI</td>
                            <td>Sosiologi</td>
                            <td>Harian Matematika</td>
                            <td>
                              <a href="/{{ $title }}" class="badge bg-warning badge-light"><i class="fe fe-24 fe-edit"></i>
                              </a>
                               || 
                              <a href="/{{ $title }}" class="badge bg-danger badge-light"><i class="fe fe-24 fe-trash-2"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection