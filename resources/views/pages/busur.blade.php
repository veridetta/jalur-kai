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
                <tbody class="bg-light border-white">
                    @for ($i=0;$i<8;$i++)
                    <tr>
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
        <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-primary">+ Data</a> <a href="#">Halaman Selanjutnya &#8594</a>
        </div>
    </div>
@endsection
@push('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
<script>
    
</script>
@endpush
