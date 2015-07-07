@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row" style="margin-top:20px; padding-bottom: 60px;margin-bottom: 100px;">
        <div class="table-responsive">
            <table id="datatable" border="1">
                <thead>
                  <tr>
                      <th rowspan="2">Management Data</th>
                      <th rowspan="2">No Agenda</th>
                      <th rowspan="2">Tarif Lama</th>
                      <th rowspan="2">Daya Lama</th>
                      <th rowspan="2">Tarif Baru</th>
                      <th rowspan="2">Daya Baru</th>
                      <th rowspan="2">ID Pelanggan</th>
                      <th rowspan="2">Nama Pelanggan</th>
                      <th rowspan="2">Alamat</th>
                      <th rowspan="2">Tanggal Bayar BP</th>
                      <th rowspan="2">Pengawas</th>
                      <th rowspan="2">Pelaksana</th>
                      <th rowspan="2">No SPK</th>
                      <th rowspan="2">Jenis Pekerjaan</th>
                      <th colspan="2">Koordinat Lokasi</th>
                      <th rowspan="2">SLA</th>
                      <th rowspan="2">Status Pekerjaan</th>
                      <th colspan="4">Kubikel</th>
                      <th colspan="6">Trafo</th>
                      <th colspan="4">PHBTR / Rak TR</th>
                      <th colspan="2">SKTM</th>
                      <th rowspan="2">SUTM</th>
                      <th rowspan="2">SKUTM</th>
                      <th colspan="1">S Core TM</th>
                      <th colspan="1">S Core TR</th>
                      <th colspan="1">NYFGBY</th>
                      <th colspan="1">JTR</th>
                      <th rowspan="2">Keterangan</th>
                  </tr>
                <tr>
                    <th>X</th>
                    <th>Y</th>
                    <th>LBS Man</th>
                    <th>LBS Mot</th>
                    <th>CBOG</th>
                    <th>PB</th>
                    <th>160OD</th>
                    <th>250OD</th>
                    <th>400OD</th>
                    <th>630OD</th>
                    <th>400ID</th>
                    <th>630ID</th>
                    <th>4 OD</th>
                    <th>4 ID</th>
                    <th>6 ID</th>
                    <th>8ID</th>
                    <th>3x300</th>
                    <th>3x240</th>
                    <th>1x35</th>
                    <th>1x240</th>
                    <th>4x95</th>
                    <th>3x70 + 50</th>

                </tr>
                </thead>
                    <tbody id="listing">
                    @foreach ($monitor as $field)
                        <?php
                        if(!empty($field)){
                            $hue = $field->id;
                            $ur = '/detail/'.$hue;
                        }
                        else{
                            $ur='/';
                        }
                        ?>

                    <tr class='clickableRow' id="row{{$field->id}}">
                        <td>
                            <?php $lala = $field->id;
                            $urls = '/delete/'.$lala;
                            ?>
                            <a class="btn" href="{{URL::to($urls)}}">Delete</a>
                            <?php $lala = $field->id;
                            $urlu = '/update/'.$lala;
                            ?>
                            <a class="btn" href="{{URL::to($urlu)}}">Edit</a>
                        </td>
                        <td id="center"> {{ $field->noagenda}} </td>
                        <td id="center"> {{ $field->tariflama}} </td>
                        <td id="center"> {{ $field->lamadaya }} </td>
                        <td id="center"> {{ $field->tarifbaru }} </td>
                        <td id="center"> {{ $field->dayabaru }} </td>
                        <td id="center"> {{ $field->idpelanggan }} </td>
                        <td id="center"> {{ $field->namapelanggan }} </td>
                        <td id="center"> {{ $field->alamat }} </td>
                        <td id="center"> {{ $field->tanggalbayarbp }} </td>
                        <td id="center"> {{ $field->pengawas }} </td>
                        <td id="center"> {{ $field->pelaksana }} </td>
                        <td id="center"> {{ $field->nospk }} </td>
                        <td id="center"> {{ $field->jenispekerjaan }} </td>
                        <td id="center"> {{ $field->koorx }} </td>
                        <td id="center"> {{ $field->koory }} </td>
                        <td id="center"> {{ $field->sla }} </td>
                        <td id="center"> {{ $field->statuspengerjaan }} </td>
                        <td id="center"> {{ $field->lbsman }} </td>
                        <td id="center"> {{ $field->lbsmot }} </td>
                        <td id="center"> {{ $field->cbog }} </td>
                        <td id="center"> {{ $field->pb }} </td>
                        <td id="center"> {{ $field->OD160 }} </td>
                        <td id="center"> {{ $field->OD250 }} </td>
                        <td id="center"> {{ $field->OD400 }} </td>
                        <td id="center"> {{ $field->OD630 }} </td>
                        <td id="center"> {{ $field->ID400 }} </td>
                        <td id="center"> {{ $field->ID630 }} </td>
                        <td id="center"> {{ $field->OD4 }} </td>
                        <td id="center"> {{ $field->ID4 }} </td>
                        <td id="center"> {{ $field->ID6 }} </td>
                        <td id="center"> {{ $field->ID8 }} </td>
                        <td id="center"> {{ $field->sktm300 }} </td>
                        <td id="center"> {{ $field->sktm240 }} </td>
                        <td id="center"> {{ $field->sutm }} </td>
                        <td id="center"> {{ $field->skutm }} </td>
                        <td id="center"> {{ $field->scoretm }} </td>
                        <td id="center"> {{ $field->scoretr }} </td>
                        <td id="center"> {{ $field->nyfgby }} </td>
                        <td id="center"> {{ $field->jtr }} </td>
                        <td id="center"> {{ $field->keterangan }} </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        <hr>
        <div class="row">
            <div class ="col-sm-5"><?php $urls ='/import' ?>
            <form method="POST" action="{{URL::to($urls)}}" accept-charset="UTF-8" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><label for="file" id="" class="">File</label> <input name="file" type="file" id="file">
            <input type="submit" value="Import"> </form>
        <!-- {{ Form::open(array('url'=>'/import','files'=>true)) }}

		{{ Form::label('file','File',array('id'=>'','class'=>'')) }}
		{{ Form::file('file','',array('id'=>'','class'=>'')) }}
		<br/>
		submit buttons
		{{ Form::submit('Import') }}

		{{ Form::close() }}-->
        </div><div class ="col-sm-6" style="margin-bottom: 100px;">

                <?php $url = '/create'; ?>
                <a class="btn" href="{{URL::to($url)}}">Tambah Baru</a>

                <?php $urlex = '/export'; ?>
                <a class="btn" href="{{URL::to($urlex)}}">Export</a>

            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    Something wrong with your file
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@if(!empty($ur))
<script >


$(function() {
$(".clickableRow").on("click", function() {
    var id = $(this).attr("id");
    id = id.substring(3);

location.href="{{URL('/detail')}}/"+id;
});
});</script>
@endif
@endsection