@extends('layout.main') 
@section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h3 mb-5 page-title">{{ $judul }} Berdasarkan {{ $title }}</h2>
                @if ($post->count())
                <div class="row">
                  @foreach ($post as $pos)
                    <div class="col-md-3">
                        <a class="text-decoration-none" href="/{{ $pos->slug }}">
                            <div class="card shadow mb-4">
                                <div class="card-body text-center">
                                    <div class="card-text my-2">
                                        <br>
                                        <h2>{{ $pos->nama_mapel }}</h2>
                                        <br>
                                    </div>
                                </div>
                                <!-- ./card-text -->
                                <div class="card-footer">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-auto">
                                            <h6>Mata Pelajaran</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <!-- .col -->
                </div>
                <!-- .row -->
                @else
                <p class="text-center fs-4">Tidak Ada Data
                    {{ $title }}</p>
                @endif
                <div class="d-flex justify-content-end">
                    {{ $post->links() }}
                </div>
                <nav aria-label="Table Paging" class="my-3">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- .col-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container-fluid -->
    @endsection