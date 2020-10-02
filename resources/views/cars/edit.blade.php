@extends('layouts.app')

@section('content')
    <body>
    <h1>Fill Car Info</h1>
    <form action="/car/update{id" method="POST">
        @method('PUT')
        @csrf
       <div class="row">
         <div class="col-md-4 order-md-2 mb-4">
             <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Format Isi</span>
                <span class="badge badge-secondary badge-pill">7</span>
             </h4>
             <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Nombor Plate</h6>
                    <small class="text-muted">Contoh: WSW 3445</small>
                  </div>
                  <span class="text-muted">Huruf Dengan Nombor Haruslah Jarak</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Model Kereta</h6>
                    <small class="text-muted">Mulakan dengan Brand Kereta, kemudian model kereta tersebut</small>
                  </div>
                  <span class="text-muted">Contoh: Hondah Civic</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Tarikh Diperbaharui dan Tarikh Tamat</h6>
                    <small class="text-muted">Hanya pilih tarikh di ikon Calender</small>
                  </div>
                  <span class="text-muted">dd/mm/yyyy</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-success">
                    <h6 class="my-0">Harga</h6>
                    <small>Hanya perlu masukkan nilai sahaja. Tidak perlu untuk masukkan RM</small>
                  </div>
                  <span class="text-success">700.00</span>
                </li>
             </ul>
          </div>

          <div class="col-md-8 order-md-2">
            <h4 class="mb-3">Borang e-Aset Kenderaan KUPTM</h4>
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">Nombor Plate</label>
                  <input type="text" class="form-control" name="plate" value="{{$car['plate']}}"  required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Model Kereta</label>
                  <input type="text" class="form-control" name="model" value="{{$car['model']}}l"  required>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">Tarikh Diperbaharui</label>
                  <input type="date" class="form-control" name="renew" value="{{$car['renew']}}" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Tarikh Tamat</label>
                  <input type="date" class="form-control" name="expired" value="{{$car['expired']}}" required>
                </div>
              </div>
            <hr>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="lastName">Nilai Cukai Jalan (RM):</label>
                    <input type="text" class="form-control" name="roadtax" value="{{$car['roadtax']}}" required>

                </div>
                <div class="col-md-4 mb-3">
                    <label for="lastName">Nilai Premium (RM):</label>
                    <input type="text" class="form-control" name="prepay" value="{{$car['prepay']}}"  required>
                </div>
                <div class="col-md-5 mb-3">
                  <label for="zip">Nilai Insurans (RM):</label>
                  <input type="text" class="form-control" name="ins" value="{{$car['ins']}}" required>
                </div>
              </div>

              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">SIMPAN</button>
            </form>
          </div>
        </div>

       </div>
    </form>
    </body>
@endsection
