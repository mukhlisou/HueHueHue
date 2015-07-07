@extends('layouts.default')

@section('content')
    <div class="col-md-10">
        <div>
            <div class="col-md-12">
                <h2>Detail Data</h2>
            </div><?php $idpelanggan = $row->idpelanggan;
            $urls ='/edit/'.$idpelanggan ?>
            <form action="{{URL::to($urls)}}" method="post">
                <div class="col-md-12">

                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <!--  <div class="form-group">
                             <label for="role">Role/Tipe Pengguna</label>
                             <select class="form-control" id="type">
                                 <option>user</option>
                                 <option>moderator</option>
                                 <option>admin</option>
                                 <option>free-rider</option>
                             </select>
                         </div> -->

                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="noagenda">No AgendaM </label></div>
                            <div class="col-sm-8">
                            <p>: {{$row->noagenda}}</p></div>
                               <!--  <input name="noagenda" type="text" class="form-control form" id="noagenda" value="{{$row->noagenda}}"></div> -->
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="tariflama">Tarif Lama</label></div>
                            <div class="col-sm-8">
                              <p>: {{$row->tariflama}}</p><!--   <input name="tariflama" type="text" class="form-control form" id="tariflama" value="{{$row->tariflama}}"></div>
                         --></div>
                            </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="lamadaya">Daya Lama</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->lamadaya}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="tarifbaru">Tarif Baru</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->tarifbaru}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="dayabaru">Daya Baru</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->dayabaru}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="idpelanggan">ID Pelanggan</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->idpelanggan}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="namapelanggan">Nama Pelanggan</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->namapelanggan}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="alamat">Alamat</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->alamat}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="tanggalbayarbp">Tanggal Bayar BP</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->tanggalbayar}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="pengawas">Pengawas</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->pengawas}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="pelaksana">Pelaksana</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->pelaksana}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="nospk">No SPK</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->nospk}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="jenispekerjaan">Jenis Pekerjaan</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->jenispekerjaan}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="koorx">Koordinat X</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->koorx}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="koory">Koordinat Y</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->koory}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="sla">SLA</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->sla}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="statuspengerjaan">Status Pekerjaan</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->statuspengerjaan}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="lbsman">LBS Man</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->lbsman}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="lbsmot">LBS Mot</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->lbsmot}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="cbog">CBOG</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->cbog}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="pb">PB</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->pb}}</p></div>
                        </div>


                        </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="160OD">160 OD</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->OD160}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="250OD">250 OD</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->OD250}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="400OD">400 OD</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->OD400}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="630OD">630 OD</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->OD630}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="400ID">400 ID</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->ID400}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="630ID">630 ID</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->ID630}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="4OD">4 OD</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->OD4}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="4ID">4 ID</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->ID4}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="6ID">6 ID</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->ID6}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="8ID">8 ID</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->ID8}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="sktm300">SKTM 3x300</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->sktm300}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="sktm240">SKTM 3x240</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->sktm240}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="sutm">SUTM</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->sutm}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="skutm">SKUTM</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->skutm}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="scoretm">S Core TM</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->scoretm}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="scoretr">S Core TR</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->scoretr}}</p></div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="nyfgby">NYFGBY</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->nyfgby}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="jtr">JTR</label></div>
                            <div class="col-sm-8">
                                <p>: {{$row->jtr}}</p></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="keterangan">Keterangan</label></div>
                            <div class="col-sm-8" style="margin-bottom: 100px">
                                <p>: {{$row->keterangan}}</p></div>
                        </div>
                        </div>
                    </div>
            </form>
        </div>
        <style>
          #map-canvas {
            width: 500px;
            height: 400px;
          }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
        var myCenter = new google.maps.LatLng(<?php echo $row->koorx; ?>, <?php echo $row->koory; ?>);
        var myZoom = 16;
        var marker;

        var x = <?php echo $row->koorx; ?>;
        var y = <?php echo $row->koory; ?>;
        if(x=="0" || y=="0"){
            myCenter = new google.maps.LatLng(6.1735, 106.8772);
            myZoom = 4;
            document.write('<div>koordinat tidak ditemukan</div>');
        }

        function initialize()
        {
            var mapProp = {
              center:myCenter,
              zoom:myZoom,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };
            var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);

            var marker=new google.maps.Marker({
              position:myCenter,
              });
            if(x=="0" || y=="0"){
            }else{
                marker.setMap(map);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <div id="map-canvas" style="margin-bottom: 100px;width:1024px;height:600px;"></div>

    </div>


@endsection
