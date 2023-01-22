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
                        <form method="POST" action="/laundries/{{ $laundry->id }}">
                            @method('put')
                            @csrf
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <small class="text-muted float-end">Masukkan data laundry customer</small>
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary" >Update</button>
                            </div>
                          </div>
                      </div>
                      <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nomor Laundry</label>
                                <div class="col-sm-10">
                                  <div class="input-group input-group-merge">
                                    <input
                                      type="text"
                                      class="form-control @error('user_id') is-invalid @enderror"
                                      id="user_id"
                                      name="user_id"
                                      value="{{ $laundry->code}}"
                                      readonly
                                    />
                                  </div>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Customer</label>
                                <div class="col-sm-10">
                                  <div class="input-group input-group-merge">
                                    <input
                                      type="text"
                                      class="form-control @error('user_id') is-invalid @enderror"
                                      id="user_id"
                                      name="user_id"
                                      value="{{ $laundry->user->name }}"
                                      readonly
                                    />
                                  </div>
                                </div>
                              </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nomor HP</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-phone"></i
                                ></span>
                                <input
                                  type="text"
                                  class="form-control @error('user_id') is-invalid @enderror"
                                  id="user_id"
                                  name="user_id"
                                  value="{{ $laundry->user->telepon }}"
                                  placeholder="08***********"
                                  readonly
                                />
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Satuan/Kiloan</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select class="form-select" name="item_id" id="item_id" aria-label="Default select example" disabled>
                                  <option value="{{ $laundry->item_id }}">{{ $laundry->item->name }}</option>
                              </select>
                                @error('item_id')
                                <div id="item_id" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Berat/Jenis Pakaian</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select name="satuan_id" class="form-select" id="satuan_id" aria-label="Default select example" disabled>
                                    @if ( !empty($laundry->satuan->name))
                                    <option value="{{ $laundry->satuan_id }}">{{ $laundry->satuan->name }}</option>
                                    @else
                                    <option value="">-</option>
                                    @endif
                              </select>
                              <select name="kiloan_id" class="form-select" id="kiloan_id" aria-label="Default select example" disabled>
                                @if ( !empty($laundry->kiloan->berat))
                                <option value="{{ $laundry->kiloan_id }}">{{ $laundry->kiloan->berat }} Kg</option>
                                @else
                                <option value="">-</option>
                                @endif
                              </select>
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Perfume</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select name="perfume_id" class="form-select" id="perfume_id" aria-label="Default select example" disabled>
                                  <option value="{{ $laundry->perfume_id }}">{{ $laundry->perfume->name }}</option>
                                </select>
                                  @error('perfume_id')
                                  <div id="perfume_id" class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                              </div>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Laundry masuk</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                              <input readonly class="form-select" type="date" value={{ $laundry->tanggal_masuk }} id="tanggal_masuk" name="tanggal_masuk"/>
                            <label for="tanggal_selesai" class="col-form-label"> &nbsp; Laundry Selesai &nbsp;</label>
                              <input class="form-select" type="date" value={{ $laundry->tanggal_selesai }} id="tanggal_selesai" name="tanggal_selesai" />
                              </div>
                            </div>
                          </div>


                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Status Pelunasan</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                @if ($laundry->payment_id == 1)
                                <select name="payment_id" class="form-select" id="payment_id" aria-label="Default select example" disabled>
                                    <option value="{{ $laundry->payment_id }}">{{ $laundry->payment->status }}</option>
                                </select>
                                    @else
                                    <select name="payment_id" class="form-select" id="payment_id" aria-label="Default select example">
                                        <option value="">Klik Untuk Melihat Daftar</option>
                                    @foreach ($payments as $payment )
                                    <option value={{ $payment->id }}>{{ $payment->status }} </option>
                                  @endforeach
                                </select>
                          @endif
                              </div>
                            </div>
                        </div>

                          <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Bayar</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                            <span class="input-group-text">Rp.</span>
                            @if ($laundry->payment_id == 1)
                            <input
                            name="bayar"
                            id="bayar"
                              type="text"
                              class="form-control"
                              placeholder="Amount"
                              value="{{ $laundry->bayar }}"
                              aria-label="Amount (to the nearest dollar)"
                              readonly
                            />
                            @else
                            <input
                            name="bayar"
                            id="bayar"
                              type="text"
                              class="form-control"
                              placeholder="Amount"
                              value=""
                              aria-label="Amount (to the nearest dollar)"
                            />
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Status Pengambilan</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            @if ($laundry->pickup_id == 1)
                            <select name="pickup_id" class="form-select" id="pickup_id" aria-label="Default select example" disabled>
                                <option value="{{ $laundry->pickup_id }}">{{ $laundry->pickup->status }}</option>
                            </select>
                                @else
                                <select name="pickup_id" class="form-select" id="pickup_id" aria-label="Default select example">
                                    <option value="">Klik untuk melihat daftar </option>
                                @foreach ($pickups as $pickup )
                                <option value={{ $pickup->id }}>{{ $pickup->status }} </option>
                              @endforeach
                      @endif
                          </div>
                        </div>
                      </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Content -->

              <script>
                $(function() {
    $(document).on('change', '#item_id', function() {
        var input = $('select[name="satuan_id"]');
        var input2 = $('select[name="kiloan_id"]');

        if ($.trim($('option:selected', this).text()) == "Satuan") {
            input.prop('disabled', false);
            input2.prop('disabled', true);
        }
        else {
            input.prop('disabled', true);
            input2.prop('disabled', false);
        }
    });
});
              </script>
              <script>
                $(function() {
$(document).on('change', '#payment_id', function() {
var input = $('input[name="bayar"]');

if ($.trim($('option:selected', this).text()) == 'Sudah Bayar') {
input.prop('readonly', false);
}
else {
input.prop('readonly', true);
}
});
});
</script>
@endsection