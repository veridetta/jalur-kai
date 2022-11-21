@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.3/css/jquery.orgchart.css" integrity="sha512-ND0T4MpnjKii0jtWYOcBBwkS1WrkgDbRwaHwyi/Llx6ovEI5NEx9CxmuB8c95Lv9H/LZ3USXTYtTYkDh9fNmaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <p class="h3 text-end"> SELL Maintenance</p>
        <p class="h6 text-end"> <a href="#"> <i class="fa fa-edit opacity-10"></i> Input Rencana</a></p>
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
                    <tr>
                        <td>1</td>
                        <td>5.51.</td>
                        <td>UPD CONTOH</td>
                        <td><a href="#"> <i class="fa fa-circle-info opacity-10"></i></a> <a href="#"><i class="fa fa-trash  text-danger opacity-10"></i></td></a>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
<script>
    
</script>
@endpush
