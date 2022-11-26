@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
    <div class="container">
        <p class="h3 text-end"> SELL Maintenance</p>
        <p class="h6 text-end"> <a onClick="add()" href="javascript:void(0)"> <i class="fa fa-edit opacity-10"></i> Input Rencana</a></p>
        <div class="co-12">
            <table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <td>No</td>
                        <td>Kode Resort</td>
                        <td>Nama Resort</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody class="bg-muted">
                    <?php $no=1;?>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->code_resorts}}</td>
                            <td>{{$data->name_resorts}}</td>
                            <td><a href="{{url('petak/'.$data->id)}}"><i class="fa fa-circle-info  text-dark opacity-10"></i></a> <a href="#" onclick="edit('{{$data->id}}','{{$data->code_resorts}}','{{$data->name_resorts}}')"><i class="fa fa-edit  text-success opacity-10"></i></a> <a href="#" onclick="del('{{$data->id}}')"><i class="fa fa-trash  text-danger opacity-10"></i></td></a>
                        </tr>
                        <?php $no++;?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form id="KaiForm" >
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
                      <label for="code_resorts" class="form-label">Kode Resort :</label>
                      <input type="text" id="code_resorts" name="code_resorts" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="name_resorts" class="form-label">Nama Resort :</label>
                        <input type="text" id="name_resorts" name="name_resorts" class="form-control" required="">
                      </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hide()">Close</a>
              <button type="button" class="btn btn-primary" id="btnSave">Save changes</button>
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
    $('#KaiTitle').html("Tambah Rencana");
    $('#tambahModal').modal('show');
    $('#id').val('');
    var url ="{{ url('resort-store') }}";
  }  
  var url ="{{ url('resort-store') }}";
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    function edit(id, code, name){
      $('#KaiTitle').html("Ubah Rencana");
      $('#tambahModal').modal('show');
      $('#id').val(id);
      $('#code_resorts').val(code);
      $('#name_resorts').val(name);
      var url ="{{ url('resort-store') }}";
    }  
    function del(id) {  
      var url ="{{ url('resort-destroy') }}";
      $('#id').val(id);
    }

  function hide(){
    $('#tambahModal').modal('hide');
  }
  $("#btnSave").click(function(e){
      e.preventDefault();
      var code_resorts=$('#code_resorts').val();
      var name_resorts=$('#name_resorts').val();
      var id=$('#id').val();
      $.ajax({
         type:'POST',
         url:url,
         data: {id:id,name_resorts:name_resorts,code_resorts:code_resorts},
         success:function(data){
          console.log(data);
          $("#tambahModal").modal('hide');
          $("#alert").toggleClass('show');
          $("#alert_body").html(data.messages);
          $("#alert_title").html(data.title);
           setTimeout(() => {
            location.reload();
           }, 2000);
          },
        error: function(data){
            console.log(data);
         }
      });
  
  });
</script>
@endpush
