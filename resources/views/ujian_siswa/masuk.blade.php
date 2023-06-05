@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3>Data Ujian Siswa Kelas </h3>
                            </div>
                            <div class="card-body">
                                <form action="/ujiansiswa/masuk" method="get">
                                    <div class="form-group">
                                        <label for="nama_ujian">Nama Ujian : Ulangan Harian</label>
                                        <br>
                                        <label for="nama_ujian">Kelas : XII Nautika Kapal Penangkap Ikan</label>
                                        <br>
                                        <label for="nama_ujian">Tanggal : 2023-03-20</label>
                                        <br>
                                        <label for="nama_ujian">Waktu Mulai : 13:00:00</label><br>
                                        <label for="nama_ujian">Waktu Selesai : 14:00:00</label>
                                    </div>
                                    <div class="card-footer mr-3 mb-3 mt-0">
                                        <a href="/ujiansiswa-index" class="btn btn-primary float-right" type="submit">Mulai Ujian</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
        </div> <!-- .container-fluid -->
@endsection