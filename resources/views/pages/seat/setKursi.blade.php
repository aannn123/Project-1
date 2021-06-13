@extends('layouts.admin.default')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        {{-- CARD HEADER --}}
                        <div class="card-header">
                            <div class="col-sm-12 col-md-6">
                                <h3>Set Kursi Gereja {{ $gereja->name }}</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Bangku</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp

                                        @foreach ($items as $item)

                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <div class="seat-item">
                                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                                        <b style="font-size: 12px">{{ $item->number }}</b>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->status == 'Active')
                                                        <div class="badge badge-success">Active</div>

                                                    @elseif($item->status == 'Tidak')
                                                        <div class="badge badge-danger">Tidak Active</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button>
                                                    <a href="{{route('active',$item->id)}}" class="">
                                                        <i class="fas fa-check" style="color: green"></i>
                                                    </a>
                                                </button>
                                                <button>
                                                    <a href="{{route('tidak', $item->id)}}" class="">
                                                        <i class="fas fa-times" style="color: red"></i>
                                                    </a>
                                                </button>
                                                </td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $items->links() }}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection