@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3>Data Ujian Siswa</h3>
                            </div>
                            <div class="card-body">
                                <form action="/ujiansiswa/masuk" method="get">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nama">Nama :
                                                {{ Auth::user()->nama }}
                                            </label><br>
                                            <label>NIK :
                                                {{ Auth::user()->nik }}
                                            </label>
                                            <label for="nama_ujian">Nama Ujian :
                                                 {{ $post->nama_ujian }}</label>
                                            <br>
                                            <label for="kelas">Kelas :
                                                 {{ $post->kelas }}</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="nama_ujian">Tanggal :
                                                 {{ $post->tanggal }}</label>
                                            <br>
                                            <label for="nama_ujian">Waktu Mulai :
                                                 {{ $post->waktu_mulai }}</label>
                                            <br>
                                                <label for="nama_ujian">Waktu Selesai :
                                                     {{ $post->waktu_selesai }}</label>
                                        </div>
                                    </div>
                                    <h6>Petunjuk Ujian :</h6>
                                    1. Dalam pengerjaan ujian dilakukan dengan memilih salah satu jawaban yang benar
                                    <br>
                                        2. Lalu mengklik tombol Tambah Jawaban (menyimpan jawaban) dan lanjut ke soal berikutnya<br>
                                            3. Ketika Mengubah Jawaban Harus Mengklik tombol Ubah Jawaban<br>
                                            4. Apabila telah selesai maka dapat mengklik tombol Selesai Ujian<br>
                                                5. Segera Selesaikan Semua pertanyaan, jika waktu sudah selesai otomatis sistem
                                                ujian akan berakhir<br></div>
                                    <div class="card-footer mr-3 mb-3 mt-0">
                                        <a href="/masuk-ujian/{{ $post->slug }}" class="btn btn-primary float-right" type="submit">Mulai Ujian</a>
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