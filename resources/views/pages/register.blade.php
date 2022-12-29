@extends('pages.layout')
@section('title', 'Register')

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
                                <h4>Register with <span class="text-primary">Listen</span></h4>
                                <p class="fs-6">It's time to join with Listen and gain full awesome music experience.</p>
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
                                <form method="post" action="{{url('register')}}" class="mt-5">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="user_name" class="form-label fw-medium">User Name</label>
                                        <input type="text" id="user_name" name="user_name" class="form-control" value="{{old('user_name')}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-medium">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_type" class="form-label fw-medium">User Type</label>
                                        <select class="form-select" id="user_type" name="user_type" aria-label="Select User Type" value="{{old('user_type')}}" required>
                                            <option value="">Select User Type</option>
                                            <option value="Subscriber" {{old('user_type') == 'Subscriber' ? 'selected' : ''}}>Subscriber</option>
                                            <option value="Artist" {{old('user_type') == 'Artist' ? 'selected' : ''}}>Artist</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="password" class="form-label fw-medium">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" value="{{old('password')}}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirm" class="form-label fw-medium">Confirm Password</label>
                                        <input type="password" id="password_confirm" name="password_confirm" class="form-control" value="{{old('password_confirm')}}" required>
                                    </div>
                                    <!-- <div class="mb-4">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="agree">
                                            <label class="form-check-label" for="agree">I agree <a href="#">Terms & Condition</a></label>
                                        </div>
                                    </div> -->
                                    <div class="mb-5">
                                        <input type="submit" class="btn btn-primary w-100" value="Register">
                                    </div>
                                    <p>Do you have an Account? <br><a href="{{url('login')}}" class="fw-medium external">Login</a></p>
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