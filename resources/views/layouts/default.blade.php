@extends('layouts.app')

@section('content')
    <div class="col-12">
        @include('layouts.navbars.guest.navbarkai')
    </div>
    <main class="main-content mt-0 pt-8"  style="background-image:url({{url('/img/kai/bg-image.png')}})">
        <section>
            <div class="page-header">
                <div class="col-12">
                    <div class="row justify-content-end justify-content-end" style="background-image:url({{url('/img/kai/hero.png')}});height:87vh;background-position-x: left;background-size: 53vw;background-repeat:no-repeat">
                        <div class="col-lg-5 col-xl-5 align-self-center text-center mr-3">
                            <div class="row col-10">
                                <div class="justify-content-center">
                                    <p class="h3 text-bold">Selamat Datang!</p>
                                    <p class="h6 text-bold text-center">Silahkan Pilih</p>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="p-1"><a href="{{ route('login') }}" class="btn btn-primary">Lengkung</a></div>
                                        <div class="p-1"><button class="btn btn-primary">Wesel</button></div>
                                    </div>
                                    <p class="h6 text-center text-bold">Jalan Rel dan Jembatan DAOP 5 Purwokerto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
