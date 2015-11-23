@extends('layouts.default')

@section('content')
    <div class="row" style="margin-top:20px; padding-left:60px; padding-right:60px;">
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

                @endforeach
        <h1> Total </h1>
        <hr>
        <div class="table-responsive">
            <table id="infototal" border="1" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Management Data</th>
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
                </tr>
                </thead>
                <tbody id="listing">
                <tr id="e">
                    <td id="center"><b>Total Belum</b></td>
                    <td id="center">{{$blbsman}}</td>
                    <td id="center">{{$blbsmot}}</td>
                    <td id="center">{{$bcbog}}</td>
                    <td id="center">{{$bpb}}</td>
                    <td id="center">{{$bOD160}}</td>
                    <td id="center">{{$bOD250}}</td>
                    <td id="center">{{$bOD400}}</td>
                    <td id="center">{{$bOD630}}</td>
                    <td id="center">{{$bID400}}</td>
                    <td id="center">{{$bID630}}</td>
                    <td id="center">{{$bOD4}}</td>
                    <td id="center">{{$bID4}}</td>
                    <td id="center">{{$bID6}}</td>
                    <td id="center">{{$bID8}}</td>
                    <td id="center">{{$bsktm300}}</td>
                    <td id="center">{{$bsktm240}}</td>
                    <td id="center">{{$bsutm}}</td>
                    <td id="center">{{$bskutm}}</td>
                    <td id="center">{{$bscoretm}}</td>
                    <td id="center">{{$bscoretr}}</td>
                    <td id="center">{{$bnyfgby}}</td>
                    <td id="center">{{$bjtr}}</td>
                </tr>
                <tr id="e1">
                    <td id="center"><b>Total Sudah</b></td>
                    <td id="center">{{$slbsman}}</td>
                    <td id="center">{{$slbsmot}}</td>
                    <td id="center">{{$scbog}}</td>
                    <td id="center">{{$spb}}</td>
                    <td id="center">{{$sOD160}}</td>
                    <td id="center">{{$sOD250}}</td>
                    <td id="center">{{$sOD400}}</td>
                    <td id="center">{{$sOD630}}</td>
                    <td id="center">{{$sID400}}</td>
                    <td id="center">{{$sID630}}</td>
                    <td id="center">{{$sOD4}}</td>
                    <td id="center">{{$sID4}}</td>
                    <td id="center">{{$sID6}}</td>
                    <td id="center">{{$sID8}}</td>
                    <td id="center">{{$ssktm300}}</td>
                    <td id="center">{{$ssktm240}}</td>
                    <td id="center">{{$ssutm}}</td>
                    <td id="center">{{$sskutm}}</td>
                    <td id="center">{{$sscoretm}}</td>
                    <td id="center">{{$sscoretr}}</td>
                    <td id="center">{{$snyfgby}}</td>
                    <td id="center">{{$sjtr}}</td>
                </tr>
                <tr id="e2">
                    <td id="center"><b>Total</b></td>
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
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

