@extends('layouts.user.default')

@section('content')
    <h5 style="font-weight: bolder">Data Anda</h5>
    <div class="col-10 mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-2">
                    <b>Pilihan Ibadah</b>
                    <p>AAAa - 10:00 - 16 agustus 2020</p>
                </div>
                <div class="mb-2">
                    <b>Jenis Kelamin</b>
                    <p>Perempuan</p>
                </div>
                <div class="mb-2">
                    <b>Usia</b>
                    <p>43 Tahun</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <b>Nama Lengkap</b>
                    <p>Udin Nga Nga </p>
                </div>
                <div class="mb-2">
                    <b>Alamat</b>
                    <p>JL merderka</p>
                </div>
                <div class="mb-2">
                    <b>No Telp</b>
                    <p>00898999123</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2 seat">
                    No. Tempat Duduk &nbsp; <b>100</b>
                </div>
               <div class="d-flex justify-content-center">
                   <img style="width:200px;height:200px" src="https://suryayogya.com/wp-content/uploads/2020/06/barcode.png" alt="">
               </div>
            </div>
            <div class="col-12">
                <div>
                    <p>Simpan data registrasi ini dengan <b>Memfoto atau screenshot</b> dan ditunjukan kepada petugas kehadiran jemaat pada saat ibadah Minggu. Terimakasih, Tuhan memberkati.</p>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <p><b>Anda dapat melihat penjelasan <a href="#"><button class="btn btn-danger">protokol kesehatan</button></a> dan <a href="#"><button class="btn btn-danger">pesan pastoral</button></a> GKI Coyudan pada menu diatas.</b> </p>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 50%"></div>
    </div>   
@endsection
