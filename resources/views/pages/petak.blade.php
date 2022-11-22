@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.3/css/jquery.orgchart.css" integrity="sha512-ND0T4MpnjKii0jtWYOcBBwkS1WrkgDbRwaHwyi/Llx6ovEI5NEx9CxmuB8c95Lv9H/LZ3USXTYtTYkDh9fNmaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <p class="h3 text-end md-2"> SELL Maintenance</p>
        <p class="h2 text-center mt-2 md-5"> {{$data->name_resorts}}</p>
        <p class="h6 ">Daftar Petak Jalan</p>
        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
        <div class="col-12 row">
            @foreach ($petaks as $petak)
            <div class="col-6 pe-4 opacity-8 mb-3" style="cursor: pointer;" onclick="pindah({{$petak->id}})">
                <div class="col-12 bg-gradient-success height-200 row ">
                    <div class="my-auto text-center">
                        <p class="h5 text-center text-white">{{$petak->desc}}</p>
                        <small class="text-white">Klik untuk detail</small>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-6 pe-4 opacity-8 mb-3" style="cursor: pointer;"  onclick="add()">
                <div class="col-12 bg-gradient-danger height-200 row ">
                    <p class="h5 text-center my-auto text-white" >+ Tambah Lokasi</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form id="KaiForm" action="{{ route('petak.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              <input type="hidden" name="id" id="id" value="" />
              <input type="hidden" name="resorts_id" id="resorts_id" value="{{$data->id}}" />
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
                      <label for="desc" class="form-label">Nama Lokasi :</label>
                      <input type="text" id="desc" name="desc" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar :</label>
                        <input type="file" id="image" name="image" class="form-control" placeholder="TTD" required="">
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
    $('#KaiTitle').html("Tambah Petak");
    $('#tambahModal').modal('show');
    $('#id').val('');
    var url ="{{ url('petak-store') }}";
  } 

  function hide(){
    $('#tambahModal').modal('hide');
  }

  function pindah(id){
    var url = "../petak_busur/"+id;
    location.href=url;
  }
</script>
@endpush
