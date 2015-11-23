@extends('layouts.default')

@section('content')
    <div class="row" style="margin-top:20px; padding-left:60px; padding-right:60px;">
        <div class="table-responsive">
            <table id="datatable" border="1" cellspacing="0" width="100%">
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
                    <th>Kubikel LBS Man</th>
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

                $slbsman = 0;$slbsmot = 0; $sOD250=0;$sOD400 =0; $sOD630=0; $sID400=0;
                $scbog =0; $sID630=0; $sOD4=0; $sID4=0;$sID6=0;$sID8=0;$ssktm300=0;
                $spb =0;$ssktm240=0;$ssutm=0;$sskutm=0;$sscoretm=0;$sscoretr=0;$snyfgby=0;
                $sOD160 = 0;$sjtr=0;

                $blbsman = 0;$blbsmot = 0; $bOD250=0;$bOD400 =0; $bOD630=0; $bID400=0;
                $bcbog =0; $bID630=0; $bOD4=0; $bID4=0;$bID6=0;$bID8=0;$bsktm300=0;
                $bpb =0;$bsktm240=0;$bsutm=0;$bskutm=0;$bscoretm=0;$bscoretr=0;$bnyfgby=0;
                $bOD160 = 0;$bjtr=0;

                ?>
                @foreach ($monitor as $field)
                    <?php
                    if(!empty($field)){
                        if($field->s1 =='on'){ $lbsman+= $field->lbsman; $slbsman+= $field->lbsman; }else{ $lbsman+= $field->lbsman; $blbsman+= $field->lbsman;}
                        if($field->s2 =='on'){ $lbsmot += $field->lbsmot; $slbsmot += $field->lbsmot;}else{$lbsmot += $field->lbsmot;$blbsmot += $field->lbsmot; }
                        if($field->s3 =='on'){ $OD250+=$field->OD250;  $sOD250+=$field->OD250;}else{ $OD250+=$field->OD250; $bOD250+=$field->OD250; }
                        if($field->s4 =='on'){ $OD400 +=$field->OD400; $sOD400 +=$field->OD400;}else{ $OD400 +=$field->OD400; $bOD400 +=$field->OD400;}
                        if($field->s5 =='on'){  $OD630+=$field->OD630;  $sOD630+=$field->OD630;}else{  $OD630+=$field->OD630;  $bOD630+=$field->OD630;}
                        if($field->s6 =='on'){  $ID400+=$field->ID400;  $sID400+=$field->ID400;}else{  $ID400+=$field->ID400;  $bID400+=$field->ID400;}
                        if($field->s7 =='on'){ $cbog +=$field->cbog; $scbog +=$field->cbog;}else{$cbog +=$field->cbog;$bcbog +=$field->cbog; }
                        if($field->s8 =='on'){ $ID630+=$field->ID630;$sID630+=$field->ID630;}else{ $ID630+=$field->ID630;$bID630+=$field->ID630;}
                        if($field->s9 =='on'){ $OD4+=$field->OD4; $sOD4+=$field->OD4; }else{  $OD4+=$field->OD4; $bOD4+=$field->OD4;}
                        if($field->s10 =='on'){ $ID4+=$field->ID4;$sID4+=$field->ID4;}else{ $ID4+=$field->ID4;$bID4+=$field->ID4;}
                        if($field->s11 =='on'){ $ID6+=$field->ID6;$sID6+=$field->ID6;}else{ $ID6+=$field->ID6;$bID6+=$field->ID6;}
                        if($field->s12 =='on'){ $ID8+=$field->ID8;$sID8+=$field->ID8;}else{ $ID8+=$field->ID8;$bID8+=$field->ID8;}
                        if($field->s13 =='on'){ $sktm300+=$field->sktm300;$ssktm300+=$field->sktm300;}else{ $sktm300+=$field->sktm300;$bsktm300+=$field->sktm300;}
                        if($field->s14 =='on'){ $pb +=$field->pb;$spb +=$field->pb;}else{ $pb +=$field->pb;$bpb +=$field->pb;}
                        if($field->s15 =='on'){ $sktm240+=$field->sktm240;$ssktm240+=$field->sktm240;}else{ $sktm240+=$field->sktm240;$bsktm240+=$field->sktm240;}
                        if($field->s16 =='on'){ $sutm+=$field->sutm;$ssutm+=$field->sutm;}else{ $sutm+=$field->sutm;$bsutm+=$field->sutm;}
                        if($field->s17 =='on'){ $skutm+=$field->skutm;$sskutm+=$field->skutm;}else{ $skutm+=$field->skutm;$bskutm+=$field->skutm;}
                        if($field->s18 =='on'){ $scoretm+=$field->scoretm;$sscoretm+=$field->scoretm;}else{ $scoretm+=$field->scoretm;$bscoretm+=$field->scoretm;}
                        if($field->s19 =='on'){ $scoretr+=$field->scoretr;$sscoretr+=$field->scoretr;}else{ $scoretr+=$field->scoretr;$bscoretr+=$field->scoretr;}
                        if($field->s20 =='on'){ $nyfgby+=$field->nyfgby;$snyfgby+=$field->nyfgby;}else{ $nyfgby+=$field->nyfgby;$bnyfgby+=$field->nyfgby;}
                        if($field->s21 =='on'){ $OD160 += $field->OD160;$sOD160 += $field->OD160;}else{ $OD160 += $field->OD160;$bOD160 += $field->OD160;}
                        if($field->s22 =='on'){ $jtr+=$field->jtr;$sjtr+=$field->jtr;}else{ $jtr+=$field->jtr;$bjtr+=$field->jtr;}
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
                        <td id="center"> {{ $field->sla }} Hari</td>
                        <td id="center"> {{ $field->statuspengerjaan }} </td>
                        <td id="center" @if ($field->s1 =='on') class="green" @else class="red" @endif> {{ $field->lbsman }} </td>
                        <td id="center" @if ($field->s2 =='on') class="green" @else class="red" @endif> {{ $field->lbsmot }} </td>
                        <td id="center" @if ($field->s3 =='on') class="green" @else class="red" @endif> {{ $field->cbog }} </td>
                        <td id="center" @if ($field->s4 =='on') class="green" @else class="red" @endif> {{ $field->pb }} </td>
                        <td id="center" @if ($field->s5 =='on') class="green" @else class="red" @endif> {{ $field->OD160 }} </td>
                        <td id="center" @if ($field->s6 =='on') class="green" @else class="red" @endif> {{ $field->OD250 }} </td>
                        <td id="center" @if ($field->s7 =='on') class="green" @else class="red" @endif> {{ $field->OD400 }} </td>
                        <td id="center" @if ($field->s8 =='on') class="green" @else class="red" @endif> {{ $field->OD630 }} </td>
                        <td id="center" @if ($field->s9 =='on') class="green" @else class="red" @endif> {{ $field->ID400 }} </td>
                        <td id="center" @if ($field->s10 =='on') class="green" @else class="red" @endif> {{ $field->ID630 }} </td>
                        <td id="center" @if ($field->s11 =='on') class="green" @else class="red" @endif> {{ $field->OD4 }} </td>
                        <td id="center" @if ($field->s12 =='on') class="green" @else class="red" @endif> {{ $field->ID4 }} </td>
                        <td id="center" @if ($field->s13 =='on') class="green" @else class="red" @endif> {{ $field->ID6 }} </td>
                        <td id="center" @if ($field->s14 =='on') class="green" @else class="red" @endif> {{ $field->ID8 }} </td>
                        <td id="center" @if ($field->s15 =='on') class="green" @else class="red" @endif> {{ $field->sktm300 }} </td>
                        <td id="center" @if ($field->s16 =='on') class="green" @else class="red" @endif> {{ $field->sktm240 }} </td>
                        <td id="center" @if ($field->s17 =='on') class="green" @else class="red" @endif> {{ $field->sutm }} </td>
                        <td id="center" @if ($field->s18 =='on') class="green" @else class="red" @endif> {{ $field->skutm }} </td>
                        <td id="center" @if ($field->s19 =='on') class="green" @else class="red" @endif> {{ $field->scoretm }} </td>
                        <td id="center" @if ($field->s20 =='on') class="green" @else class="red" @endif> {{ $field->scoretr }} </td>
                        <td id="center" @if ($field->s21 =='on') class="green" @else class="red" @endif> {{ $field->nyfgby }} </td>
                        <td id="center" @if ($field->s22 =='on') class="green" @else class="red" @endif> {{ $field->jtr }} </td>
                        <td id="center"> {{ $field->keterangan }} </td>

                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>

    </div>
    <div style="padding-left:60px;padding-right:60px;"><hr>
        <div class="row" style="padding-left:60px;padding-right:60px;">
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
            </div><div class ="col-sm-6" style="margin-bottom: 100px; padding-left:60px;">

                <?php $url = '/create'; ?>
                <a class="btn" href="{{URL::to($url)}}">Tambah Baru</a>

                <?php $urlex = '/export'; ?>
                <a class="btn" href="{{URL::to($urlex)}}">Export</a>

            </div>
        </div>
        <div style="padding-left:60px;padding-right:60px;" class="col-md-6 col-sm-6 col-xs-6">
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
    </div>

@endsection

