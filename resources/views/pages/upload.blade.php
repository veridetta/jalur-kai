@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.3/css/jquery.orgchart.css" integrity="sha512-ND0T4MpnjKii0jtWYOcBBwkS1WrkgDbRwaHwyi/Llx6ovEI5NEx9CxmuB8c95Lv9H/LZ3USXTYtTYkDh9fNmaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .node .content {
            min-height: 39px !important;
            min-width: 239px !important;
        }
        .node .title{
            min-width: 239px !important;
        }
        .adj{
            width: 100% !important;
        }
        .bg-orange{
            background-color: #FFA500 !important
        }
    </style>
    <div id="content" class="container mt-5">
        <p class="h3 text-end md-2"> SELL Maintenance</p>
    </div>
    <div class="d-flex justify-content-center">
      
    <div class="col-7">
      <div class="card">
        <div class="card-header">
          <h5 class="modal-title" id="KaiTitle">Ubah Bagan Organisasi</h5>
        </div>
          <div class="card-body ps-5">
            <form id="KaiForm" action="{{ route('orgz') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <div class="input_wrapper">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="firstname" class="form-label">Pilih gambar :</label>
                    <input type="file" id="logo" name="logo" class="form-control" required="">
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary">Upload</button>
          </div>
      </div>
    </div>
    </div>
    
@endsection
@push('js')
<script>
    function add(){
    $('#KaiForm').trigger("reset");
    $('#KaiTitle').html("Tambah Admin");
    $('#tambahModal').modal('show');
    $('#pw').html('Password :');
    $('#id').val('');
  } 
  function edit(id, username, firstname, lastname, email, role){
    $('#KaiForm').trigger("reset");
    $('#KaiTitle').html("Ubah Admin");
    $('#tambahModal').modal('show');
    $('#id').val(id);
    $('#username').val(username);
    $('#firstname').val(firstname);
    $('#lastname').val(lastname);
    $('#email').val(email);
    $('#role').val(role);
    $("#pw").html('Password : <small class="text-muted">kosongkan jika tidak ingin ubah password</small>')
  } 
  function hide(){
    $('#tambahModal').modal('hide');
  }
</script>
@endpush
