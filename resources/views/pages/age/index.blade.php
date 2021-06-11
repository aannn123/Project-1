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
                                <h3>Usia</h3>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <a href="{{route('age.create')}}" class="btn btn-light float-right">
                                    Create
                                </a>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Usia</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no =1;
                                        @endphp 
                                        
                                        @foreach ($items as $item)
                                        
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->number}}</td>
                                            <td>
                                                <a href="{{route('gereja.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{route('age.destroy', $item->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>

                                </table>
                                {{$items->links()}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection