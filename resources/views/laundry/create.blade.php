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
                        <form method="POST" action="/laundries">
                            @csrf
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
                                  placeholder="08***********"
                                />
                                @error('user_id')
                                <div id="user_id" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Satuan/Kiloan</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select class="form-select" name="item_id" id="item_id" aria-label="Default select example" >
                                  <option value="">Klik Untuk Lihat Daftar</option>
                                @foreach ($items as $item )
                                  <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
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
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company"></label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select name="satuan_id" class="form-select" id="satuan_id" aria-label="Default select example" disabled>
                                  <option value="">Klik Untuk Lihat Daftar</option>
                                @foreach ($satuans as $satuan )
                                  <option value={{ $satuan->id }}>{{ $satuan->name }}</option>
                                @endforeach
                              </select>
                              <select name="kiloan_id" class="form-select" id="kiloan_id" aria-label="Default select example" disabled>
                                <option value="">Klik Untuk Lihat Daftar</option>
                                @foreach ($kiloans as $kiloan )
                                  <option value={{ $kiloan->id }}>{{ $kiloan->berat }} Kg</option>
                                @endforeach
                              </select>
                                @error('username')
                                <div id="username" class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Perfume</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select name="perfume_id" class="form-select" id="perfume_id" aria-label="Default select example">
                                  <option value="">Klik Untuk Lihat Daftar</option>
                                  @foreach ($perfumes as $perfume )
                                    <option value={{ $perfume->id }}>{{ $perfume->name }} </option>
                                  @endforeach
                                </select>
                                  @error('username')
                                  <div id="username" class="invalid-feedback">
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
                              <input class="form-select" type="date" value={{ date('now') }} id="tanggal_masuk" name="tanggal_masuk" />
                            <label for="tanggal_selesai" class="col-form-label"> &nbsp; Laundry Selesai &nbsp;</label>
                              <input class="form-select" type="date" value={{ date('now') }} id="tanggal_selesai" name="tanggal_selesai" />
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Lunas/Belum lunas</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select name="payment_id" class="form-select" id="payment_id" aria-label="Default select example">
                                  <option value="">Klik Untuk Lihat Daftar</option>
                                  @foreach ($payments as $payment )
                                    <option value={{ $payment->id }}>{{ $payment->status }} </option>
                                  @endforeach
                                </select>
                                  @error('username')
                                  <div id="username" class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                              </div>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Bayar</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                            <span class="input-group-text">Rp.</span>
                            <input
                            name="bayar"
                            id="bayar"
                              type="text"
                              class="form-control"
                              placeholder="Amount"
                              aria-label="Amount (to the nearest dollar)"
                              readonly
                            />
                          </div>
                        </div>
                      </div>

                          <div class="row justify-content-end">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary" >Tambah Data</button>
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