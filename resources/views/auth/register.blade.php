@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-4 text-uppercase">{{ __('Register') }}</h2>
                    
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="name">{{ __('Name') }}</label>
                                <input type="name" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>   
                            
                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="email">{{ __('Email') }}</label>
                                <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                                      

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="password">{{ __('Password') }}</label>
                                <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="password">{{ __('Confirm Password') }}</label>
                                <input type="password" id="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password"/>
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5 " type="submit" style="margin-top: 20px;">{{ __('Register') }}</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection