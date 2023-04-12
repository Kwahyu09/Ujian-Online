@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h3 mb-0 page-title">Data {{ $title }}</h2> <br>
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center my-3">
                        <div class="col">
                        <button type="button" class="btn btn-info"><span class="fe fe-printer fe-12 mr-2"></span>Cetak</button>
                      </div>
                      <div class="col-auto">
                        <form class="form-inline mr-auto searchform text-muted">
                          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Cari..." aria-label="Search">
                        </form>
                      </div>
                    </div>
                    <div class="row align-items-center my-2">
                        <div class="col">
                        <h3>Laporan Nilai</h3>
                        <br>
                        <h5>Kelas : X-2023-NKPI</h5>
                        <h5>Mata Pelajaran : Fisika</h5>
                      </div>
                      <div class="col">
                        <br>
                        <br>
                        <br>
                          <h5>Nama Ujian : Ujian Tengah Semester</h5>
                          <h5>Tanggal : 2023-11-04</h5>
                          <br>
                      </div>
                    </div>
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
                          <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                            <td>1</td>
                            <td>78375189300728</td>
                            <td>Muhammad Riski</td>
                            <td>90</td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                            <td>2</td>
                            <td>95289300754538</td>
                            <td>Mawar Puspita</td>
                            <td>95</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection