<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MonitorModel extends Model {

	//
	protected $fillable = ['id','noagenda','tariflama','lamadaya','tarifbaru','dayabaru','idpelanggan','namapelanggan','alamat',
						   'tanggalbayarbp','pengawas','pelaksana','nospk','jenispekerjaan','koorx','koory',
						   'sla','statuspengerjaan','lbsman','lbsmot','lbsmot','sbog','pb','OD160','OD250','OD400',
						   'OD630','ID400','ID630','OD4','ID4','ID6','ID8','sktm300','sktm240','sutm','skutm','scoretm',
						   'scoretr','nyfgby','jtr','keterangan'];

	protected $table = 'monitor';

	public $timestamps = false;
}
