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

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">JENIS KELAMIN</label>
                    </div>
                    <div class="col-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input"
                                   value="male" checked>
                            <label class="custom-control-label" for="customRadioInline1">LAKI-LAKI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input"
                                   value="female">
                            <label class="custom-control-label" for="customRadioInline2">PEREMPUAN</label>
                        </div>
                        @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">TEMPAT TANGGAL LAHIR</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="dob" name="dob" required>
                            @error('dob')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">GOLONGAN DARAH</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <select class="form-control" id="bloodType" name="blood_type" required>
                                <option>A</option>
                                <option>AB</option>
                                <option>B</option>
                                <option>O</option>
                            </select>
                            @error('blood_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">BERAT BADAN</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="number" class="form-control" id="weight" name="weight" required>
                            @error('weight')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>