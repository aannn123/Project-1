@extends('layouts.user.default')

@section('content')
    <h5 style="font-weight: bolder">Data Anda</h5>
    <div class="col-10 mt-3">
        <div class="row">
            <div class="col-md-5">
                <div class="mb-2">
                    <b>Pilihan Ibadah</b>
                    <p>{{ $data->worship->name }} - {{ $data->worship->time }} -
                        {{ \Carbon\Carbon::createFromTimestamp(strtotime($data->worship->date))->isoFormat('dddd, D MMMM Y') }}
                    </p>
                </div>
                <div class="mb-2">
                    <b>Jenis Kelamin</b>
                    <p>{{ $data->gender }}</p>
                </div>
                <div class="mb-2">
                    <b>Usia</b>
                    <p>{{ $data->age }} Tahun</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <b>Nama Lengkap</b>
                    <p>{{ $data->fullname }} </p>
                </div>
                <div class="mb-2">
                    <b>Alamat</b>
                    <p>{{ $data->address }}</p>
                </div>
                <div class="mb-2">
                    <b>No Telp</b>
                    <p>{{ $data->phone_number }}</p>
                </div>
            </div>
            @if ($data->status == 'Success')
                <div class="col-md-3">
                    <div class="mb-2 seat">
                        No. Tempat Duduk &nbsp; <b>{{$data->seat->number}}</b>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img style="width:200px;height:200px"
                            src="https://suryayogya.com/wp-content/uploads/2020/06/barcode.png" alt="">
                    </div>
                </div>
            @endif
            <div class="col-12">
                @if ($data->status == 'Success')
                    <div>
                        <p>Simpan data registrasi ini dengan <b>Memfoto atau screenshot</b> dan ditunjukan kepada petugas
                            kehadiran jemaat pada saat ibadah Minggu. Terimakasih, Tuhan memberkati.</p>
                    </div>
                @else
                    <div>
                        <p><b>Dari data yang kami terima, kami mendapati data berikut ini:</b></p>

                        <p>Majelis Jemaat memahami kerinduan anda untuk datang beribadah. Namun demi kebaikan dan keselamatan bersama, kami merekomendasikan anda mengikuti ibadah secara daring / online pada ibadah pk. 09.30, 9 Mei 2021. Silakan mendaftar kembali dalam kesempatan ibadah yang lain jika anda sudah memenuhi syarat - syarat yang ditetapkan pemerintah dan gereja. Tuhan memberkati anda.</p>
                    </div>
                @endif
                <div class="mt-5 d-flex justify-content-center">
                    <p><b>Anda dapat melihat penjelasan <a href="#"><button class="btn btn-danger">protokol
                                    kesehatan</button></a> dan <a href="#"><button class="btn btn-danger">pesan
                                    pastoral</button></a> GKI Coyudan pada menu diatas.</b> </p>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 50%"></div>
    </div>
@endsection
