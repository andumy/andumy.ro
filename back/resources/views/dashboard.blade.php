@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col-3">
                    <a href="{{route('category.index')}}">
                        <div class="card shadow card-style">
                            <div class="card-body">
                                <div class="card-icon card-container">
                                    <i class="fas fa-desktop text-center"></i>
                                    <h2 class="mb-0 text-center card-text">{{__('Categories')}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="{{route('element.index')}}">
                        <div class="card shadow card-style">
                            <div class="card-body">
                                <div class="card-icon card-container">
                                    <i class="fas fa-sitemap text-center"></i>
                                    <h2 class="mb-0 text-center card-text">{{__('Elements')}}</h2>
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
            </div>
        </div>
    </div>
</div>

@include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
