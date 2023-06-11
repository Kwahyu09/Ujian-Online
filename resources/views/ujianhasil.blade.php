@extends('layout.main')
@section('container')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                  <div class="card shadow">
                    <div class="card-body">
                    <div class="row align-items-center my-2">
                        <div class="col">
                        <h3>Hasil Ujian Siswa SMK N 4 Kota Bengkulu</h3>
                        <br>
                        <h5>Silahkan Pilih Ujian : </h5>
                        <br>
                        <form action="{{ route('hasilujian.hasil_ujian') }}" method="post">
                          @csrf
                        <div class="input-group mb-3">
                          <select class="form-control" id="ujian_id" name="ujian_id">
                            <option selected>Pilih...</option>
                            @foreach ($post as $pos)
                            <option value="{{ $pos->id }}">{{ $pos->nama_ujian }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-auto mr-5">
                        <br>
                        <br>
                        <br>
                        <br>
                          <button type="submit" class="btn btn-info mr-5"><span class="fe fe-info fe-12 mr-2"></span>Lihat</button>
                        </form>
                      </div>
                  </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection