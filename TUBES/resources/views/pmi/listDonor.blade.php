@extends('layout.app')
@section('content')
    <div class="container pb-5">
        <div class="row my-5 mx-1">
            <div class="col-12 bg-red10 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Schedule Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Golongan Darah</th>
                        <th scope="col">TB/BB</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Riwayat Penyakit</th>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
