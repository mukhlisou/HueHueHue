@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row" style="margin-top:20px; padding-bottom: 60px;margin-bottom: 100px;">
        <div class="table-responsive">
            <table id="datatable" border="1">
                <thead>
                  <tr>
                      <th>Management Data</th>
                      <th>No Agenda</th>
                      <th>Tarif Lama</th>
                      <th>Daya Lama</th>
                      <th>Tarif Baru</th>
                      <th>Daya Baru</th>
                      <th>ID Pelanggan</th>
                      <th>Nama Pelanggan</th>
                      <th>Alamat</th>
                      <th>Tanggal Bayar BP</th>
                      <th>Pengawas</th>
                      <th>Pelaksana</th>
                      <th>No SPK</th>
                      <th>Jenis Pekerjaan</th>
                      <th>Koordinat X</th>
                      <th>Koordinat Y</th>
                      <th>SLA</th>
                      <th>Status Pekerjaan</th>
                      <th>Kubikel<br>LBS Man</th>
                      <th>Kubikel<br>LBS Mot</th>
                      <th>Kubikel<br>CBOG</th>
                      <th>Kubikel<br>PB</th>
                      <th>Trafo<br>160OD</th>
                      <th>Trafo<br>250OD</th>
                      <th>Trafo<br>400OD</th>
                      <th>Trafo<br>630OD</th>
                      <th>Trafo<br>400ID</th>
                      <th>Trafo<br>630ID</th>
                      <th>PHBTR<br>4 OD</th>
                      <th>PHBTR<br>4 ID</th>
                      <th>PHBTR<br>6 ID</th>
                      <th>PHBTR<br>8ID</th>
                      <th>SKTM<br>3x300</th>
                      <th>SKTM<br>3x240</th>
                      <th>SUTM</th>
                      <th>SKUTM</th>
                      <th>S Core TM<br>1x35</th>
                      <th>S Core TR<br>1x2940</th>
                      <th>NYFGBY<br>4x5</th>
                      <th>JTR<br>3x70 +50</th>
                      <th>Keterangan</th>
                  </tr>
                </thead>
                    <tbody id="listing">
                    <?php
                    $lbsman = 0;
                            $lbsmot = 0; $OD250=0;$OD400 =0; $OD630=0; $ID400=0;
                            $cbog =0; $ID630=0; $OD4=0; $ID4=0;$ID6=0;$ID8=0;$sktm300=0;
                            $pb =0;$sktm240=0;$sutm=0;$skutm=0;$scoretm=0;$scoretr=0;$nyfgby=0;
                            $OD160 = 0;$jtr=0;

                    ?>
                    @foreach ($monitor as $field)
                        <?php
                        if(!empty($field)){
                            $lbsman+= $field->lbsman;
                            $lbsmot += $field->lbsmot; $OD250+=$field->OD250;$OD400 +=$field->OD400;
                            $OD630+=$field->OD630; $ID400+=$field->ID400;
                            $cbog +=$field->cbog; $ID630+=$field->ID630; $OD4+=$field->OD4; $ID4+=$field->ID4;
                            $ID6+=$field->ID6;$ID8+=$field->ID8;$sktm300+=$field->sktm300;
                            $pb +=$field->pb;$sktm240+=$field->sktm240;$sutm+=$field->sutm;$skutm+=$field->skutm;
                            $scoretm+=$field->scoretm;$scoretr+=$field->scoretr;$nyfgby+=$field->nyfgby;
                            $OD160 += $field->OD160;$jtr+=$field->jtr;
                        }
                        else{

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
                    <tr id="e">
                        <td id="center"><b>Total</b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td id="center">{{$lbsman}}</td>
                        <td id="center">{{$lbsmot}}</td>
                        <td id="center">{{$cbog}}</td>
                        <td id="center">{{$pb}}</td>
                        <td id="center">{{$OD160}}</td>
                        <td id="center">{{$OD250}}</td>
                        <td id="center">{{$OD400}}</td>
                        <td id="center">{{$OD630}}</td>
                        <td id="center">{{$ID400}}</td>
                        <td id="center">{{$ID630}}</td>
                        <td id="center">{{$OD4}}</td>
                        <td id="center">{{$ID4}}</td>
                        <td id="center">{{$ID6}}</td>
                        <td id="center">{{$ID8}}</td>
                        <td id="center">{{$sktm300}}</td>
                        <td id="center">{{$sktm240}}</td>
                        <td id="center">{{$sutm}}</td>
                        <td id="center">{{$skutm}}</td>
                        <td id="center">{{$scoretm}}</td>
                        <td id="center">{{$scoretr}}</td>
                        <td id="center">{{$nyfgby}}</td>
                        <td id="center">{{$jtr}}</td>
                        <td></td>
                    </tr>
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

                <?php $url = '/create'; echo $lbsman; ?>
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
@if(!empty($field))
<script >


$(function() {
$(".clickableRow").on("click", function() {
    var id = $(this).attr("id");
    if(id.length<3){

    }else{
        id = id.substring(3);
        location.href="{{URL('/detail')}}/"+id;
    }
});
});</script>
@endif
@endsection