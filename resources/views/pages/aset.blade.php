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
                <button class="btn btn-primary">Tambah</button>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i class="fa fa-search"></i></span>
                          </div>
                        <input type="text" name="search" id="search" placeholder="Cari Data"/>
                        <div class="input-group-append">
                            <button class="btn btn-success" name="btn_search">Cari</button>
                        </div>
                    </div>
            <table class="table table-bordered table-responsive  justify-content-center ">
                <thead class="bg-primary text-center" style="">
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
                    @for ($i=0;$i<8;$i++)
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    @endfor
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
