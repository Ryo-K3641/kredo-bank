@extends('layouts.app')

@section('body_class', 'bg-dark')

@section('content')
    <div class="container mt-5 text-white">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card bg-dark border-0">
                    <div class="card-header bg-dark border-0 text-center">
                        <i class="fa-solid fa-money-bills fa-9x text-primary"></i>
                        <h1 class="text-primary">New Account</h1>
                    </div>

                    <div class="card-body">
                        <!-- rand(pow(1, 15), pow(10, 15)); -->
                        <form action="{{ route('accounts.store') }}" method="post">
                            @csrf

                            <div class="row mb-3">
                                <label for="balance" class="col-md-4 col-form-label text-white text-md-end">{{ __('Initial Balance') }}</label>

                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-text" id="dollar-mark">$</span>
                                        <input type="number" class="form-control @error('balance') is-invalid @enderror" placeholder="Enter your Initial Balance here" aria-label="balance" aria-describedby="dollar-mark" name="balance" value="{{ old('balance') }}" min="0" required>
                                    </div>

                                    @error('balance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-white text-md-end">{{ __('PIN Code') }}</label>

                                <div class="col-md-5">
                                    <input id="password" type="password" class="form-control @error('pin_code') is-invalid @enderror text-center" name="pin_code" required>

                                    @error('pin_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-md-5 offset-md-4 text-end">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                    <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection