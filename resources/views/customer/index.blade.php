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
                  <div class="me-auto fw-semibold">Added New Customer</div>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  {{ session('success') }}
                </div>
              </div>
              @endif
              <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">{{ $title }}</h4>
<div class="card col-lg-12">
  <div class="table-responsive text12nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No.Hp</th>
          <th>Total Laundry</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @if ($users->count())
        @foreach ($users->skip(1) as $user )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->alamat }}</td>
          <td>{{ $user->telepon }}</td>
          <td class="text-center">{{ $user->laundrys->count() }}</td>
          @if ($user->laundrys->count() >= 5)
          <td><span class="badge bg-label-warning me-1">Premium</span></td>
          @elseif ($user->laundrys->count() > 2 && $user->laundrys->count() < 5)
          <td><span class="badge bg-label-primary me-1">Standart</span></td>
          @elseif ($user->laundrys->count() > 0 && $user->laundrys->count() < 3)
          <td><span class="badge bg-label-success me-1">Basic</span></td>
          @else
          <td><span class="badge bg-label-secondary me-1">InActive</span></td>
          @endif
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/customers/{{ $user->id }}/edit"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                >
                <form action="/customers/{{ $user->id }}" method="POST">
                  @method('delete')
                  @csrf
                  <button class="dropdown-item"> <i class="bx bx-trash me-1" onclick="return confirm('Apakah anda yakin menghapus Customers ?')"></i> Delete</a></button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
      <tfoot class="table-border-bottom-0">
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No.Hp</th>
          <th>Total Laundry</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </tfoot>
    </table>
    <div class="d-flex justify-content-center">
    {{ $users->links() }}
    </div>
  </div>
</div>
<hr class="my-5" />
</div>

@endsection