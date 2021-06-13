@extends('layouts.user.default')

@section('content')
    <div>
        <h5>Pemilihan Kursi</h5>
        <div class="d-flex justify-content-center">
            <ul class="nav nav-pills mb-3 mt-1" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Ruang Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Serambi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Balkon</a>
                </li>
            </ul>

        </div>
        <div class="ml-4">
            <div class="mb-4"
                style="background-color: rgba(255, 133, 10, 0.50);padding-top:5px;padding-bottom:5px;border-radius:10px;width:10%">
                <b class="ml-2" style="font-size: 12px;">Note :</b>
                <div class="">
                    <div>
                        <i class="ml-2 mt-2 far fa-circle" style="color: white"></i>
                        <b style="font-size: 12px">Kosong</b>
                    </div>
                </div>
                <div class="">
                    <div>
                        <i class="ml-2 mt-2 far fa-check-circle" style="color: green"></i>
                        <b style="font-size: 12px">Terisi</b>

                    </div>
                </div>
                <div class="">
                    <div>
                        <i class="ml-2 mt-2 far fa-times-circle" style="color: red"></i>
                        <b style="font-size: 12px">Tidak</b>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active wrapper-seat" id="pills-home" role="tabpanel"
            aria-labelledby="pills-home-tab">
            <b class="label-text-utama">Ruang Utama</b>
            <form action="{{ route('seat.post', $name) }}" method="POST">
                @csrf
                <div class="row ml-1">
                    @foreach ($main as $item)

                        <div class="mr-4 mt-3">
                            @if ($item->status == 'Active' && $item->registrant_id == null)

                                <div class="seat-item">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <input class="ml-4 mt-2" type="radio" name="id" value="{{ $item->id }}" id="">
                            @elseif ($item->status == 'Active' && $item->registrant_id)
                                <div style="cursor: not-allowed">
                                    <div class="seat-item" style="background-color: rgba(0, 128, 0, 0.20)">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{ $item->number }}</b>
                                    </div>
                                    <i class="ml-4 mt-2 far fa-check-circle" style="color: green"></i>
                                </div>

                            @else
                                <div style="cursor: not-allowed">
                                    <div class="seat-item" style="background-color: rgba(255, 0, 0, 0.20)">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{ $item->number }}</b>
                                    </div>
                                    <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>
                <input type="submit" value="Pilih" class="btn btn-info mt-3">
                {{-- </form> --}}
        </div>
        <div class="tab-pane fade wrapper-seat" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <b class="label-text-serambi">Serambi</b>
            {{-- <form action=""> --}}
            <div class="row ml-1">
                @foreach ($porch as $item)
                    <div class="mr-4 mt-3">
                        @if ($item->status == 'Active' && $item->registrant_id == null)

                            <div class="seat-item">
                                <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                <b style="font-size: 12px">{{ $item->number }}</b>
                            </div>
                            <input class="ml-4 mt-2" type="radio" name="id" value="{{ $item->id }}" id="">
                        @elseif ($item->status == 'Active' && $item->registrant_id)
                            <div style="cursor: not-allowed">
                                <div class="seat-item" style="background-color: rgba(0, 128, 0, 0.20)">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <i class="ml-4 mt-2 far fa-check-circle" style="color: green"></i>
                            </div>
                        @else
                            <div style="cursor: not-allowed">
                                <div class="seat-item" style="background-color: rgba(255, 0, 0, 0.20)">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <input type="submit" value="Pilih" class="btn btn-info mt-3">
            {{-- </form> --}}
        </div>
        <div class="tab-pane fade wrapper-seat" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <b class="label-text-balkon">Balkon</b>
            {{-- <form action=""> --}}
            <div class="row ml-1">
                @foreach ($balkon as $item)
                    <div class="mr-4 mt-3">
                        @if ($item->status == 'Active' && $item->registrant_id == null)

                            <div class="seat-item">
                                <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                <b style="font-size: 12px">{{ $item->number }}</b>
                            </div>
                            <input class="ml-4 mt-2" type="radio" name="id" value="{{ $item->id }}" id="">
                        @elseif ($item->status == 'Active' && $item->registrant_id)
                            <div style="cursor: not-allowed">
                                <div class="seat-item" style="background-color: rgba(0, 128, 0, 0.20)">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <i class="ml-4 mt-2 far fa-check-circle" style="color: green"></i>
                            </div>
                        @else
                            {{-- <div style="cursor: not-allowed"> --}}
                            <div class="seat-item">
                                <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                <b style="font-size: 12px">{{ $item->number }}</b>
                            </div>
                            <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                            {{-- </div> --}}
                        @endif
                    </div>
                @endforeach
            </div>
            <input type="submit" value="Pilih" class="btn btn-info mt-3">
            </form>
        </div>
    </div>
    </div>


@endsection
@push('js')
    <script>
        window.onbeforeunload = function(e) {
  return 'Apakah anda ingin meninggalkan halaman ini ?';
};
    </script>
@endpush