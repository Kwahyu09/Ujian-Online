@extends('layout.main') 
@section('container')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4>Tambah Data
                    {{ $title }}</h4>
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Import Data
                            {{ $title }}</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
                            @csrf
                            <label>Pilih file excel</label>
                            <div class="flash-data" data-flashdata="{{ session('success') }}"></div>
                            <div class="form-group">
                                <input type="file" name="file" required="required"></div>
                                <div class="d-flex justify-content-start mb-3">
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                                <label>Berikut contoh Format kolom pada exel</label>
                                <br>
                                    <label>Catatan:</label>
                                    <br>
                                        <label>1. kelas_id yang mau diimport harus sama dengan kelas_id yang ditampilkan
                                            di tabel ini</label>
                                        <br>
                                            <label>
                                                2. role yang diisi harus :
                                                <b>Siswa</b>
                                            </label>
                                            <br>
                                            <label>
                                                3. Kolom diexel harus berformat seperti tabel berikut, Misal Kolom A pada exel
                                                berisi nilai kelas id dan seterusnya</label>
                                                <br>
                                                <label>
                                                    4. Tidak Perlu menulis nama kolom di exel langusng data yang mau diimport
                                                </label>
                                                <table class="table table-hover table-borderless border-v">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">kelas_id</th>
                                                            <th scope="col">NIK</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Usename</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Password</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $kelas_id }}</td>
                                                            <td>4932749742087045</td>
                                                            <td>Mawar Melati</td>
                                                            <td>mawaar123</td>
                                                            <td>Siswa</td>
                                                            <td>mawar@gmail.com</td>
                                                            <td>password</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- end section -->
                            </div>
                            <!-- /.col-12 col-lg-10 col-xl-10 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container-fluid -->
                </main>
@endsection