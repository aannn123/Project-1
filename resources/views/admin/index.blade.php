@extends('layouts.admin.default')
@section('content')
   <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div style="background-color: #f4f6f9">
                        
                        <div class="section-header">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="row">

                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-primary" style="background: #35A5DD">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Survey</h4>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        111
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-success" style="background: #35A5DD">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Memenuhi Syarat</h4>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        111
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-danger" style="background: #35A5DD">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Tidak Memenuhi Syarat</h4>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        111
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection