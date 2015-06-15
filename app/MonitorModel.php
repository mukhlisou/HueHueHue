<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MonitorModel extends Model {

	//
	protected $fillable = ['id','tanggalbayarbp','pengawas','pelaksana','nospk','jenispekerjaan','koorx','koory',
						   'sla','statuspengerjaan','lbsman','lbsmot','lbsmot','sbog','pb','160OD','250OD','400OD',
						   '630OD','400ID','630ID','4OD','4ID','6ID','8ID','sktm300','sktm240','sutm','skutm','scoretm',
						   'scoretr','nyfgby','jtr','keterangan'];

	protected $table = 'monitor';

	public $timestamps = false;
}
