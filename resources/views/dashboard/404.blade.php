@extends('layouts.d_main')
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="layout-demo-wrapper">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <p class="mb-4">
                 Anda Bukan Admin
                </p>
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

@if (auth()->user()->role->id == 1)
      <!-- Tabel Customer -->


<!--/ Tabel Customer -->
@endif
      <hr class="my-5" />
  </div>
  @endsection