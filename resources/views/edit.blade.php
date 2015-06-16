
    <div class="col-md-10">
        <div>
            <div class="col-md-12">
                <h2>Tambah Data</h2>
            </div>
            <?php $idpelanggan = $row->idpelanggan; 
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
                            <label for="noagenda">No Agenda</label>
                            <input name="noagenda" type="text" class="form-control" id="noagenda" value="{{$row->noagenda}}">
                        </div>
                        <div class="form-group">
                            <label for="tariflama">Tarif Lama</label>
                            <input name="tariflama" type="text" class="form-control" id="tariflama" value="{{$row->tariflama}}">
                        </div>
                        <div class="form-group">
                            <label for="lamadaya">Daya Lama</label>
                            <input name="lamadaya" type="text" class="form-control" id="lamadaya" value="{{$row->lamadaya}}">
                        </div>
                        <div class="form-group">
                            <label for="tarifbaru">Tarif Baru</label>
                            <input name="tarifbaru" type="text" class="form-control" id="tarifbaru" value="{{$row->tarifbaru}}">
                        </div>
                        <div class="form-group">
                            <label for="dayabaru">Daya Baru</label>
                            <input name="dayabaru" type="text" class="form-control" id="dayabaru" value="{{$row->dayabaru}}">
                        </div>
                        <div class="form-group">
                            <label for="idpelanggan">ID Pelanggan</label>
                            <input name="idpelanggan" type="text" class="form-control" id="idpelanggan" value="{{$row->idpelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="namapelanggan">Nama Pelanggan</label>
                            <input name="namapelanggan" type="text" class="form-control" id="namapelanggan" value="{{$row->namapelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="alamat" value="{{$row->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="tanggalbayarbp">Tanggal Bayar BP</label>
                            <input name="tanggalbayarbp" type="text" class="form-control" id="tanggalbayarbp" value="{{$row->tanggalbayarbp}}">
                        </div>
                        <div class="form-group">
                            <label for="pengawas">Pengawas</label>
                            <input name="pengawas" type="text" class="form-control" id="pengawas" value="{{$row->pengawas}}">
                        </div>
                        <div class="form-group">
                            <label for="pelaksana">Pelaksana</label>
                            <input name="pelaksana" type="text" class="form-control" id="pelaksana" value="{{$row->pelaksana}}">
                        </div>
                        <div class="form-group">
                            <label for="nospk">No SPK</label>
                            <input name="nospk" type="text" class="form-control" id="nospk" value="{{$row->nospk}}">
                        </div>
                        <div class="form-group">
                            <label for="jenispekerjaan">Jenis Pekerjaan</label>
                            <input name="jenispekerjaan" type="text" class="form-control" id="jenispekerjaan" value="{{$row->jenispekerjaan}}">
                        </div>
                        <div class="form-group">
                            <label for="koorx">Koordiat X</label>
                            <input name="koorx" type="text" class="form-control" id="koorx" value="{{$row->koorx}}">
                        </div>
                        <div class="form-group">
                            <label for="koory">Koordiat Y</label>
                            <input name="koory" type="text" class="form-control" id="koory" value="{{$row->koory}}">
                        </div>
                        <div class="form-group">
                            <label for="sla">SLA</label>
                            <input name="sla" type="text" class="form-control" id="sla" value="{{$row->sla}}">
                        </div>
                        <div class="form-group">
                            <label for="statuspengerjaan">Status Pekerjaan</label>
                            <input name="statuspengerjaan" type="text" class="form-control" id="statuspengerjaan" value="{{$row->statuspengerjaan}}">
                        </div>
                        <div class="form-group">
                            <label for="lbsman">LBS Man</label>
                            <input name="lbsman" type="text" class="form-control" id="lbsman" value="{{$row->lbsman}}">
                        </div>
                        <div class="form-group">
                            <label for="lbsmot">LBS Mot</label>
                            <input name="lbsmot" type="text" class="form-control" id="lbsmot" value="{{$row->lbsmot}}">
                        </div>
                        <div class="form-group">
                            <label for="cbog">CBOG</label>
                            <input name="cbog" type="text" class="form-control" id="cbog" value="{{$row->cbog}}">
                        </div>
                        <div class="form-group">
                            <label for="pb">PB</label>
                            <input name="pb" type="text" class="form-control" id="pb" value="{{$row->pb}}">
                        </div>
                        <div class="form-group">
                            <label for="160OD">160 OD</label>
                            <input name="160OD" type="text" class="form-control" id="160OD" value="{{$row->OD160}}">
                        </div>
                        <div class="form-group">
                            <label for="250OD">250 OD</label>
                            <input name="250OD" type="text" class="form-control" id="250OD" value="{{$row->OD250}}">
                        </div>
                        <div class="form-group">
                            <label for="400OD">400 OD</label>
                            <input name="400OD" type="text" class="form-control" id="400OD" value="{{$row->OD400}}">
                        </div>
                        <div class="form-group">
                            <label for="630OD">630 OD</label>
                            <input name="630OD" type="text" class="form-control" id="630OD" value="{{$row->OD630}}">
                        </div>
                        <div class="form-group">
                            <label for="400ID">400 ID</label>
                            <input name="400ID" type="text" class="form-control" id="400ID" value="{{$row->ID400}}">
                        </div>
                        <div class="form-group">
                            <label for="630ID">630 ID</label>
                            <input name="630ID" type="text" class="form-control" id="630ID" value="{{$row->ID630}}">
                        </div>
                        <div class="form-group">
                            <label for="4OD">4 OD</label>
                            <input name="4OD" type="text" class="form-control" id="4OD" value="{{$row->OD4}}">
                        </div>
                        <div class="form-group">
                            <label for="4ID">4 ID</label>
                            <input name="4ID" type="text" class="form-control" id="4ID" value="{{$row->ID4}}">
                        </div>
                        <div class="form-group">
                            <label for="6ID">6 ID</label>
                            <input name="6ID" type="text" class="form-control" id="6ID" value="{{$row->ID6}}">
                        </div>
                        <div class="form-group">
                            <label for="8ID">8 ID</label>
                            <input name="8ID" type="text" class="form-control" id="8ID" value="{{$row->ID8}}">
                        </div>
                        <div class="form-group">
                            <label for="sktm300">SKTM 3x300</label>
                            <input name="sktm300" type="text" class="form-control" id="sktm300" value="{{$row->sktm300}}">
                        </div>
                        <div class="form-group">
                            <label for="sktm240">SKTM 3x240</label>
                            <input name="sktm240" type="text" class="form-control" id="sktm240" value="{{$row->sktm240}}">
                        </div>
                        <div class="form-group">
                            <label for="sutm">SUTM</label>
                            <input name="sutm" type="text" class="form-control" id="sutm" value="{{$row->sutm}}">
                        </div>
                        <div class="form-group">
                            <label for="skutm">SKUTM</label>
                            <input name="skutm" type="text" class="form-control" id="skutm" value="{{$row->skutm}}">
                        </div>
                        <div class="form-group">
                            <label for="scoretm">S Core TM</label>
                            <input name="scoretm" type="text" class="form-control" id="scoretm" value="{{$row->scoretm}}">
                        </div>
                        <div class="form-group">
                            <label for="scoretr">S Core TR</label>
                            <input name="scoretr" type="text" class="form-control" id="scoretr" value="{{$row->scoretr}}">
                        </div>
                        <div class="form-group">
                            <label for="nyfgby">NYFGBY</label>
                            <input name="nyfgby" type="text" class="form-control" id="nyfgby" value="{{$row->nyfgby}}">
                        </div>
                        <div class="form-group">
                            <label for="jtr">JTR</label>
                            <input name="jtr" type="text" class="form-control" id="jtr" value="{{$row->jtr}}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input name="keterangan" type="text" class="form-control" id="keterangan" value="{{$row->keterangan}}">
                        </div>

                    </div>

                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="col-md-12 col-sm-12 add-button">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-user-plus"></i> Tambahkan Pengguna</button>
                </div>
            </form>
        </div>
    </div>