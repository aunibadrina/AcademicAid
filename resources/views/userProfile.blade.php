@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card bg-dark rounded">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('update.profile') }}">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            @php($profile_image = auth()->user()->profile_image)
                            <img class="rounded-circle" height="250" width="250" src="@if($profile_image) {{ asset("storage/profile_images/$profile_image") }} @else {{ asset('storage/profile_images/profile.jpg') }} @endif" id="image_preview_container">
                            <br>
                            <span class="font-weight-bold">
                                <input type="file" name="profile_image" id="profile_image" class="form-control">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right text-white text-uppercase">Profile Settings</h4>
                            </div>
                            <div class="row" id="res"></div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label d-flex text-white">Name</label>
                                    <input type="text" name="name" class="form-control form-control-lg" placeholder="first name" value="{{ auth()->user()->name }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label d-flex text-white">Email</label>
                                    <input type="text" name="email" disabled class="form-control form-control-lg" value="{{ auth()->user()->email }}" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label d-flex text-white">Phone</label>
                                    <input type="text" name="phone" class="form-control form-control-lg" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label d-flex text-white">Address</label>
                                    <input type="text" name="address" class="form-control form-control-lg" value="{{ auth()->user()->address }}" placeholder="Address">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button id="btn" class="btn btn-outline-light btn-lg px-5 profile-button" type="submit">Save Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/profileupdate.js') }}"></script>

  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

  <!-- Bootstrap JavaScript (Popper.js is required for dropdowns) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
