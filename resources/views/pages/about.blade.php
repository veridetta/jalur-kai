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
        <div class="card shadow-lg mx-4 card-profile-center">
            <div class="card-header  bg-orange text-white">
                    <p class="card-title text-center">About</p>
                </div>
            <div class="card-body p-3" >
                <div class="d-flex justify-self-center"style="min-height: 120px">
                    <p class="text-center">SELL Maintenance merupakan suatu website yang digunakan untuk pencatatan data pemeriksaan jalur wesel dan lengkung pada rel Kereta Api Daerah Operasi 5 Purwokerto</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
