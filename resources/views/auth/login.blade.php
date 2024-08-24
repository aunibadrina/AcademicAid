@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-4 text-uppercase">{{ __('Login') }}</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-outline form-white mb-4">
                            <label class="form-label d-flex" for="email">{{ __('Email') }}</label>
                            <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline form-white mb-4">
                            <label class="form-label d-flex" for="password">{{ __('Password') }}</label>
                            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check d-flex justify-content-start mb-4" >
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <label class="form-check-label" for="remember"> {{ __('Remember Me') }} </label>
                        </div>

                        <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Login') }}</button>
                    </form>
                </div>

                <div>
                    <p class="mb-0">{{ __('New User?') }} <a href="sort" class="text-white-50 fw-bold">{{ __('Register') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection