@extends('layout.main') 
@section('container')
    <main role="main" class="main-content">
        <div class="row">
            <div class="col-md-12 col-sm-12 mb-3">
                <div class="card">
                    <div class="card-body"> 
                        <h3 class="text-center mt-3 mb-5">Nilai Ujian Anda :</h3>
                        <h1 class="text-center mt-5 mb-5">{{ $total }}</h1>
                        <div class="mt-3 mb-5 d-flex justify-content-center">
                            <a href="/ujian-siswa" class="btn btn-primary">Tutup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection