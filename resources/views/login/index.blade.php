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
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <i class="fa-sharp fa-solid fa-check"></i> <strong>{{ session('success') }}</strong>, please login!
                  </div>
                @endif
                @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <i class="fa-sharp fa-solid fa-triangle-exclamation"></i> <strong>{{ session('loginError') }}</strong>, please try again!
                  </div>
                @endif
                <div class="card fat">
                    <div class="card-body mr-50 ml-50">
                        <h1 class="card-title blog-head">Login</h1> <br>
                        <form method="POST" action="/login" class="my-login-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="telepon"> <small>Nomor Telepon </small></label>
                                <input id="telepon" type="telepon" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autofocus>
                                @error('telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"><small>Password</small></label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div><br>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Sign in
                                </button>
                            </div>
                            <div class="mt-4 text-center">
                               <small> Don't have an account? <a href="/register">Create One</a></small>
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