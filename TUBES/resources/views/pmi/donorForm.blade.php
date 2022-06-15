@extends('layout.app')
@section('content')
    <div class="container-fluid py-5 bg-red100 text-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h6>FORM DONOR DARAH</h6>
                    <hr>
                    <p class="text-left">*Mohon Diisi dengan Benar dan Lengkap</p>
                </div>
            </div>

            <form id="form">
                @csrf
                <input type="hidden" name="schedule_id" value="{{ $schedule_id }}">
                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">NAMA LENGKAP</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="name" name="name" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
