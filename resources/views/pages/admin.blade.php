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
    <div class="col-12">
        <div class="card-body ps-5">
            <a href="#" class="btn btn-primary" onclick="add()">+ Tambah admin</a>
        </div>
        <div class="card shadow-lg mx-4 card-profile-center">
            <div class="card-header  bg-orange text-white">
                <p class="card-title text-center h4">List Admin</p>
            </div>
            <div class="card-body p-3" >
                <div class="d-flex justify-self-center"style="min-height: 120px">
                   <table class="table table-responsive table-bordered">
                    <thead class="bg-warning text-white text-center">
                        <tr>
                            <td>No</td>
                            <td>Nama Depan</td>
                            <td>Nama Belakang</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Posisi</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="bg-muted">
                        <?php $no=1;?>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->firstname}}</td>
                            <td>{{$data->lastname}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->role}}</td>
                            <td class="text-center"><a href="#" class="btn btn-sm btn-success" onclick="edit({{$data->id}},'{{$data->username}}','{{$data->firstname}}','{{$data->lastname}}','{{$data->email}}','{{$data->role}}')"> <i class="fa fa-edit"></i></a> <a href="{{ url('admin-destroy') }}/{{$data->id}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php $no++;?>
                        @endforeach
                        
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form id="KaiForm" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
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
                      <label for="firstname" class="form-label">Nama Depan :</label>
                      <input type="text" id="firstname" name="firstname" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nama Belakang :</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" id="username" name="username" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="text" id="email" name="email" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label" id="pw">Password :</label>
                        <input type="text" id="password" name="password" class="form-control" required="">
                      </div>
                      <div class="mb-3">
                        <label for="role" class="form-label">Tingkat :</label>
                        <select id="role" name="role"class="form-control" required="">
                            <option>admin</option>
                            <option>super</option>
                        </select>
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
