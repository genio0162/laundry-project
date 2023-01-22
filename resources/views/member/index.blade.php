@extends('layouts.d_main')
@section('main')
@if (session()->has('success'))
                <div
                class="bs-toast toast fade show bg-success toast-placement-ex m-2 top-0 end-0"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                data-delay="2000"
              >
                <div class="toast-header">
                  <i class="bx bx-bell me-2"></i>
                  <div class="me-auto fw-semibold">Data Has Been Updated</div>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  {{ session('success') }}
                </div>
              </div>
              @endif
<div class="container-xxl flex-grow-1 container-p-y">
    @if (auth()->user()->is_active === 0 )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <a href="/member/{{ auth()->user()->id }}/edit" class="alert-link">KLIK DISINI</a> Anda Harus Melengkapi Data Diri Terlebih Dahulu!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row">
      <div class="layout-demo-wrapper">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Welcome back, {{ auth()->user()->name }} 🎉</h5>
                <p class="mb-4">
                  Semoga Hari mu Cerah dan Menyenangkan, Saat ini anda memiliki <span class="fw-bold">{{ auth()->user()->laundrys->count() }}</span> Laundry. Terima kasih sudah berlangganan jasa kami ^.^ <br>Check your new badge in
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