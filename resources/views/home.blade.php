@extends('layouts.index')

@section('main')
<div class="main mt-4" style="height: 100%">
    Selamat Datang {{ auth()->user()->fullname }} di Aplikasi Catatan Perjalanan ini
</div>
<div class="nav justify-content-end mt-3">
    <a class="btn" href="add">Isi Catatan Perjalanan</a>
</div>
@endsection
