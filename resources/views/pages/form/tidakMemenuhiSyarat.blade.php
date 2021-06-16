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
                                <h3>Filter Yang Tidak Memenuhi Syarat</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <form action="{{route('memenuhi')}}" method="GET">
                                @csrf
                                <div class="form-row">
                                    <div class="col-6">
                                        <select class="form-control" name="">
                                            <option selected disabled>--PILIH GEREJA--</option>

                                            @foreach ($items as $item)
                                                <option value="{{ $item->id }}">{{ $item->church_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <input type="date" class="form-control" name="from">
                                    </div>
                                    <p>TO</p>
                                    <div class="col-2">
                                        <input type="date" class="form-control" name="to">
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary float-right">Confirm</button>
                                </div>

                            </form>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Nomor Telepon</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    {{-- @if ($items->status == 'Success') --}}

                                    <tbody>
                                        @foreach ($items as $item)                                            
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->fullname}}</td>
                                            <td>{{$item->phone_number}}</td>
                                            <td>{{$item->address}}</td>
                                            <td>{{$item->status}}</td>
                                            {{-- <td><div class="badge badge-success">Memenuhi Syarat</div></td> --}}
                                        </tr>
                                        @endforeach
                                            
                                    </tbody>
                                    {{-- @endif --}}

                                </table>
                            </div>
                            <span data-href="{{route('export2')}}" id="export" class="btn btn-success btn-sm" onclick="exportTasks(event.target);">Export</span>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
