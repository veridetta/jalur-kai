@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbarkai')
    <main class="main-content  mt-0 pt-8" style="background-image:url({{url('/img/kai/bg-image.png')}})">
        <section>
            <div class="page-header">
                <div class="col-12">
                    <div class="row justify-content-end justify-content-end" style="background-image:url({{url('/img/kai/hero.png')}});min-height:100vh;background-position-x: left;background-size: 53vw;background-repeat:no-repeat">
                        <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column mx-lg-0 mx-auto align-self-center">
                            <div class="row col-10">
                                <div class="justify-content-center">
                                    <div class="card-plain">
                                        <div class="card-header text-center" style="background:none;">
                                            <h4 class="font-weight-bolder text-center">Tambah Akun</h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-center">Tambahkan akun admin baru</p>
                                            <form method="POST" action="{{ route('register.perform') }}">
                                                @csrf
                                                <div class="flex flex-col mb-3">
                                                    <input type="text" name="name" class="form-control" placeholder="name" aria-label="Nama Lengkap" value="{{ old('name') }}" placeholder="Nama Lengkap">
                                                    @error('name') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                                </div>
                                                <div class="flex flex-col mb-3">
                                                    <input type="email" name="email" class="form-control"aria-label="Email" value="{{ old('email') }}"  placeholder="E-mail">
                                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                                </div>
                                                <div class="flex flex-col mb-3">
                                                    <input type="text" name="npwp" class="form-control" placeholder="NPWP" aria-label="NPWP" value="{{ old('npwp') }}"  >
                                                    @error('npwp') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                                </div>
                                                <div class="flex flex-col mb-3">
                                                    <div class="input-group">
                                                        <input type="password" name="password" class="form-control" placeholder="Kata sandi" aria-label="Kata sandi">
                                                    @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">&nbsp;<i class="fa fa-eye"></i></span>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col mb-3">
                                                    <div class="input-group">
                                                        <input type="password" name="c_password" class="form-control" placeholder="Konfirmasi kata sandi" aria-label="Kata sandi">
                                                    @error('c_password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">&nbsp;<i class="fa fa-eye"></i></span>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary w-100 my-4 mb-2">Tambah Admin</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layouts.footers.guest.footer')
@endsection
