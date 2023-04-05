@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center my-4">
                <div class="col">
                  <h2 class="h3 mb-0 page-title">{{ $title }}</h2>
                  <br>
                  <button type="button" class="btn btn-primary"><span class="fe fe-plus-circle fe-12 mr-1"></span>Tambah</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <a class="text-decoration-none" href="/siswa">
                  <div class="card shadow mb-4">
                    <div class="card-body text-center">
                      <div class="card-text my-2">
                        <h4>Multimedia</h4>
                        <br>
                        <h2>X</h2>
                      </div>
                    </div> <!-- ./card-text -->
                    <div class="card-footer">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                          <h6>Kelas</h6>
                        </div>
                        <div class="col-auto">
                          <div class="file-action">
                            <a href="/{{ $title }}" class="badge bg-warning badge-light"><i class="fe fe-16 fe-edit"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div> <!-- /.card-footer -->
                  </div>
                  </a>
                </div> <!-- .col -->
                <div class="col-md-3">
                  <a class="text-decoration-none" href="/siswa">
                  <div class="card shadow mb-4">
                    <div class="card-body text-center">
                      <div class="card-text my-2">
                        <h4>Perikanan</h4>
                        <br>
                        <h2>XI</h2>
                      </div>
                    </div> <!-- ./card-text -->
                    <div class="card-footer">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                          <h6>Kelas</h6>
                        </div>
                        <div class="col-auto">
                          <div class="file-action">
                            <a href="/{{ $title }}" class="badge bg-warning badge-light"><i class="fe fe-16 fe-edit"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div> <!-- /.card-footer -->
                  </div>
                  </a>
                </div> <!-- .col -->
                </div> <!-- .row -->
              <nav aria-label="Table Paging" class="my-3">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection