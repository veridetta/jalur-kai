@extends('layouts.app')

@section('content')
<div class="col-12">
    @include('layouts.navbars.guest.navbarkai')
</div>
    <main class="main-content  mt-0 pt-8" style="background-image:url({{url('/img/kai/bg-image.png')}})">
        <section>
            <div class="page-header">
                <div class="col-12">
                    <div class="row justify-content-end justify-content-end" style="background-image:url({{url('/img/kai/hero.png')}});min-height:100vh;background-position-x: left;background-size: 53vw;background-repeat:no-repeat">
                        <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column mx-lg-0 mx-auto align-self-center">
                            <div class="row col-10">
                                <div class="justify-content-center">
                                    <div class="card card-plain">
                                        <div class="card-header text-center" style="background:none;">
                                            <h4 class="font-weight-bolder text-center">Login</h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-center">Silahkan masuk untuk melanjutkan</p>
                                            <form role="form" method="POST" action="{{ route('login.perform') }}">
                                                @csrf
                                                @method('post')
                                                <div class="flex flex-col mb-3">
                                                    <input type="email" name="email" placeholder="Masukkan email" class="form-control form-control-lg" value="{{ old('email') ?? 'email' }}" aria-label="email">
                                                    @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                                </div>
                                                <div class="flex flex-col mb-3">
                                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukkan password" aria-label="Password" value="" >
                                                    @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                            <p class="mb-1 text-sm mx-auto">
                                                Lupa akun? 
                                                <a href="{{ route('reset-password') }}" class="text-danger text-gradient font-weight-bold">Klik disini!</a>
                                            </p>
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
@endsection
