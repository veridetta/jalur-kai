@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.3/css/jquery.orgchart.css" integrity="sha512-ND0T4MpnjKii0jtWYOcBBwkS1WrkgDbRwaHwyi/Llx6ovEI5NEx9CxmuB8c95Lv9H/LZ3USXTYtTYkDh9fNmaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div class="col-12 row">
            <table class="table table-bordered table-responsive  justify-content-center ">
                <thead class="text-dark text-center" style="background-color: #FFA500 !important">
                    <tr>
                        <td colspan="3">Anak Panah (Tali Busur 10m)</td>
                    </tr>
                    <tr>
                        <td>Hasil Pengukuran</td>
                        <td>Hasil Perhitungan</td>
                        <td>Hasil Baru Perhitungan</td>
                    </tr>
                </thead>
                <tbody class="bg-light border-white">
                    @foreach ($panahs as $panah)
                    <tr>
                        <td>{{$panah->hasil}}</td>
                        <td>{{$panah->geser}}</td>
                        <td>{{$panah->hasil_baru}}</td>
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
            <form id="KaiForm" action="{{ route('panah.store') }}" method="POST" enctype="multipart/form-data">
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
                      <label for="hasil" class="form-label">Hasil Pengukuran :</label>
                      <input type="text" id="hasil" name="hasil" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="geser" class="form-label">Hasil Perhitungan :</label>
                        <input type="text" id="geser" name="geser" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="hasil_baru" class="form-label">Hasil Baru Perhitungan :</label>
                        <input type="text" id="hasil_baru" name="hasil_baru" class="form-control" required="">
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
    var url ="{{ url('petak_panah-store') }}";
  } 

  function hide(){
    $('#tambahModal').modal('hide');
  }
  function pindah(id){
    var url = "../petak_spoor/"+id;
    location.href=url;
  }
</script>
@endpush
