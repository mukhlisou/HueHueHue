@extends('layouts.default')

@section('content')
    <div class="col-md-10">
        <div>
            <div class="col-md-12">
                <h2>Tambah Data</h2>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{URL::to('/create/add')}}" method="post">
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
                            <label for="noagenda">No Agenda</label></div>
                            <div class="col-sm-8">
                            <input name="noagenda" type="text" class="form-control form" id="noagenda"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="tariflama">Tarif Lama</label></div>
                            <div class="col-sm-8">
                            <input name="tariflama" type="text" class="form-control form" id="tariflama"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="lamadaya">Daya Lama</label></div>
                            <div class="col-sm-8">
                            <input name="lamadaya" type="text" class="form-control form" id="lamadaya"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="tarifbaru">Tarif Baru</label></div>
                            <div class="col-sm-8">
                            <input name="tarifbaru" type="text" class="form-control form" id="tarifbaru"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="dayabaru">Daya Baru</label></div>
                            <div class="col-sm-8">
                            <input name="dayabaru" type="text" class="form-control form" id="dayabaru"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="idpelanggan">ID Pelanggan</label></div>
                            <div class="col-sm-8">
                            <input name="idpelanggan" type="text" class="form-control form" id="idpelanggan"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="namapelanggan">Nama Pelanggan</label></div>
                            <div class="col-sm-8">
                            <input name="namapelanggan" type="text" class="form-control form" id="namapelanggan"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="alamat">Alamat</label></div>
                            <div class="col-sm-8">
                            <input name="alamat" type="text" class="form-control form" id="alamat"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="tanggalbayarbp">Tanggal Bayar BP</label></div>
                            <div class="col-sm-8">
                            <input name="tanggalbayarbp" type="text" class="form-control form" id="tanggalbayarbp"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="pengawas">Pengawas</label></div>
                            <div class="col-sm-8">
                            <input name="pengawas" type="text" class="form-control form" id="pengawas"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="pelaksana">Pelaksana</label></div>
                            <div class="col-sm-8">
                            <input name="pelaksana" type="text" class="form-control form" id="pelaksana"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="nospk">No SPK</label></div>
                            <div class="col-sm-8">
                            <input name="nospk" type="text" class="form-control form" id="nospk"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="jenispekerjaan">Jenis Pekerjaan</label></div>
                            <div class="col-sm-8">
                            <input name="jenispekerjaan" type="text" class="form-control form" id="jenispekerjaan"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="koorx">Koordiat X</label></div>
                            <div class="col-sm-8">
                            <input name="koorx" type="text" class="form-control form" id="koorx"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="koory">Koordiat Y</label></div>
                            <div class="col-sm-8">
                            <input name="koory" type="text" class="form-control form" id="koory"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="sla">SLA</label></div>
                            <div class="col-sm-8">
                            <select class="form-control form" id="sla" name="sla">
                                <option value="" selected="selected">Pilih SLA</option>
                                    <option value="5">5 Hari</option>
                                    <option value="15">15 Hari</option>
                                    <option value="40">40 Hari</option>
                                    <option value="75">75 Hari</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="statuspengerjaan">Status Pekerjaan</label></div>
                            <div class="col-sm-8">
                            <input name="statuspengerjaan" type="text" class="form-control form" id="statuspengerjaan"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="lbsman">LBS Man</label></div>
                            <div class="col-sm-8">
                            <input name="lbsman" type="number" class="form-control form" id="lbsman" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="lbsmot">LBS Mot</label></div>
                            <div class="col-sm-8">
                            <input name="lbsmot" type="number" class="form-control form" id="lbsmot" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="cbog">CBOG</label></div>
                            <div class="col-sm-8">
                            <input name="cbog" type="number" class="form-control form" id="cbog" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="pb">PB</label></div>
                            <div class="col-sm-8">
                            <input name="pb" type="number" class="form-control form" id="pb" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="160OD">160 OD</label></div>
                            <div class="col-sm-8">
                            <input name="160OD" type="number" class="form-control form" id="160OD" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="250OD">250 OD</label></div>
                            <div class="col-sm-8">
                            <input name="250OD" type="number" class="form-control form" id="250OD" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="400OD">400 OD</label></div>
                            <div class="col-sm-8">
                            <input name="400OD" type="number" class="form-control form" id="400OD" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="630OD">630 OD</label></div>
                            <div class="col-sm-8">
                            <input name="630OD" type="number" class="form-control form" id="630OD" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="400ID">400 ID</label></div>
                            <div class="col-sm-8">
                            <input name="400ID" type="number" class="form-control form" id="400ID" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="630ID">630 ID</label></div>
                            <div class="col-sm-8">
                            <input name="630ID" type="number" class="form-control form" id="630ID" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="4OD">4 OD</label></div>
                            <div class="col-sm-8">
                            <input name="4OD" type="number" class="form-control form" id="4OD" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="4ID">4 ID</label></div>
                            <div class="col-sm-8">
                            <input name="4ID" type="number" class="form-control form" id="4ID" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="6ID">6 ID</label></div>
                            <div class="col-sm-8">
                            <input name="6ID" type="number" class="form-control form" id="6ID" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="8ID">8 ID</label></div>
                            <div class="col-sm-8">
                            <input name="8ID" type="number" class="form-control form" id="8ID" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="sktm300">SKTM 3x300</label></div>
                            <div class="col-sm-8">
                            <input name="sktm300" type="number" class="form-control form" id="sktm300" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="sktm240">SKTM 3x240</label></div>
                            <div class="col-sm-8">
                            <input name="sktm240" type="number" class="form-control form" id="sktm240" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="sutm">SUTM</label></div>
                            <div class="col-sm-8">
                            <input name="sutm" type="number" class="form-control form" id="sutm" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="skutm">SKUTM</label></div>
                            <div class="col-sm-8">
                            <input name="skutm" type="number" class="form-control form" id="skutm" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="scoretm">S Core TM</label></div>
                            <div class="col-sm-8">
                            <input name="scoretm" type="number" class="form-control form" id="scoretm" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="scoretr">S Core TR</label></div>
                            <div class="col-sm-8">
                            <input name="scoretr" type="number" class="form-control form" id="scoretr" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="nyfgby">NYFGBY</label></div>
                            <div class="col-sm-8">
                            <input name="nyfgby" type="number" class="form-control form" id="nyfgby" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="jtr">JTR</label></div>
                            <div class="col-sm-8">
                            <input name="jtr" type="number" class="form-control form" id="jtr" value="0"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="keterangan">Keterangan</label></div>
                            <div class="col-sm-8">
                            <input name="keterangan" type="text" class="form-control form" id="keterangan"></div>
                        </div>
                        <div class="row">
                         </div>

                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="col-md-12 col-sm-8 add-button" style="margin-bottom: 100px;">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-user-plus"></i> Tambahkan Pengguna</button>
                </div>
            </form>
        </div>
        </div>
</div>
@endsection