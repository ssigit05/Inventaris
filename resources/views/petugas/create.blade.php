@extends('layouts.main',['title'=> 'Tambah Petugas'])

@section('content-header')
<div class="container-fluid mb-2">
    <h1> <i class="fas fa-user-friends"></i>Petugas</h1>
</div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-4">
        <form class="card card-primary" action="{{ route('petugas.store')}}" method="post">
            <div class="card-header">
                <h5 class="card-title">+ Tambah</h5>
            </div>
            <div class="card-body">
               <x-input label="Nama Petugas" name="nama_petugas" placeholder="Nama Petugas"/>
               <x-input label="Username" name="username" placeholder="Username"/>
               <x-input label="Password" name="password" placeholder="Password" type="password"/>
               <x-input label="Password Confirmation" name="password_confirmation" placeholder="Password Confirmation" type="password"/>
            </div>
            <div class="card-footer text-right">
                <x-btn-simpan/>
            </div>
        </form>
    </div>
</div>

@endsection

