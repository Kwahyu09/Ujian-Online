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
                      <table class="table table-hover table-borderless border-v">
                        <thead class="thead-dark">
                          <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin(L/P)</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                            <td>1</td>
                            <td>78375189300728</td>
                            <td>Muhammad Riski</td>
                            <td>Jln Salak 1 Panorama</td>
                            <td>Jembatan Kecil, Singaran Pati</td>
                            <td>09-11-2001</td>
                            <td>L</td>
                            <td>mriski@gmail.com</td>
                            <td>password</td>
                            <td>
                              <a href="/{{ $title }}" class="badge bg-warning badge-light"><i class="fe fe-24 fe-edit"></i>
                              </a>
                                |
                              <a href="/{{ $title }}" class="badge bg-danger badge-light"><i class="fe fe-24 fe-trash-2"></i></a>
                            </td>
                          </tr>
                          <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                            <td>2</td>
                            <td>95289300754538</td>
                            <td>Mawar Puspita</td>
                            <td>Selebar</td>
                            <td>Simpang Lima Ratu Samban</td>
                            <td>01-08-2002</td>
                            <td>P</td>
                            <td>mawar@gmail.com</td>
                            <td>password</td>
                            <td>
                              <a href="/{{ $title }}" class="badge bg-warning badge-light"><i class="fe fe-24 fe-edit"></i>
                              </a>
                              | 
                              <a href="/{{ $title }}" class="badge bg-danger badge-light"><i class="fe fe-24 fe-trash-2"></i></a>
                            </td>
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