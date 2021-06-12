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
                                <h3>Filter Yang Memenuhi Syarat</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <form action="{{route('listMemenuhi')}}">
                                @csrf
                                <div class="form-row">
                                  <div class="col-6">
                                      @foreach ($items as $item)
                                          
                                    <select class="form-control" name="status_huni">
                                        <option disabled >--PILIH CABANG--</option>
                                        <option value="dihuni">{{$item}}</option>
                                        <option value="dihuni">GEREJA B</option>
                                        <option value="dihuni">GEREJA C</option>
                                    </select>

                                    @endforeach
                                  </div>
                                  <div class="col-2">
                                    <input type="date" class="form-control" placeholder="State">
                                  </div>
                                  <p>TO</p>
                                  <div class="col-2">
                                    <input type="date" class="form-control" placeholder="Zip">
                                  </div>
                                </div>

                                <div>
                                <button type="submit" class="btn btn-primary float-right">Tambah</button>
                            </div>

                              </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection