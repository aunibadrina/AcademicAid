@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card card-header bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-4 text-uppercase">{{ __('Edit User') }}</h2>

                        <div>
                            @if ($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <form method="post" action="{{ route('updateUser', ['user' => $user]) }}">
                            @csrf
                            @method('put')

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="name">{{ __('Name') }}</label>
                                <input type="text" id="name" class="form-control form-control-lg" name="name" placeholder="Name" value="{{$user->name}}" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="email">{{ __('Email') }}</label>
                                <input type="text" id="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{$user->email}}" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label d-flex" for="phone">{{ __('Phone Number') }}</label>
                                <input type="text" id="phone" class="form-control form-control-lg" name="phone" placeholder="Phone Number" value="{{$user->phone}}" />
                            </div>
<br>
                            <div>
                                <input type="submit" class="btn btn-outline-light btn-lg px-5" value="{{ __('Update User') }}" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
