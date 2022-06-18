@extends('layout.app')
@section('content')
    <div class="container">
        <div class="col-md-10 col-sm-12 bg-white mx-auto my-5">
            <form action="{{ url("user/{$user['id']}") }}" method="post">
                @csrf
                @method('put')
                <div class="row form-group p-3">
                    <div class="col-12 p-3">
                        <h6 class="text-center">Update User</h6>
                    </div>