@extends('layouts.app')

@section('body_class', 'bg-dark')

@section('content')
    <div class="container mt-5 text-white">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card bg-dark border-0">
                    <div class="card-header bg-dark border-0 text-center">
                        <i class="fa-solid fa-money-bill-wave fa-9x text-danger mb-2"></i>
                        <h1 class="text-danger">Withdrawal</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('users.withdraw') }}" method="post">
                            @csrf
                            @method('PATCH')
                            
                            <div class="row mb-3">
                                <label for="account" class="col-md-4 col-form-label text-white text-md-end">{{ __('Account') }}</label>

                                <div class="col-md-5">
                                    @foreach(Auth::user()->accounts as $account)
                                        <input type="radio" class="btn-check" name="account" id="account-{{$account->id}}" value="{{ $account->id }}" autocomplete="off" >
                                        <label class="btn btn-outline-danger fw-bold" for="account-{{$account->id}}">{{ $account->id }}</label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="amount" class="col-md-4 col-form-label text-white text-md-end">{{ __('Withdrawal Amount') }}</label>

                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-text" id="dollar-mark">$</span>

                                        <input type="number" class="form-control @error('amount') is-invalid @enderror" placeholder="Enter your withdrawal amount here" name="amount" value="{{ old('amount') }}">
                                    </div>

                                    @error('amount')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- <div class="row mb-3">
                                <label for="balance" class="col-md-4 col-form-label text-white text-md-end">{{ __('PIN') }}</label>

                                <div class="col-md-5">
                                    <input type="password" class="form-control @error('balance') is-invalid @enderror text-center" name="pin" value="{{ old('pin') }}" required>

                                    @error('pin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-5 offset-md-4">
                                    <button type="submit" class="btn btn-danger w-100">
                                        {{ __('Withdraw') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection