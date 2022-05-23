
@extends('layouts.app_login')

@section('content')

    <div class="error-image">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- End GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page page-h">
            <div class="page-content z-index-10">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-md-6 d-block mx-auto">
                            <div class="">
                                <div class="">
                                    <div class="display-1 t mb-5">403</div>
                                    <h1 class="h2   mb-3">Access Denied</h1>
                                    <p class="h4 font-weight-normal mb-7 leading-normal">{{$exception->getMessage()}}</p>
                                    <a class="btn btn-primary" href="{{route('home')}}">
                                        Back To Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAGE -->

    </div>

{{--@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))--}}

@endsection
