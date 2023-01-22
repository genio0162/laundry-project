@extends('layouts.d_main')
@section('main')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <p class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</p>
            </li>
          </ul>
          <form method="post" action="/customers/{{ $customer->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
          <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
              <div class="d-flex align-items-start align-items-sm-center gap-4">
                <input type="hidden" name="oldImage" value="{{ $customer->img }}">
                @if ($customer->img)
                <img
                  src="{{ asset('storage/'. $customer->img) }}"
                  alt="user-avatar"
                  class="img-fluid rounded img-preview"
                  height="300"
                  width="300"

                />
                @else
                <img
                src="{{ asset('storage/'. $customer->img)}}"
                alt="user-avatar"
                class="img-fluid rounded img-preview"
                height="300"
                width="300"

              />
                @endif

            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" onchange="previewImage()" id="upload" hidden>
              </label>
              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              @error('img')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
            </div>
          </div>
        </div>

            <hr class="my-0" />
            <div class="card-body">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Nama</label>
                    <input
                      class="form-control  @error('name') is-invalid @enderror"
                      type="text"
                      id="name"
                      name="name"
                      value="{{ $customer->name }}"
                      autofocus
                    />
                    @error('name')
                  <div id="name" class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>


                  <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input
                      class="form-control @error('email') is-invalid @enderror"
                      type="text"
                      id="email"
                      name="email"
                      value="{{ $customer->email }}"
                      placeholder="Email"
                    />
                    @error('email')
                    <div id="email" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>


                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="telepon">Nomor HP.</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text">ID (+62)</span>
                      <input
                        type="text"
                        id="telepon"
                        name="telepon"
                        class="form-control  @error('telepon') is-invalid @enderror"
                        value="{{ $customer->telepon }}"
                        placeholder="NO.HP"
                      />
                    </div>
                    @error('telepon')
                    <div id="telepon" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $customer->alamat }}" placeholder="Alamat" />
                    @error('alamat')
                    <div id="alamat" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="mb-3 col-md-6">
                    <label for="state" class="form-label">Bergabung sejak</label>
                    <?php $time = strtotime($customer->created_at);?>
                    <p>{{ date('d-M-Y', $time) }} | {{ $customer->created_at->diffForHumans() }}</p>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="state" class="form-label">Status Customer</label>
                    @if ($customer->laundrys->count() >= 5)
          <p><span class="badge bg-label-warning me-1">Premium</span>| Total Laundry : {{ $customer->laundrys->count() }}</p>
          @elseif ($customer->laundrys->count() > 2 && $customer->laundrys->count() < 5)
          <p><span class="badge bg-label-primary me-1">Standart</span>| Total Laundry : {{ $customer->laundrys->count() }}</p>
          @elseif ($customer->laundrys->count() > 0 && $customer->laundrys->count() < 3)
          <p><span class="badge bg-label-success me-1">Basic</span>| Total Laundry : {{ $customer->laundrys->count() }}</p>
          @else
          <p><span class="badge bg-label-secondary me-1">InActive</span></p>
          @endif
                  </div>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Save changes</button>
                  <a type="reset" href="/customers" class="btn btn-outline-secondary">Cancel</a>
                </div>
              </form>
            </div>
            <!-- /Account -->
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
  <!-- Content wrapper -->
</div>
<script>
  function previewImage(){
    const image = document.querySelector('#upload');
  const imgPreview = document.querySelector('.img-preview')

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();

  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent){
    imgPreview.src = oFREvent.target.result;
  }

  }

</script>
@endsection