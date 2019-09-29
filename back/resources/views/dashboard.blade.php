@extends('layouts.app')

@section('content')

        @include('layouts.headers.cards')
        <div class="container-fluid mt--7">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col-3">
                        <a href="{{route('category.index')}}">
                            <div class="card shadow card-style">
                                <div class="card-body">
                                    <div class="card-icon card-container">
                                        <i class="fas fa-desktop text-center"></i>
                                        <h2 class="mb-0 text-center card-text">Panels</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
    
                    <div class="col-3">
                        <a href="{{route('category.index')}}">
                            <div class="card shadow card-style">
                                <div class="card-body">
                                    <div class="card-icon card-container">
                                        <i class="fas fa-sitemap text-center"></i>
                                        <h2 class="mb-0 text-center card-text">Elements</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
    
                    <div class="col-3">
                        <a href="{{route('category.index')}}">
                            <div class="card shadow card-style">
                                <div class="card-body">
                                    <div class="card-icon card-container">
                                        <i class="fas fa-home text-center"></i>
                                        <h2 class="mb-0 text-center card-text">Home Page</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
    
                    <div class="col-3">
                        <a href="{{route('category.index')}}">
                            <div class="card shadow card-style">
                                <div class="card-body">
                                    <div class="card-icon card-container">
                                        <i class="fas fa-list text-center"></i>
                                        <h2 class="mb-0 text-center card-text">Details</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
    
                </div>
            </div>
            @include('layouts.footers.auth')
        </div>
    

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
