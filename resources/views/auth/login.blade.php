@extends('auth.index')

@section('auth')
<div class="position-absolute top-50 start-50 translate-middle">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="/login" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="number" class="form-control @error('nik') is-invalid @enderror formlogin" id="floatingInput" placeholder="28282828" name="nik">
            <label for="floatingInput">NIK</label>
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" class="form-control @error('fullname') is-invalid @enderror formlogin" id="floatingPassword" placeholder="text" name="fullname">
            <label for="floatingPassword">Nama Lengkap</label>
            @error('fullname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="/register" class="btn">Saya Pengguna Baru</a>
            </div>
            <div class="col text-end">
                <button class="btn">Masuk</button>
            </div>
        </div>
    </form>
</div>
@endsection
