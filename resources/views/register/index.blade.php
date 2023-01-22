@extends('layouts.main')
@section('main')
<div class="my-login-page blog_details">
<section class="h-100  mb-50">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand ml-115">
                    <img src="../assets/img/logo/laundry.png" alt="logo">
                </div>
                <div class="card fat">
                    <div class="card-body mr-50 ml-50">
                        <h1 class="card-title blog-head">Sign Up</h1> <br>
                        <form method="POST" action="/register" class="my-login-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="name"> <small>Name</small></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                <div id="name" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="username"> <small>Username</small></label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>
                                @error('username')
                                <div id="username" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email"> <small>Email</small></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                <div id="email" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"><small>Password</small></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required data-eye>
                                @error('password')
                                <div id="password" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div><br>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block" >
                                    Sign up
                                </button>
                            </div>
                            <div class="mt-4 text-center">
                               <small> Already have an account? <a href="/login">Sign in</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

@endsection