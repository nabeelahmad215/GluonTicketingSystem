@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ __('Welcome!') }}</h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                            <div class="row">
                                <div
                                    class="col-xs-12
                                        col-sm-8
                                        col-md-6
                                        col-lg-4">

                                    <a href="{{ route('test') }}" class="text-decoration-none" style="color: black">
                                        <div
                                            class="shadow-sm 
                                                mb-4
                                                rounded box
                                                p-3
                                                border 
                                                border-2
                                                border-black">
                                            <img src="assets/icons/journal.svg" class="text-center" style="width: 9%" />
                                            <h2 style="margin-top: -9%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daily Report
                                            </h2>
                                        </div>
                                    </a>
                                </div>
                                <div
                                    class="col-xs-12
                                    col-sm-8
                                    col-md-6
                                    col-lg-4">
                                    <a href="#" class="text-decoration-none" style="color: black">
                                        <div
                                            class="shadow-sm 
                                            mb-4
                                            rounded box
                                            p-3
                                            border 
                                            border-2
                                            border-black d-none">
                                            <img src="assets/icons/journal.svg" class="text-center" style="width: 9%" />
                                            <h2 style="margin-top: -9%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daily Report
                                            </h2>
                                        </div>
                                    </a>
                                </div>
                                <div
                                    class="col-xs-12
                                        col-sm-8
                                        col-md-6
                                        col-lg-4">
                                    <a href="#" class="text-decoration-none" style="color: black">
                                        <div
                                            class="shadow-sm 
                                                mb-4
                                                rounded box
                                                p-3
                                                border 
                                                border-2
                                                border-black">
                                            <img src="assets/icons/journal.svg" class="text-center" style="width: 9%" />
                                            <h2 style="margin-top: -9%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daily Report
                                            </h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        
                        <div class="row">
                            <div
                                class="col-xs-12
                                        col-sm-8
                                        col-md-6
                                        col-lg-4">
                                <a href="#" class="text-decoration-none" style="color: black">
                                    <div
                                        class="shadow-sm 
                                                mb-4
                                                rounded box
                                                p-3
                                                border 
                                                border-2
                                                border-black">
                                        <img src="assets/icons/journal.svg" class="text-center" style="width: 9%" />
                                        <h2 style="margin-top: -9%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daily Report</h2>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="col-xs-12
                                    col-sm-8
                                    col-md-6
                                    col-lg-4">
                                <a href="#" class="text-decoration-none" style="color: black">
                                    <div
                                        class="shadow-sm 
                                            mb-4
                                            rounded box
                                            p-3
                                            border 
                                            border-2
                                            border-black">
                                        <img src="assets/icons/journal.svg" class="text-center" style="width: 9%" />
                                        <h2 style="margin-top: -9%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daily Report</h2>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="col-xs-12
                                        col-sm-8
                                        col-md-6
                                        col-lg-4">
                                <a href="#" class="text-decoration-none" style="color: black">
                                    <div
                                        class="shadow-sm 
                                                mb-4
                                                rounded box
                                                p-3
                                                border 
                                                border-2
                                                border-black">
                                        <img src="assets/icons/fingerprint.svg" class="text-center" style="width: 9%" />
                                        <h2 style="margin-top: -9%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Security</h2>
                                    </div>
                                </a>
                            </div>
                        </div>

                        {{-- {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
