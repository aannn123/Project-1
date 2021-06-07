<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/view.css') }}">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-3 display-left">
            <div class="rounded-circle" style="width:60px;height:60px;background-color:white"></div>
            <div class="mt-4">
                <b style="font-size: 18px;font-weight:bolder">Form Pendaftaran Ibadah Onsite
                    GKI Lorem Ipsum</b><br>
                
                <div class="mb-2 mt-2">
                    <b style="font-size: 16px;color:black;">Petunjuk</b>
                </div>
                Pendaftaran Setiap Pilihan <br>
                ibadah minggu akan<br>
                ditutup H-3 (kamis)
            </div>
            <div class="column mt-3">
                <button type="button" class="btn btn-light btn-sm col-md-12"><i class="fab fa-whatsapp"></i> 081298899789</button> <br>
                <button type="button" class="btn btn-light btn-sm col-md-12"><i class="far fa-envelope"></i> test@gmail.com</button>
            </div>
        </div>
        <div class="col-md-9" style="padding-top:30px;padding-left:20px;">
            <h5>Data Perorangan</h5>
            <p><i style="font-weight: 600;font-size:14px" class="text-danger">Demi Kesehatan dan keselamatan bersama
                    serta mencegah penyebaran virus covid 19, kami mohon kesediaan jemaat mengisi data ini dengan jujur.
                    Kami memahami kerinduan Bpk/Ibu/Sdr/Sdri untuk datang beribadah. Namun jika belum memenuhi syarat
                    kesehatan, kami minta Anda mengikuti Ibadah online.
                </i></p>
            <div>
                <div class="form-group col-10">
                    <label class="label-text">Pilih Ibadah</label>
                    <select id="inputState" class="form-control">
                        <option selected>Pilih Ibadah</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-10">
                    <label class="label-text">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Tulis nama lengkap anda disini">
                </div>

                <div class="form-group col-10">
                    <label class="label-text">Jenis Kelamin</label>
                    <div class="row">
                        <div class="form-check ml-3 mr-4">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Pria
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Wanita
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group col-10">
                    <label class="label-text">Alamat</label>
                    <input type="text" class="form-control" placeholder="Tulis alamat lengkap disini">
                </div>

                <div class="form-group col-10">
                    <label class="label-text">Wilayah</label>
                    <input type="text" class="form-control" placeholder="Tulis alamat lengkap disini">
                </div>

                <div class="form-group col-10">
                    <label class="label-text">Usia</label>
                    <select id="inputState" class="form-control">
                        <option selected>Pilih Usia</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="form-group col-10">
                    <label class="label-text">No. Telp</label>
                    <input type="text" class="form-control" placeholder="Tulis disini. Contoh: 089212345434">
                </div>

                <div class="form-group col-10">
                    <b>Apakah Anda dalam keadaan sehat selama 14 hari terakhir ( H-14 sebelum ibadah ) ?</b> <b
                        class="required">*</b>
                    <p style="font-size: 12px" class="text-muted">Tidak batuk, flu, demam, pusing, tenggorokan sakit dan
                        sakit lain yang dianjurkan istirahat oleh dokter.</p>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                    </div>

                </div>
                <div class="form-group col-10">
                    <b>Apakah Anda memiliki sakit bawaan / komorbid ?</b> <b class="required">*</b>
                    <p style="font-size: 12px" class="text-muted">Contoh diabetes, darah tinggi, jantung, stroke,
                        autoimun dan gangguan paru atau ginjal.</p>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Tidak
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group col-10">
                    <b>Apakah Anda dalam 14 hari terakhir pernah berkunjung ke rumah sakit ?</b> <b
                        class="required">*</b>
                    <p style="font-size: 12px" class="text-muted">Keperluan berobat, mengantar berobat dan mengunjungi /
                        merawat pasien rawat inap.</p>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group col-10">
                    <b>Apakah ada anggota keluarga satu rumah yang sakit demam, pilek, batuk dan sakit lain yang
                        dianjurkan istirahat oleh dokter ?</b> <b class="required">*</b>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group col-10">
                    <b>Apakah di lingkungan rumah Anda ada yang POSITIF covid 19 dalam radius 50 meter ?</b> <b
                        class="required">*</b>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group col-10">
                    <b>
                        Apakah dalam 14 hari terakhir anda pernah berpergian keluar kota ( selain Jabodetabek ) ?</b> <b
                        class="required">*</b>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group col-10">
                    <b>
                        Apakah Anda bersedia melaksanakan protokol kesehatan saat mengikuti ibadah onsite ?</b> <b
                        class="required">*</b>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group col-10">
                    <b>

                        Apakah Anda bersedia istirahat tidur malam sebelum mengikuti ibadah onsite minimal 7 jam ?</b>
                    <b class="required">*</b>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.min.js') }}"></script>
</body>

</html>
