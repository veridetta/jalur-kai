@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.3/css/jquery.orgchart.css" integrity="sha512-ND0T4MpnjKii0jtWYOcBBwkS1WrkgDbRwaHwyi/Llx6ovEI5NEx9CxmuB8c95Lv9H/LZ3USXTYtTYkDh9fNmaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div class="d-flex justify-content-between">
            <p class="h5 md-2"> INPUT DATA ASET LENGKUNG</p>
            <p class="h3 text-end md-2"> SELL Maintenance</p>
        </div>
        <div class="col-12 row">
            <div class="d-flex justify-content-beetwen">
                <a href="#" class="btn btn-primary"  onclick="add()">Tambah</a>
            </div>
            <table class="table table-bordered table-responsive  justify-content-center ">
                <thead class="bg-primary text-center text-white" style="">
                    <tr>
                        <td>No</td>
                        <td>Lintas</td>
                        <td>Koridor</td>
                        <td>Antara</td>
                        <td>Resort</td>
                        <td>No. Lengkung</td>
                        <td>KM/HM ML</td>
                        <td>KM/HM AL</td>
                        <td>Jalur (Hulu, Hilir, Tunggal)</td>
                        <td>Jenis Rel</td>
                    </tr>
                </thead>
                <tbody class="bg-light border-white">
                    <?php $no=1;?>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->lintas}}</td>
                            <td>{{$data->koridor}}</td>
                            <td>{{$data->lintas}}</td>
                            <td>{{$data->antara}}</td>
                            <td>{{$data->resort}}</td>
                            <td>{{$data->no_lengkung}}</td>
                            <td>{{$data->km_ml}}</td>
                            <td>{{$data->km_al}}</td>
                            <td>{{$data->jalur}}</td>
                            <td>{{$data->rel}}</td>
                        </tr>
                        <?php $no++;?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form id="KaiForm" action="{{ route('aset.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              <input type="hidden" name="id" id="id" value="" />
            <div class="modal-header">
              <h5 class="modal-title" id="KaiTitle">Modal title</h5>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
              </div> 
              <div class="input_wrapper">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="lintas" class="form-label">Lintas :</label>
                      <input type="text" id="lintas" name="lintas" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="koridor" class="form-label">Koridor :</label>
                        <input type="text" id="koridor" name="koridor" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="antara" class="form-label">Antara :</label>
                        <input type="text" id="antara" name="antara" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="resort" class="form-label">Resort :</label>
                        <input type="text" id="resort" name="resort" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="no_lengkung" class="form-label">No. Lengkung :</label>
                        <input type="text" id="no_lengkung" name="no_lengkung" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="km_ml" class="form-label">KM/HM ML :</label>
                        <input type="text" id="km_ml" name="km_ml" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="km_al" class="form-label">KM/HM AL :</label>
                        <input type="text" id="km_al" name="km_al" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="jalur" class="form-label">Jalur (Hulu, Hilir, Tunggal) :</label>
                        <input type="text" id="jalur" name="jalur" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Rel :</label>
                        <input type="text" id="jenis" name="jenis" class="form-control" required="">
                      </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hide()">Close</a>
              <input type="submit" class="btn btn-primary btn-block" id="btnSave" value="Save changes">
            </div>
          </form>
          </div>
        </div>
    </div>
@endsection
@push('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
<script>
    function add(){
    $('#KaiForm').trigger("reset");
    $('#KaiTitle').html("Tambah Data");
    $('#tambahModal').modal('show');
    $('#id').val('');
  } 

  function hide(){
    $('#tambahModal').modal('hide');
  }
</script>
@endpush
