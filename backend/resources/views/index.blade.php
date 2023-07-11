@extends('layouts.app')

@section('body_class', 'bg-dark')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-6 fw-light text-white">Good day, {{ Auth::user()->name }}!</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center my-4">
            <div class="col-md-10">
                <div class="card border-0">
                    <div class="card-header fw-bold bg-info border-0">{{ __('Announcements') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Welcome to Kredo Bank!
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col mb-3">
                        <a class="card border-0 text-center text-light text-decoration-none bg-success p-3" href="{{ route('users.depositSlip') }}">
                            <div class="card-header border-0 bg-success">
                                <h1 class="display-6">Deposit</h1>
                            </div>
                            <div class="card-body">
                                <i class="fa-solid fa-circle-dollar-to-slot fa-5x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-3">
                        <a class="card border-0 text-center text-light text-decoration-none bg-danger p-3" href="{{ route('users.withdrawal') }}">
                            <div class="card-header border-0 bg-danger">
                                <h1 class="display-6">Withdraw</h1>
                            </div>
                            <div class="card-body">
                                <i class="fa-solid fa-money-bill-wave fa-5x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-3">
                        <a class="card border-0 text-center text-light text-decoration-none bg-secondary p-3" href="{{ route('accounts.index') }}">
                            <div class="card-header border-0 bg-secondary">
                                <h1 class="display-6">Accounts</h1>
                            </div>
                            <div class="card-body">
                                <i class="fa-solid fa-money-check-dollar fa-5x"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
