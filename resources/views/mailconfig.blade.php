@extends('layouts.default')

@section('content')
    <div class="col-md-10">
        <div>
            <div class="col-md-12">
                <h2>Mail Configuration</h2>
            </div><?php $urls ='/mailconfig/edit' ?>
            <form action="{{URL::to($urls)}}" method="post">
                <div class="col-md-12">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">MAIL DRIVER</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_DRIVER" type="text" class="form-control form" id="noagenda" value="{{$row['driver']}}"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">MAIL HOST</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_HOST" type="text" class="form-control form" id="noagenda" value="{{$row['host']}}"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">MAIL PORT</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_PORT" type="text" class="form-control form" id="noagenda" value="{{$row['port']}}"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">ALAMAT PENGIRIM</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_ADDRESS" type="text" class="form-control form" id="noagenda" value="{{$row['from']['address']}}"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">PASSWORD</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_PASSWORD" type="password" class="form-control form" id="noagenda" value="{{$row['password']}}"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">NAMA</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_NAME" type="text" class="form-control form" id="noagenda" value="{{$row['from']['name']}}"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">ENKRIPSI</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_ENCRYPTION" type="text" class="form-control form" id="noagenda" value="{{$row['encryption']}}"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">ALAMAT PENERIMA</label></div>
                            <div class="col-sm-8">
                                <input name="MAIL_TO" type="text" class="form-control form" id="noagenda" value="{{$row['to']}}"></div>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="col-md-12 col-sm-8 add-button" style="margin-bottom: 10px;">
                        <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-user-plus"></i> Simpan</button>
                    </div>
                </div>
            </form>
            <h7>Catatan: beberapa mail service provider membutuhkan konfigurasi tambahan untuk menjadi pengirim, contohnya gmail harus mengaktifkan less secure apps permission</h7>
        </div>
    </div>
@endsection
