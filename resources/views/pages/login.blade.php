@extends('pages.layout')
@section('title', 'Login')

@section('content')
    <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
    <div id="wrapper">
        <!-- Start:: auth [[ Find at scss/framework/auth.scss ]] -->
        <div class="auth py-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-11 mx-auto">
                        <div class="card">
                            <div class="card-body p-sm-5">
                                <h4>Login to <span class="text-primary">Listen</span></h4>
                                <p class="fs-6">Welcome back! login with your data that you entered during registration</p>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-primary alert-block mt-5">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block mt-5">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                <form action="{{url('login')}}" method="post" class="mt-5">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-medium">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label fw-medium">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" value="{{old('password')}}" required>
                                    </div>
                                    <!-- <div class="mb-4 text-end">
                                        <a href="/forgot-password" class="link-primary fw-medium">Forgot Password?</a>
                                    </div> -->
                                    <div class="mb-5">
                                        <input type="submit" class="btn btn-primary w-100" value="Login">
                                    </div>
                                    <p>Not registered yet? <br><a href="{{url('register')}}" class="fw-medium external">Register</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: auth -->
    </div>
    <!-- End:: wrapper -->

@stop
