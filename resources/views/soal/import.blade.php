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
                        <form method="post" action="/soal/import_excel" enctype="multipart/form-data">
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
                                    <label>Catatan:</label><br>
                                        <label>1. nilai Grup_Soal_id yang mau diimport harus sama dengan Grup_Soal_Id yang ditampilkan di tabel ini</label><br>
                                        <label>2. data kode soal tidak boleh sama dengan data kode soal yang lain/ bersifat unik</label><br>
                                        <label> 3. Kolom diexel harus berformat seperti tabel berikut, Misal Kolom A pada exel berisi nilai kode soal dan seterusnya</label>
                                                <br>
                                                <label>
                                                    4. Tidak Perlu menulis nama kolom di exel langusng data yang mau diimport
                                                </label>
                                                <table class="table table-hover table-borderless border-v">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Kode Soal</th>
                                                            <th>Grup_Soal_Id</th>
                                                            <th>Pertanyaan</th>
                                                            <th>Opsi A</th>
                                                            <th>Opsi B</th>
                                                            <th>Opsi C</th>
                                                            <th>Opsi D</th>
                                                            <th>Jawaban</th>
                                                            <th>Bobot</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>i5jn27d</td>
                                                            <td>{{ $grupsoal_id }}</td>
                                                            <td>Etika berasal dari Bahasa Yunani, yaitu</td>
                                                            <td>Ethus</td>
                                                            <td>Ethas</td>
                                                            <td>Ethis</td>
                                                            <td>Ethos</td>
                                                            <td>Ethos</td>
                                                            <td>1</td>
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