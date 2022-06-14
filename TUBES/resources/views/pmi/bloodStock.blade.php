@extends('layout.app')
@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-5 text-center">
            <div class="card h-100">
                <div class="card-header bg-red100 text-light">
                    CARI STOK DARAH
                </div>
                <form action="" class="overflow-auto p-3">
                    <div class="card-body py-0 pt-3">
                        <div class="form-group text-left">
                            <label for="bloodType">Golongan Darah</label>
                            <select class="form-control" id="bloodType">
                                <option>A+</option>
                                <option>AB</option>
                                <option>B</option>
                                <option>O</option>
                            </select>
                        </div>
                        </div>
                    <div class="card-body py-0">
                        <div class="form-group text-left">
                            <label for="component">Komponen</label>
                            <select class="form-control" id="component">