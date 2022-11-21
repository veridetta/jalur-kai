@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.3/css/jquery.orgchart.css" integrity="sha512-ND0T4MpnjKii0jtWYOcBBwkS1WrkgDbRwaHwyi/Llx6ovEI5NEx9CxmuB8c95Lv9H/LZ3USXTYtTYkDh9fNmaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div class="col-12 row">
            <table class="table table-bordered table-responsive  justify-content-center ">
                <thead class="text-dark text-center" style="background-color: #FFA500 !important">
                    <tr>
                        <td colspan="2">Pertinggian</td>
                        <td rowspan="2" style="vertical-align: middle">Lebar Spoor</td>
                        <td rowspan="2" style="vertical-align: middle">Lebar Spoor Baru</td>
                    </tr>
                    <tr>
                        <td>Lama</td>
                        <td>Baru</td>
                    </tr>
                </thead>
                <tbody class="bg-light border-white">
                    @for ($i=0;$i<8;$i++)
                    <tr>
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
            <a href="#"> &larr; Halaman Sebelumnya</a> <a href="#" class="btn btn-primary">+ Data</a>
        </div>
    </div>
@endsection
@push('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
<script>
    
</script>
@endpush
