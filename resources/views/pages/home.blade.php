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
    </style>
    <div class=" min-h-20 p-4 text-center" style="background-color: #FFA500 !important">
        <p class="h3 text-white"> Jalan Rel & Jembatan</p>
        <p class="h3 text-white"> DAOP 5 Purwokerto</p>
    </div>
    <div id="content" class="container mt-5">
        <p class="h5 text-center">STRUKTUR ORGANISASI KANTOR JALAN REL DAN JEMBATAN</p>
        <p class="h5 text-center"> DAOP 5 Purwokerto</p>
        <div id="chart-container" class="col-12 text-center">
            <img src="{{url('/images/bagan.png')}}" alt="" title="" class="w-80 img-responsive"/>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-6 p-5">
                <div class="card shadow-lg mx-4 card-profile-center">
                    <div class="card-header card-primary bg-primary text-white">
                        <p class="card-title text-center">Deskripsi Unit JJ</p>
                    </div>
                    <div class="card-body p-3">
                        <div class="row gx-4">
                            <div class="">
                                <p class="text-center">Unit Jalan rel dan jembatan adalah satuan organisasi daop/divre yang dipimpin oleh Manager yang bertanggung jawab langsung kepada EVP Daop, sesuai keputusan Direksi No. PER.U/KO.104/II/1/KA-2021 Tentang Perubahan organisasi dan tata laksana pada bagian jalan rel dan jembatan, dan bagian sintel, telekomunikasi, dan listrik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 p-5">
                <div class="card shadow-lg mx-4 card-profile-center">
                    <div class="card-header card-primary bg-primary text-white">
                        <p class="card-title text-center">Daftar Resort Unit JJ Daop 5 Purwokerto</p>
                    </div>
                    <div class="card-body p-3">
                        <div class="row gx-4">
                            <div class="">
                                <ol>
                                    <li>OPT RESOR JR 5.1. SLW</li>
                                    <li>OPT RESOR JR 5.2 PPK</li>
                                    <li>OPT RESOR JR 5.3. BMA</li>
                                    <li>OPT RESOR JR 5.4. LGK</li>
                                    <li>OPT RESOR JR 5.5. PWT</li>
                                    <li>OPT RESOR JR 5.6. KBS</li>
                                    <li>OPT RESOR JR 5.7. LN</li>
                                    <li>OPT RESOR JR 5.8. JRL</li>
                                    <li>OPT RESOR JR 5.9. CP</li>
                                    <li>OPT RESOR JR 5.10. KYA</li>
                                    <li>OPT RESOR JR 5.11. TBK</li>
                                    <li>OPT RESOR JR 5.12. GB</li>
                                    <li>OPT RESOR JR 5.13. KM</li>
                                    <li>OPT RESOR JR 5.13. KTA</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection
@push('js')
<script>
    /*
    $(function() {
        var datascource = {
        'name': 'MANAGER',
        'title': 'JOKO SANTOSA <br/> NIPP. 46268 ',
        'children': [
            { 'name': 'ASISTANT MANAGER PROGRAM', 'title': 'YUDHI WAHYUDI <br/> NIPP.45726',
            'children': [
                { 'name': 'PELAKSANA PROGRAM', 'title': 'OKY PUTU YUDHA <br/> NIPP.50532',
                'children': [
                    { 'name': 'PELAKSANA PROGRAM', 'title': 'SIGIT FEBRIYANTO ASKA <br/> NIPP.55623' }
                    ] }
                ]
            },
            { 'name': 'ASISTANT MANAGER KONSTRUKSI', 'title': 'MUHAMMAD ANSORI <br/> NIPP. 63799',
                'children': [
                    { 'name': 'PELAKSANA KONSTRUKSI', 'title': 'SLAMET JONIANTO <br/> NIPP. 55626' }
                ]
            },
            { 'name': 'ASISTANT MANAGER FASILITAS', 'title': 'SARIPUDIN BUDIAWAN <br/> NIPP. 46066',
                'children': [
                    { 'name': 'PELAKSANA FASILITAS', 'title': 'ANJAR SUBEKTI <br/> NIPP.55649' }
                ] 
            }
        ]
        };
        $('#chart-container').orgchart({
            'data' : datascource,
            'nodeContent': 'title'
        });
        $('.orgchart').addClass('adj');
    });
    */
</script>
@endpush
