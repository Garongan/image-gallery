@extends('layouts.auth')

@section('container')
    <div class="py-5">
        <div class="row w-100 d-flex justify-content-center align-items-center">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="/register" method="POST">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0">Logo</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register to Gallery
                                    </h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" name="name"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" required/>
                                        <label class="form-label" for="name">name</label>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="form-outline mb-4">
                                        <input type="text" id="username" name="username"
                                            class="form-control form-control-lg @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}" required/>
                                        <label class="form-label" for="username">Username</label>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" required/>
                                        <label class="form-label" for="password">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                                    </div>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have account? <a href="/login"
                                            style="color: #393f81;">Login here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
