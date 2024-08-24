@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-4 text-uppercase">{{ __('Tutor Application') }}</h2>
                    
                        <form method="POST" action="{{ url('/tutor/apply') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="name">{{ __('Name') }}</label>
                                <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>                                 
                                
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label for="resume" class="form-label d-flex">{{ __('Academic Verification') }}</label>
                                <input id="resume" type="file" class="form-control form-control-lg @error('resume') is-invalid @enderror" name="resume" accept=".pdf" required>
                                
                                @error('resume')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> 

                            <button class="btn btn-outline-light btn-lg px-5 " type="submit" style="margin-top: 20px;">{{ __('Apply') }}</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection