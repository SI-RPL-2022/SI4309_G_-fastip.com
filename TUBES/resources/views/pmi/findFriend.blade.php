@extends('layout.app')
@section('content')
    <div class="container pb-5">
        <div class="row my-5 mx-1">
            <div class="col-12 bg-red10 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Golongan Darah</th>
                        @if(auth()->check() and auth()->user()->isAdmin())
                            <th scope="col">Action</th>
                        @endif
                    </tr>
                    </thead>
