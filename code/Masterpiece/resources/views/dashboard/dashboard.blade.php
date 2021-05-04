@extends('dashboard.layout')
@section('content')
 
              <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group" style="margin-top: 4rem; padding:3rem; margin;9rem;">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">{{ $adminCount }}</h2>
                                        <span
                                            class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>
                                    </div>
                                    <h6 style="font-size:2em" class="text-muted t font-weight-big mb-0 w-100 text-truncate">Admins</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">{{ $userCount }}</h2>
                                        <span
                                            class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                                    </div>
                                    <h6 style="font-size:2em" class="text-muted font-weight-normal mb-0 w-100 text-truncate">Users</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">{{ $categoryCount }}</h2>
                                        <span
                                            class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>
                                    </div>
                                    <h6 style="font-size:2em" class="text-muted font-weight-normal mb-0 w-100 text-truncate">Categories</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>


<div class="card">
    <div class="card-body">
        <div class="d-flex d-lg-flex d-md-block align-items-center">
            <div>
                <div class="d-inline-flex align-items-center">
                    <h2 class="text-dark mb-1 font-weight-medium">{{ $productCount }}</h2>
                    <span
                        class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>
                </div>
                <h6 style="font-size:2em" class="text-muted font-weight-normal mb-0 w-100 text-truncate">Products</h6>
            </div>
            <div class="ml-auto mt-md-3 mt-lg-0">
                <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
            </div>
        </div>
    </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End First Cards -->
@endsection