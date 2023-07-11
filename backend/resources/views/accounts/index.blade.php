@extends('layouts.app')

@section('content')
    <div class="container w-25 mt-4">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-6 fw-light">Account List</h1>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('accounts.create') }}"><i class="fa-solid fa-square-plus text-primary fa-3x"></i></a>
            </div>
        </div>
    </div>
    <div class="container w-25 mt-5">
        @forelse(Auth::user()->accounts as $account_details)
        <div class="row gx-3">
            <div class="col">
                <div class="card border-0 text-decoration-none bg-light mb-3 shadow">
                    <div class="card-body">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="row">
                                    <h1 class="h5 fw-bold">SAVINGS ACCOUNT</h1>
                                </div>
                                <div class="row">
                                    <h1 class="h6 fw-light text-muted">{{ $account_details->id }}</h1>
                                </div>
                            </div>
                            <div class="row text-end">
                                <div class="row px-0">
                                    <h1 class="h5 px-0">$ {{ number_format($account_details->balance, 2) }}</h1>
                                </div>
                                <div class="row px-0">
                                    <span class="fs-6 px-0 fw-light text-muted">Available Balance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-2">
                <div class="card border-0 text-decoration-none bg-light mb-3 shadow py-4">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <button class="btn btn-warning btn-sm" title="Edit Account">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-danger btn-sm" title="Delete Account">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
            
        @empty
            
        @endforelse
    </div>
@endsection