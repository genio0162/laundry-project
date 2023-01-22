@extends('layouts.d_main')
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="layout-demo-wrapper">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Welcome back, {{ auth()->user()->name }} 🎉</h5>
                <p class="mb-4">
                  Anda Memiliki <span class="fw-bold">{{ $users->count()-1 }}</span> Customer sejauh ini. Luar Biasa! Check your new badge in
                  your profile.
                </p>
                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="../assets/img/illustrations/man-with-laptop-light.png"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="my-5" />
  </div>
  @endsection