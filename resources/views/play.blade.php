@extends('layouts.default')

@section('content')
    <div class="row" style="padding-top: 80px">
        <div class="col-md-12">
            <div class="centerBlock">
                <div class="col-md-3"></div>
                <div class="col-md-4" >
                    <a href="{{ URL::to('/nyala') }}">
                        <img src="{{ asset('/assets/nyala.png') }}" width = 100 px >
                        <h2 >Nyala</h2></a>
                </div>
                <div class="col-md-4">
                    <a href="{{ URL::to('/belum') }}">
                    <img src="{{ asset('/assets/belumnyala.png') }}" width = 100 px style="margin-left:50px;">
                    <h2>Belum Nyala</h2>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 80px">
        <div class="col-md-12">
            <div class="centerBlock">

                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <?php $urls ='/import' ?>
                    <form method="POST" action="{{URL::to($urls)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"><label for="file" id="" class="">Import</label> <input name="file" type="file" id="file">
                        <input type="submit" value="Import"> </form>
                    <!-- {{ Form::open(array('url'=>'/import','files'=>true)) }}

                    {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
                    {{ Form::file('file','',array('id'=>'','class'=>'')) }}
                            <br/>
                            submit buttons
                            {{ Form::submit('Import') }}

                    {{ Form::close() }}-->
                    <?php $urlex = '/import_template'; ?>
                    <a class="btn" href="{{URL::to($urlex)}}">Download Template</a>
                </div>
                <div class="col-md-1" ></div>
                    <div class="col-md-3" >
                    <a href="{{ URL::to('/create') }}">
                        <img src="{{ asset('/assets/tambahbaru.png') }}" width = 100 px >
                        <h2 >Tambah Baru</h2></a>
                </div>
                <div class="col-md-1" ></div>
                <div class="col-md-3" >
                    <a href="{{ URL::to('/export') }}">
                        <img src="{{ asset('/assets/belumnyala.png') }}" width = 100 px >
                        <h2>Export</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
