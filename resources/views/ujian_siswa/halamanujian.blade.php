@extends('layouts.client.app') @section('content')
    <!-- Page content -->
    <style>
        /*----  Main Style  ----*/
        #cards_landscape_wrap-2 {
            text-align: center;
            background: #F7F7F7;
        }

        #cards_landscape_wrap-2 a {
            text-decoration: none;
            outline: none;
        }

        #cards_landscape_wrap-2 .card-flyer {
            border-radius: 5px;
        }

        #cards_landscape_wrap-2 .card-flyer .image-box {
            background: #ffffff;
            overflow: hidden;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
            border-radius: 5px;
        }

        #cards_landscape_wrap-2 .card-flyer .image-box img {
            -webkit-transition: all .9s ease;
            -moz-transition: all .9s ease;
            -o-transition: all .9s ease;
            -ms-transition: all .9s ease;
            width: 100%;
            height: 200px;
        }

        #cards_landscape_wrap-2 .card-flyer:hover .image-box img {
            opacity: 0.7;
            -webkit-transform: scale(1.15);
            -moz-transform: scale(1.15);
            -ms-transform: scale(1.15);
            -o-transform: scale(1.15);
            transform: scale(1.15);
        }

        #cards_landscape_wrap-2 .card-flyer .text-box {
            text-align: center;
        }

        #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
            padding: 30px 18px;
        }

        #cards_landscape_wrap-2 .card-flyer {
            background: #FFFFFF;
            margin-top: 100px;
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            -ms-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
        }

        #cards_landscape_wrap-2 .card-flyer:hover {
            background: #fff;
            box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            -ms-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            margin-top: 50px;
        }

        #cards_landscape_wrap-2 .card-flyer .text-box p {
            margin-bottom: 0px;
            padding-bottom: 0px;
            font-size: 14px;
            letter-spacing: 1px;
            color: #000000;
        }

        #cards_landscape_wrap-2 .card-flyer .text-box h6 {
            margin-bottom: 4px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Roboto Black', sans-serif;
            letter-spacing: 1px;
            color: #00acc1;
        }
    </style>
    <div class="container-fluid mt--5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card ">
                                <div class="card-header">
                                    <div class="card-tools " style="float:right">

                                        <span style="color:blue;font-size:20px ">Waktu Pengerjaan &nbsp; </span>&nbsp;<span
                                            style="color:red;font-size:20px"id="demo"></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @if ($data_soalto->id_jenissoal == 17)
                                            <div class="col-sm-2"></div>
                                        @endif
                                        <div class="col-sm-8">
                                            <div class="card">
                                                @if ($data_soalto != null)
                                                    <div class="card-body">
                                                        @if ($data_soalto->id_jenissoal == 23)
                                                            <form method="get"
                                                                action="{{ route('client-nextkecermatan', [$data_soalto->id_soalto, $id_to, $id_kolom]) }}"
                                                                enctype="multipart/form-data">
                                                            @else
                                                                <form method="get"
                                                                    action="{{ route('client-simpan_jawaban', [$data_soalto->id_soalto, $id_to]) }}"
                                                                    enctype="multipart/form-data">
                                                        @endif
                                                        <p>
                                                        <div class="row col-md-12">
                                                            <div class="col-md-1" align="center">
                                                                {{ $data_soalto->no_soalto }}. <br>
                                                                <!--<img src="{{ asset('storage/soalto/' . $data_soalto->file_soal) }}" style="width:800px; height:200px" class="img-fluid" alt="">-->
                                                            </div>
                                                            @if ($data_soalto->soal != null)
                                                                <div class="col-md-11" align="justify">
                                                                    {!! $data_soalto->soal !!} <br>
                                                                    @endif @if ($data_soalto->file_soal != null)
                                                                        <img src="{{ asset('storage/soalto/' . $data_soalto->file_soal) }}"
                                                                            style="width:1000px;" class="img-fluid"
                                                                            alt="">
                                                                    @endif
                                                                </div>
                                                        </div>
                                                        </p>
                                                        <input type="hidden" name="id_soalto"
                                                            value="{{ $data_soalto->id_soalto }}">
                                                        @if ($data_soalto->jawabanDiisi($data_soalto->id_soalto, $data_soalto->id_to, $data_soalto->tes_ke))
                                                            @if ($data_soalto->jawabanDiisi($data_soalto->id_soalto, $data_soalto->id_to, $data_soalto->tes_ke)->jawaban ==
                                                                'A')
                                                                <div class="row col-md-12">
                                                                    <div class="row col-md-2"></div>
                                                                    <div class="col-md-1">
                                                                        <input type="radio" name="pilihan" value="A"
                                                                            required checked="checked">
                                                                    </div>A. <div class="col-md-9" align="justify">
                                                                        {!! $data_soalto->pilgan_a !!} <br>
                                                                        <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilgana) }}"
                                                                            class="img-fluid" alt="">
                                                                        <br>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                                @if ($data_soalto->pilgan_b != null)
                                                                    <div class="row col-md-12">
                                                                        <div class="row col-md-2"></div>
                                                                        <div class="col-md-1">
                                                                            <input type="radio" name="pilihan"
                                                                                value="B" required>
                                                                        </div>B. <div class="col-md-9" align="justify">
                                                                            {!! $data_soalto->pilgan_b !!}</div>
                                                                    </div>
                                                                    @endif @if ($data_soalto->pilgan_c != null)
                                                                        <div class="row col-md-12">
                                                                            <div class="row col-md-2"></div>
                                                                            <div class="col-md-1">
                                                                                <input type="radio" name="pilihan"
                                                                                    value="C" required>
                                                                            </div>C. <div class="col-md-9" align="justify">
                                                                                {!! $data_soalto->pilgan_c !!}</div>
                                                                        </div>
                                                                        @endif @if ($data_soalto->pilgan_d != null)
                                                                            <div class="row col-md-12">
                                                                                <div class="row col-md-2"></div>
                                                                                <div class="col-md-1">
                                                                                    <input type="radio" name="pilihan"
                                                                                        value="D" required>
                                                                                </div>D. <div class="col-md-9"
                                                                                    align="justify"> {!! $data_soalto->pilgan_d !!}
                                                                                </div>
                                                                            </div>
                                                                            @endif @if ($data_soalto->pilgan_e != null)
                                                                                <div class="row col-md-12">
                                                                                    <div class="row col-md-2"></div>
                                                                                    <div class="col-md-1">
                                                                                        <input type="radio" name="pilihan"
                                                                                            value="E" required>
                                                                                    </div>E. <div class="col-md-9"
                                                                                        align="justify">
                                                                                        {!! $data_soalto->pilgan_e !!}</div>
                                                                                </div>
                                                                            @endif
                                                                        @elseif($data_soalto->jawabanDiisi($data_soalto->id_soalto, $data_soalto->id_to, $data_soalto->tes_ke)->jawaban ==
                                                                            'B')
                                                                            <div class="row col-md-12">
                                                                                <div class="row col-md-2"></div>
                                                                                <div class="col-md-1">
                                                                                    <input type="radio" name="pilihan"
                                                                                        value="A" required>
                                                                                </div>A. <div class="col-md-9"
                                                                                    align="justify"> {!! $data_soalto->pilgan_a !!}
                                                                                </div>
                                                                            </div>
                                                                            @if ($data_soalto->pilgan_b != null)
                                                                                <div class="row col-md-12">
                                                                                    <div class="row col-md-2"></div>
                                                                                    <div class="col-md-1">
                                                                                        <input type="radio" name="pilihan"
                                                                                            value="B" required
                                                                                            checked="checked">
                                                                                    </div>B. <div class="col-md-9"
                                                                                        align="justify">
                                                                                        {!! $data_soalto->pilgan_b !!} <br>
                                                                                        <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilganb) }}"
                                                                                            class="img-fluid"
                                                                                            alt="">
                                                                                        <br>
                                                                                    </div>
                                                                                </div>
                                                                                @endif @if ($data_soalto->pilgan_c != null)
                                                                                    <div class="row col-md-12">
                                                                                        <div class="row col-md-2"></div>
                                                                                        <div class="col-md-1">
                                                                                            <input type="radio"
                                                                                                name="pilihan"
                                                                                                value="C" required>
                                                                                        </div>C. <div class="col-md-9"
                                                                                            align="justify">
                                                                                            {!! $data_soalto->pilgan_c !!}</div>
                                                                                    </div>
                                                                                    @endif @if ($data_soalto->pilgan_d != null)
                                                                                        <div class="row col-md-12">
                                                                                            <div class="row col-md-2">
                                                                                            </div>
                                                                                            <div class="col-md-1">
                                                                                                <input type="radio"
                                                                                                    name="pilihan"
                                                                                                    value="D"
                                                                                                    required>
                                                                                            </div>D. <div class="col-md-9"
                                                                                                align="justify">
                                                                                                {!! $data_soalto->pilgan_d !!}
                                                                                            </div>
                                                                                        </div>
                                                                                        @endif @if ($data_soalto->pilgan_e != null)
                                                                                            <div class="row col-md-12">
                                                                                                <div class="row col-md-2">
                                                                                                </div>
                                                                                                <div class="col-md-1">
                                                                                                    <input type="radio"
                                                                                                        name="pilihan"
                                                                                                        value="E"
                                                                                                        required>
                                                                                                </div>E. <div
                                                                                                    class="col-md-9"
                                                                                                    align="justify">
                                                                                                    {!! $data_soalto->pilgan_e !!}
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif
                                                                                    @elseif($data_soalto->jawabanDiisi($data_soalto->id_soalto, $data_soalto->id_to, $data_soalto->tes_ke)->jawaban ==
                                                                                        'C')
                                                                                        <div class="row col-md-12">
                                                                                            <div class="row col-md-2">
                                                                                            </div>
                                                                                            <div class="col-md-1">
                                                                                                <input type="radio"
                                                                                                    name="pilihan"
                                                                                                    value="A"
                                                                                                    required>
                                                                                            </div>A. <div class="col-md-9"
                                                                                                align="justify">
                                                                                                {!! $data_soalto->pilgan_a !!}
                                                                                            </div>
                                                                                        </div>
                                                                                        @if ($data_soalto->pilgan_b != null)
                                                                                            <div class="row col-md-12">
                                                                                                <div class="row col-md-2">
                                                                                                </div>
                                                                                                <div class="col-md-1">
                                                                                                    <input type="radio"
                                                                                                        name="pilihan"
                                                                                                        value="B"
                                                                                                        required>
                                                                                                </div>B. <div
                                                                                                    class="col-md-9"
                                                                                                    align="justify">
                                                                                                    {!! $data_soalto->pilgan_b !!}
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif @if ($data_soalto->pilgan_c != null)
                                                                                                <div class="row col-md-12">
                                                                                                    <div
                                                                                                        class="row col-md-2">
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            name="pilihan"
                                                                                                            value="C"
                                                                                                            required
                                                                                                            checked="checked">
                                                                                                    </div>C. <div
                                                                                                        class="col-md-9"
                                                                                                        align="justify">
                                                                                                        {!! $data_soalto->pilgan_c !!}
                                                                                                        <br>
                                                                                                        <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilganc) }}"
                                                                                                            class="img-fluid"
                                                                                                            alt="">
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                                @endif @if ($data_soalto->pilgan_d != null)
                                                                                                    <div
                                                                                                        class="row col-md-12">
                                                                                                        <div
                                                                                                            class="row col-md-2">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-md-1">
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                name="pilihan"
                                                                                                                value="D"
                                                                                                                required>
                                                                                                        </div>D. <div
                                                                                                            class="col-md-9"
                                                                                                            align="justify">
                                                                                                            {!! $data_soalto->pilgan_d !!}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    @endif @if ($data_soalto->pilgan_e != null)
                                                                                                        <div
                                                                                                            class="row col-md-12">
                                                                                                            <div
                                                                                                                class="row col-md-2">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    name="pilihan"
                                                                                                                    value="E"
                                                                                                                    required>
                                                                                                            </div>E. <div
                                                                                                                class="col-md-9"
                                                                                                                align="justify">
                                                                                                                {!! $data_soalto->pilgan_e !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @elseif($data_soalto->jawabanDiisi($data_soalto->id_soalto, $data_soalto->id_to, $data_soalto->tes_ke)->jawaban ==
                                                                                                    'D')
                                                                                                    <div
                                                                                                        class="row col-md-12">
                                                                                                        <div
                                                                                                            class="row col-md-2">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-md-1">
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                name="pilihan"
                                                                                                                value="A"
                                                                                                                required>
                                                                                                        </div>A. <div
                                                                                                            class="col-md-9"
                                                                                                            align="justify">
                                                                                                            {!! $data_soalto->pilgan_a !!}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    @if ($data_soalto->pilgan_b != null)
                                                                                                        <div
                                                                                                            class="row col-md-12">
                                                                                                            <div
                                                                                                                class="row col-md-2">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    name="pilihan"
                                                                                                                    value="B"
                                                                                                                    required>
                                                                                                            </div>B. <div
                                                                                                                class="col-md-9"
                                                                                                                align="justify">
                                                                                                                {!! $data_soalto->pilgan_b !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        @endif @if ($data_soalto->pilgan_c != null)
                                                                                                            <div
                                                                                                                class="row col-md-12">
                                                                                                                <div
                                                                                                                    class="row col-md-2">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-1">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        name="pilihan"
                                                                                                                        value="C"
                                                                                                                        required>
                                                                                                                </div>C.
                                                                                                                <div class="col-md-9"
                                                                                                                    align="justify">
                                                                                                                    {!! $data_soalto->pilgan_c !!}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @if ($data_soalto->pilgan_d != null)
                                                                                                            <div
                                                                                                                class="row col-md-12">
                                                                                                                <div
                                                                                                                    class="row col-md-2">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-1">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        name="pilihan"
                                                                                                                        value="D"
                                                                                                                        required
                                                                                                                        checked="checked">
                                                                                                                </div>D.
                                                                                                                <div class="col-md-9"
                                                                                                                    align="justify">
                                                                                                                    {!! $data_soalto->pilgan_d !!}
                                                                                                                    <br>
                                                                                                                    <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilgand) }}"
                                                                                                                        class="img-fluid"
                                                                                                                        alt="">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @if ($data_soalto->pilgan_e != null)
                                                                                                            <div
                                                                                                                class="row col-md-12">
                                                                                                                <div
                                                                                                                    class="row col-md-2">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-1">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        name="pilihan"
                                                                                                                        value="E"
                                                                                                                        required>
                                                                                                                </div>
                                                                                                                E.
                                                                                                                <div class="col-md-9"
                                                                                                                    align="justify">
                                                                                                                    {!! $data_soalto->pilgan_e !!}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    @elseif($data_soalto->jawabanDiisi($data_soalto->id_soalto, $data_soalto->id_to, $data_soalto->tes_ke)->jawaban ==
                                                                                                        'E')
                                                                                                        <div
                                                                                                            class="row col-md-12">
                                                                                                            <div
                                                                                                                class="row col-md-2">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    name="pilihan"
                                                                                                                    value="A"
                                                                                                                    required>
                                                                                                            </div>A.
                                                                                                            <div class="col-md-9"
                                                                                                                align="justify">
                                                                                                                {!! $data_soalto->pilgan_a !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        @if ($data_soalto->pilgan_b != null)
                                                                                                            <div
                                                                                                                class="row col-md-12">
                                                                                                                <div
                                                                                                                    class="row col-md-2">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-1">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        name="pilihan"
                                                                                                                        value="B"
                                                                                                                        required>
                                                                                                                </div>
                                                                                                                B.
                                                                                                                <div class="col-md-9"
                                                                                                                    align="justify">
                                                                                                                    {!! $data_soalto->pilgan_b !!}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @if ($data_soalto->pilgan_c != null)
                                                                                                            <div
                                                                                                                class="row col-md-12">
                                                                                                                <div
                                                                                                                    class="row col-md-2">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-1">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        name="pilihan"
                                                                                                                        value="C"
                                                                                                                        required>
                                                                                                                </div>
                                                                                                                C.
                                                                                                                <div class="col-md-9"
                                                                                                                    align="justify">
                                                                                                                    {!! $data_soalto->pilgan_c !!}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @if ($data_soalto->pilgan_d != null)
                                                                                                            <div
                                                                                                                class="row col-md-12">
                                                                                                                <div
                                                                                                                    class="row col-md-2">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-1">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        name="pilihan"
                                                                                                                        value="D"
                                                                                                                        required>
                                                                                                                </div>
                                                                                                                D.
                                                                                                                <div class="col-md-9"
                                                                                                                    align="justify">
                                                                                                                    {!! $data_soalto->pilgan_d !!}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @if ($data_soalto->pilgan_e != null)
                                                                                                            <div
                                                                                                                class="row col-md-12">
                                                                                                                <div
                                                                                                                    class="row col-md-2">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-1">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        name="pilihan"
                                                                                                                        value="E"
                                                                                                                        required
                                                                                                                        checked="checked">
                                                                                                                </div>
                                                                                                                E.
                                                                                                                <div class="col-md-9"
                                                                                                                    align="justify">
                                                                                                                    {!! $data_soalto->pilgan_e !!}
                                                                                                                    <br>
                                                                                                                    <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilgane) }}"
                                                                                                                        class="img-fluid"
                                                                                                                        alt="">
                                                                                                                    <br>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    @endif
                                                                                                @elseif(!$data_soalto->jawabanDiisi($data_soalto->id_soalto, $data_soalto->id_to, $data_soalto->tes_ke))
                                                                                                    <div
                                                                                                        class="row col-md-12">
                                                                                                        <div
                                                                                                            class="row col-md-2">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-md-1">
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                name="pilihan"
                                                                                                                value="A"
                                                                                                                required>
                                                                                                        </div>
                                                                                                        A.
                                                                                                        <div class="col-md-9"
                                                                                                            align="justify">
                                                                                                            {!! $data_soalto->pilgan_a !!}
                                                                                                            <br>
                                                                                                            <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilgana) }}"
                                                                                                                class="img-fluid"
                                                                                                                alt="">
                                                                                                            <br>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    @if ($data_soalto->pilgan_b != null)
                                                                                                        <div
                                                                                                            class="row col-md-12">
                                                                                                            <div
                                                                                                                class="row col-md-2">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    name="pilihan"
                                                                                                                    value="B"
                                                                                                                    required>
                                                                                                            </div>
                                                                                                            B.
                                                                                                            <div class="col-md-9"
                                                                                                                align="justify">
                                                                                                                {!! $data_soalto->pilgan_b !!}
                                                                                                                <br>
                                                                                                                <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilganb) }}"
                                                                                                                    class="img-fluid"
                                                                                                                    alt="">
                                                                                                                <br>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($data_soalto->pilgan_c != null)
                                                                                                        <div
                                                                                                            class="row col-md-12">
                                                                                                            <div
                                                                                                                class="row col-md-2">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    name="pilihan"
                                                                                                                    value="C"
                                                                                                                    required>
                                                                                                            </div>
                                                                                                            C.
                                                                                                            <div class="col-md-9"
                                                                                                                align="justify">
                                                                                                                {!! $data_soalto->pilgan_c !!}
                                                                                                                <br>
                                                                                                                <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilganc) }}"
                                                                                                                    class="img-fluid"
                                                                                                                    alt="">
                                                                                                                <br>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($data_soalto->pilgan_d != null)
                                                                                                        <div
                                                                                                            class="row col-md-12">
                                                                                                            <div
                                                                                                                class="row col-md-2">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    name="pilihan"
                                                                                                                    value="D"
                                                                                                                    required>
                                                                                                            </div>
                                                                                                            D.
                                                                                                            <div class="col-md-9"
                                                                                                                align="justify">
                                                                                                                {!! $data_soalto->pilgan_d !!}
                                                                                                                <br>
                                                                                                                <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilgand) }}"
                                                                                                                    class="img-fluid"
                                                                                                                    alt="">
                                                                                                                <br>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($data_soalto->pilgan_e != null)
                                                                                                        <div
                                                                                                            class="row col-md-12">
                                                                                                            <div
                                                                                                                class="row col-md-2">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    name="pilihan"
                                                                                                                    value="E"
                                                                                                                    required>
                                                                                                            </div>
                                                                                                            E.
                                                                                                            <div class="col-md-9"
                                                                                                                align="justify">
                                                                                                                {!! $data_soalto->pilgan_e !!}
                                                                                                                <br>
                                                                                                                <img src="{{ asset('storage/pilganto/' . $data_soalto->file_pilgane) }}"
                                                                                                                    class="img-fluid"
                                                                                                                    alt="">
                                                                                                                <br>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @endif
                                                                                                <div class="row col-md-12"
                                                                                                    style="float:left;">
                                                                                                    <br>
                                                                                                    <div class="col-md-12">
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                    </div>
                                                                                                    <div class="col-md-11"
                                                                                                        align="right">
                                                                                                        <button
                                                                                                            type="submit"
                                                                                                            class="btn btn-primary ml-3 mb-3 col-md-5"
                                                                                                            style="size: 5px; color: white">Simpan
                                                                                                            &
                                                                                                            Lanjutkan</button>
                                                                                                        <a href="#"
                                                                                                            class="btn btn-danger ml-3 mb-3 col-md-3"
                                                                                                            style="size: 5px; color: white;"
                                                                                                            id="btn_selsai">Selesai</a>
                                                                                                    </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            @endif
                                                    </div>
                                            </div>

                                        </div>
                                        @if ($data_soalto->id_jenissoal != 17)
                                            <div class="col-sm-4">
                                                <div class="card  ">
                                                    <div class="card-body">
                                                        <div class="row col-md-12">
                                                            @foreach ($data_soal as $dst)
                                                                @if ($dst->jawabanDiisi($dst->id_soalto, $tes))
                                                                    <div class="col-md-3">
                                                                        <a
                                                                            href="{{ route('client-soal', [$dst->id_soalto, $id_to, $tes]) }}">
                                                                            <button type="submit" id="change"
                                                                                onchange="changeColor(this.value)"
                                                                                value="blue"
                                                                                class="btn btn-primary">{{ $loop->iteration }}</button>
                                                                        </a>
                                                                    </div>
                                                                @else
                                                                    <div class="col-md-3">
                                                                        <a
                                                                            href="{{ route('client-soal', [$dst->id_soalto, $id_to, $tes]) }}">
                                                                            <button type="submit" id="change"
                                                                                onchange="changeColor(this.value)"
                                                                                value="blue"
                                                                                class="btn btn-secondary">{{ $loop->iteration }}</button>
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    use App\Models\TO;
    $id_pesertacount = auth()->user()->id_peserta;
    $id_tocount = $data_soalto->id_to;
    $waktu = TO::where('id_to', $data_soalto->id_to)->first()->waktu;
    ?>
    <script>
        $('#btn_selsai').on('click',function () {
            if (confirm('Apakah anda yakin ingin mengakhiri try out ?')) {
            clearInterval(countdown); // stop the countdown
                timer.textContent = "Time's up!"; // update the timer element
                localStorage.removeItem("examEndTime" + '<?= $id_pesertacount ?>' +
                    '<?= $id_tocount ?>'); // remove the exam end time from local storage
                window.location.href = "{{ route('client-hasilto', [$data_soalto->id_to, $tes]) }}";
                document.getElementById("demo").innerHTML = "EXPIRED";
        }
        })
       
        function hmsToMinutes(timeString) {
            var timeParts = timeString.split(":");
            var hours = parseInt(timeParts[0], 10);
            var minutes = parseInt(timeParts[1], 10);
            var seconds = parseInt(timeParts[2], 10);

            return Math.round(hours * 60 + minutes + seconds / 60);
        }
        const examDuration = hmsToMinutes('<?= $waktu ?>'); // exam duration in minutes

        let endTime;
        if (localStorage.getItem("examEndTime" + '<?= $id_pesertacount ?>' + '<?= $id_tocount ?>')) {
            // if the exam end time is already stored in local storage, use it
            endTime = localStorage.getItem("examEndTime" + '<?= $id_pesertacount ?>' + '<?= $id_tocount ?>');
        } else {
            // if the exam end time is not stored in local storage, calculate it and store it
            endTime = new Date().getTime() + examDuration * 60 * 1000;
            localStorage.setItem("examEndTime" + '<?= $id_pesertacount ?>' + '<?= $id_tocount ?>', endTime);
        }

        const timer = document.querySelector("#demo"); // select the timer element on the page

        const updateTimer = () => {
            const now = new Date().getTime(); // current time in milliseconds
            const timeLeft = endTime - now; // time left in milliseconds
            const minutes = Math.floor(timeLeft / (60 * 1000)); // convert to minutes
            const seconds = Math.floor((timeLeft % (60 * 1000)) / 1000); // convert to seconds
            timer.textContent = `${minutes}:${seconds.toString().padStart(2, "0")}`; // update the timer element

            if (timeLeft <= 0) {
                clearInterval(countdown); // stop the countdown
                timer.textContent = "Time's up!"; // update the timer element
                localStorage.removeItem("examEndTime" + '<?= $id_pesertacount ?>' +
                    '<?= $id_tocount ?>'); // remove the exam end time from local storage
                window.location.href = "{{ route('client-hasilto', [$data_soalto->id_to, $tes]) }}";
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        };

        updateTimer(); // update the timer for the first time
        const countdown = setInterval(updateTimer, 1000); // update the timer every second
    </script>
@endsection
