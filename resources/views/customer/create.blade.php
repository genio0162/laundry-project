@extends('layouts.d_main')
@section('main')
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4">{{ $title }}</h4>

                <!-- Basic Layout & Basic with Icons -->
                <div class="row">
                  <!-- Basic with Icons -->
                  <div class="col-xxl">
                    <div class="card mb-4">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <small class="text-muted float-end">Masukkan data account customer</small>
                      </div>
                      <div class="card-body">
                        <form method="POST" action="/customers">
                            @csrf
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-user"></i
                                ></span>
                                <input
                                  type="text"
                                  class="form-control @error('name') is-invalid @enderror"
                                  id="name"
                                  name="name"
                                  placeholder="John Doe"
                                  aria-label="John Doe"
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                                @error('name')
                                <div id="name" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Username</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"
                                  ><i class="bx bx-user"></i
                                ></span>
                                <input
                                  type="text"
                                  id="username"
                                  name="username"
                                  class="form-control @error('name') is-invalid @enderror"
                                  placeholder="Contoh123"
                                  aria-describedby="basic-icon-default-company2"
                                />
                                @error('username')
                                <div id="username" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input
                                  type="text"
                                  id="email"
                                  name="email"
                                  class="form-control @error('email') is-invalid @enderror"
                                  placeholder="contoh@gmail.com"
                                  aria-describedby="basic-icon-default-email2"
                                />
                                @error('email')
                                <div id="email" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-text">Jika customer tidak punya email , Kosongkan</div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Nomor HP</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"
                                  ><i class="bx bx-phone"></i
                                ></span>
                                <input
                                  type="number"
                                  id="telepon"
                                  name="telepon"
                                  class="form-control phone-mask  @error('name') is-invalid @enderror"
                                  placeholder="08**********"
                                  aria-label="08**********"
                                />
                                @error('telepon')
                                <div id="telepon" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Password</label>
                            <div class="col-sm-10 form-password-toggle">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"></span>
                                <input
                                  type="password"
                                  id="password"
                                  name="password"
                                  class="form-control phone-mask @error('name') is-invalid @enderror"
                                  aria-describedby="basic-icon-default-phone2"
                                />
                                @error('password')
                                <div id="password" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                              </div>
                            </div>
                          </div>

                          <div class="row justify-content-end">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Content -->
@endsection