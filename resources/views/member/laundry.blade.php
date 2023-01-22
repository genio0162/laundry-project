@extends('layouts.d_main')
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">{{ $title }}</h4>
    <!-- Tabel Customer -->

<div class="card col-lg-12">
<div class="table-responsive text-nowrap">
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Kode Barang</th>
        <th>Satuan / Kiloan</th>
        <th>Jenis pakaian / Berat</th>
        <th>Perfume</th>
        <th class="text-center">Nama</th>
        <th>Tanggal Masuk Laundry</th>
        <th>Tanggal Selesai Laundry</th>
        <th>Total Pembayaran</th>
        <th>Status Pembayaran</th>
        <th>Status Pending</th>
        <th>Status Pengambilan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @if ($laundrys->count())
      @foreach ($laundrys as $laundry )
      <?php $time = strtotime($laundry->tanggal_masuk);
            $time2 = strtotime($laundry->tanggal_selesai);
            $time3 = strtotime(date('now'));
      ?>
      <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td class="text-center">{{ $laundry->code }}</td>
        <td class="text-center">{{ $laundry->item->name }}</td>
        @if ($laundry->satuan_id)
        <td class="text-center">{{ $laundry->satuan->name }}</td>
        @elseif ($laundry->kiloan_id)
        <td class="text-center">{{ $laundry->kiloan->berat." Kg" }}</td>
        @endif
        <td class="text-center">{{ $laundry->perfume->name }}</td>
        <td class="text-center">{{ $laundry->user->name }}</td>
        <td class="text-center">{{ date('d-m-Y', $time) }}</td>
        <td class="text-center">{{ date('d-m-Y', $time2) }}</td>
        <td class="text-center">Rp. {{ $laundry->total_pembayaran }}</td>
        @if ($laundry->payment_id == 1)
        <td class="text-center"><span class="badge bg-label-success me-1">{{ $laundry->payment->status }}</span></td>
        @else
        <td class="text-center"><span class="badge bg-label-danger me-1">{{ $laundry->payment->status }}</span></td>
        @endif

        @if(date('d-m-Y', $time3) >= date('d-m-Y', $time2))
        <td class="text-center"><span class="badge bg-label-success me-1">Dapat Diambil</span></td>
        @else
        <td class="text-center"><span class="badge bg-label-danger me-1">Belum Dapat Diambil</span></td>
        @endif

        @if ($laundry->pickup_id == 1)
        <td class="text-center"><span class="badge bg-label-success me-1">{{ $laundry->pickup->status }}</span></td>
        @else
        <td class="text-center"><span class="badge bg-label-danger me-1">{{ $laundry->pickup->status }}</span></td>
        @endif

        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/laundries/{{ $laundry->id }}/edit"
                ><i class="bx bx-edit-alt me-1"></i> Edit</a
              >
              <form action="/laundries/{{ $laundry->id }}" method="POST">
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
        <th>Kode Barang</th>
        <th>Satuan / Kiloan</th>
        <th>Jenis pakaian / Berat</th>
        <th>Perfume</th>
        <th class="text-center">Nama</th>
        <th>Tanggal Masuk Laundry</th>
        <th>Tanggal Selesai Laundry</th>
        <th>Total Pembayaran</th>
        <th>Status Pembayaran</th>
        <th>Status Pending</th>
        <th>Status Pengambilan</th>
      </tr>
    </tfoot>
  </table>
  <div class="d-flex justify-content-center">
    {{ $laundrys->links() }}
    </div>
</div>
</div>

<!--/ Tabel Customer -->

      <hr class="my-5" />
  </div>
  @endsection