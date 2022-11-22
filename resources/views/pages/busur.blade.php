@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.3/css/jquery.orgchart.css" integrity="sha512-ND0T4MpnjKii0jtWYOcBBwkS1WrkgDbRwaHwyi/Llx6ovEI5NEx9CxmuB8c95Lv9H/LZ3USXTYtTYkDh9fNmaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="v_no_busur">Pemeriksaan Busur Nomor</label>
                    <input type="text" class="form-control" id="v_no_busur" placeholder="No. Busur" name="v_no_busur"/>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="v_km">KM</label>
                    <input type="text" class="form-control" id="v_km" placeholder="Kilometer" name="v_km"/>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="v_antara">Antara</label>
                    <input type="text" class="form-control" id="v_antara" placeholder="Satuan" name="v_antara"/>
                </div>
            </div>
        </div>
        <div class="col-12 row">
            <table class="table table-bordered table-responsive  justify-content-center ">
                <thead class="text-dark text-center" style="background-color: #FFA500 !important">
                    <tr>
                        <td rowspan="2" style="vertical-align : middle;">No. Titik</td>
                        <td colspan="2">Letak Pada</td>
                        <td rowspan="2" style="vertical-align : middle;">Tempat Tetap Jembatan Perlintasan Wesel</td>
                        <td colspan="2">Letak Bob-Eob</td>
                    </tr>
                    <tr>
                        <td>KM</td>
                        <td>HM</td>
                        <td>Hasil Pengukuran</td>
                        <td>Hasil Perhitungan</td>
                    </tr>
                </thead>
                <tbody class="bg-light text-dark ">
                    @foreach ($busurs as $busur)
                    <tr class="border-white">
                        <td>{{$busur->no_titik}}</td>
                        <td>{{$busur->lp_km}}</td>
                        <td>{{$busur->lp_hm}}</td>
                        <td>{{$busur->jembatan}}</td>
                        <td>{{$busur->lb_ukur}}</td>
                        <td>{{$busur->lb_hitung}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-primary" onclick="add()">+ Data</a> <a href="#" onclick="pindah({{$data->id}})">Halaman Selanjutnya &#8594</a>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form id="KaiForm" action="{{ route('busur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              <input type="hidden" name="id" id="id" value="" />
              <input type="hidden" name="petaks_id" id="petaks_id" value="{{$data->id}}" />
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
                      <label for="no_busur" class="form-label">No Busur :</label>
                      <input type="text" id="no_busur" name="no_busur" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="km" class="form-label">Kilometer :</label>
                        <input type="text" id="km" name="km" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="antara" class="form-label">Antara :</label>
                        <input type="text" id="antara" name="antara" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="no_titik" class="form-label">No Titik :</label>
                        <input type="text" id="no_titik" name="no_titik" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="lp_km" class="form-label">Letak Pada KM :</label>
                        <input type="text" id="lp_km" name="lp_km" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="lp_hm" class="form-label">Letak Pada HM :</label>
                        <input type="text" id="lp_hm" name="lp_hm" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="jembatan" class="form-label">Tempat Tetap Jembatan Perlintasan Wesel :</label>
                        <input type="text" id="jembatan" name="jembatan" class="form-control" required="">
                      </div>
                      <p class="text-muted">Letak Bob-Eob</p>
                      <div class="mb-3">
                        <label for="lb_ukur" class="form-label">Hasil Pengukuran :</label>
                        <input type="text" id="lb_ukur" name="lb_ukur" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="lb_hitung" class="form-label">Hasil Perhitungan :</label>
                        <input type="text" id="lb_hitung" name="lb_hitung" class="form-control" required="">
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
    var url ="{{ url('petak_busur-store') }}";
  } 

  function hide(){
    $('#tambahModal').modal('hide');
  }
  function pindah(id){
    var url = "../petak_panah/"+id;
    location.href=url;
  }
</script>
@endpush
