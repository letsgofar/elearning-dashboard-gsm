@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        @if (session('status'))
          <div class="ml-3 alert alert-success">
              {{-- {{ session('status') }} --}}
          </div>
          @endif
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Buat Kupon Perubahan</h4>
              <p class="card-description">
                Admin bisa membuat kupon dengan mengisi form berikut
              </p>
              <form class="forms-sample" name="add_kupon_form" id="add_kupon_form" method="POST" action="/kupon/buat-kupon">
                @csrf
                <div class="form-group">
                  <label for="">Nama Kupon</label>
                  <input type="text" class="form-control" id="coupon_title" name="nama" placeholder="Nama Kupon" required>
                </div>
                <div class="form-group">
                    <label for="">Kode Kupon</label>
                    <input type="text" class="form-control" id="coupon_code" name="code" placeholder="Kode Kupon" required>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kategori Kupon</label>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label for="inlineRadio1" class="form-check-label">
                          <input onclick="selectedKategori()" type="radio" class="form-check-input" id="inlineRadio1" value="date" name="radioInline">
                          Date
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <label for="inlineRadio2" class="form-check-label">
                          <input onclick="selectedKategori()" type="radio" class="form-check-input" id="inlineRadio2" value="kuota" name="radioInline">
                          Kuota
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-4">
                        <div class="form-group" id="rangeDate" style="display:none;">
                          <label for="">Date</label>
                              <input type="date" class="form-control" name="date" placeholder="dd-mm-yyyy">
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-group" id="kuotaView" style="display:none;">
                            <label for="">Kuota</label>
                                <input type="text" class="form-control" name="kuota" placeholder="Masukkan Kuota">
                        </div>
                    </div>
                  </div>
                <button class="btn btn-primary mr-2" type="submit">Buat Kupon</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('js')

  <script>
    function selectedKategori(){
      // console.log(document.getElementsByName('radioInline').value)
      if(document.getElementById('inlineRadio1').checked){
        document.getElementById('rangeDate').style.display = "inline"
        document.getElementById('kuotaView').style.display = "none"
      }else{
        document.getElementById('rangeDate').style.display = "none"
        document.getElementById('kuotaView').style.display = "inline"
      }
      // if (document.getElementsByName('radioInline').value == "date") {
      //   console.log("Date Selected")
      // }else if(document.getElementsByName('radioInline').value == "kuota"){
      //   console.log("Kuota Selected")
      // }
    }
      // function add_kupon(){
      //     var x = getCookie('token_login_user_gsm');
      //     var datas = new FormData(document.getElementById('add_kupon_form'));
      //     $.ajax({
      //         type: 'POST',
      //         url: "{{ secure_url('/') }}/api/v1/admin/reg-coupon",
      //         // url: "{{ secure_url('/') }}/api/v1/admin/kupon/create",
      //         processData: false,
      //         contentType: false,
      //         data: datas,
      //         headers: {"Authorization": "Bearer " + x}
      //     })
      //     .done(function(data, status){
      //       console.log(status)
      //       swal({
      //         title: "Selamat",
      //         text: "Kupon berhasil ditambahkan. \n\n Message: "+data.message,
      //         type: "success"
      //       }, function(){
      //         window.location.reload();
      //       });
      //     })
      //     .fail(function(data, status){
      //       console.log(status);
      //       var err_message = data.responseText;
      //       var fix_message = err_message.length > 100 ? err_message.substring(0, 100 - 3) + "..." : err_message;
      //       swal({
      //         title: "Maaf",
      //         text: "Pastikan koneksi internet anda lancar. \n\n Message: "+fix_message,
      //         type: "error",
      //         allowOutsideClick: true
      //       })
      //     })
      // }
  </script>
  {{-- <script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('assets/pages/jquery.form-pickers.init.js')}}"></script>
  <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
  <script src="{{asset('assets/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script> --}}

@endsection
