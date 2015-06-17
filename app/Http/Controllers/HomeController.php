<?php namespace App\Http\Controllers;

use App\MonitorModel;
use Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	public function index()
	{
		$monitor = MonitorModel::all();

        return view('play', ['monitor' => $monitor]);
	
	}

	public function delete($id)
	{
		$row = MonitorModel::where('id','=',$id);
		$row->delete();
		$monitor = MonitorModel::all();
		return redirect()->back();
	
	}
		public function update($id)
	{
		$row = MonitorModel::where('id','=',$id)->first();
		return view('edit', ['row' => $row]);
	
	}
	public function create(){
		return view('create');
	}

	public function add()
	{
		$data = new MonitorModel;

		$data->noagenda = Input::get('noagenda');
		$data->tariflama = Input::get('tariflama');
		$data->lamadaya = Input::get('lamadaya');
		$data->tarifbaru = Input::get('tarifbaru');
		$data->dayabaru = Input::get('dayabaru');
		$data->idpelanggan = Input::get('idpelanggan');
		$data->namapelanggan = Input::get('namapelanggan');
		$data->alamat = Input::get('alamat');
		$data->tanggalbayarbp = Input::get('tanggalbayarbp');
		$data->pengawas = Input::get('pengawas');
		$data->pelaksana = Input::get('pelaksana');
		$data->nospk = Input::get('nospk');
		$data->jenispekerjaan = Input::get('jenispekerjaan');
		$data->koorx = Input::get('koorx');
		$data->koory = Input::get('koory');
		$data->sla = Input::get('sla');
		$data->statuspengerjaan = Input::get('statuspengerjaan');
		$data->lbsman = Input::get('lbsman');
		$data->lbsmot = Input::get('lbsmot');
		$data->cbog = Input::get('cbog');
		$data->pb = Input::get('pb');
		$data->OD160 = Input::get('160OD');
		$data->OD250 = Input::get('250OD');
		$data->OD400 = Input::get('400OD');
		$data->OD630 = Input::get('630OD');
		$data->ID400 = Input::get('400ID');
		$data->ID630 = Input::get('630ID');
		$data->OD4 = Input::get('4OD');
		$data->ID4 = Input::get('4ID');
		$data->ID6= Input::get('6ID');
		$data->ID8 = Input::get('8ID');
		$data->sktm300 = Input::get('sktm300');
		$data->sktm240 = Input::get('sktm240');
		$data->sutm = Input::get('sutm');
		$data->skutm = Input::get('skutm');
		$data->scoretm = Input::get('scoretm');
		$data->scoretr = Input::get('scoretr');
		$data->nyfgby = Input::get('nyfgby');
		$data->jtr = Input::get('jtr');
		$data->keterangan = Input::get('keterangan');

		$data->save();

		return redirect('/');
	}

	public function edit($idpelanggan)
	{
		$data = MonitorModel::where('idpelanggan',$idpelanggan)->first();
		$data->noagenda = Input::get('noagenda');
		$data->tariflama = Input::get('tariflama');
		$data->lamadaya = Input::get('lamadaya');
		$data->tarifbaru = Input::get('tarifbaru');
		$data->dayabaru = Input::get('dayabaru');
		$data->idpelanggan = Input::get('idpelanggan');
		$data->namapelanggan = Input::get('namapelanggan');
		$data->alamat = Input::get('alamat');
		$data->tanggalbayarbp = Input::get('tanggalbayarbp');
		$data->pengawas = Input::get('pengawas');
		$data->pelaksana = Input::get('pelaksana');
		$data->nospk = Input::get('nospk');
		$data->jenispekerjaan = Input::get('jenispekerjaan');
		$data->koorx = Input::get('koorx');
		$data->koory = Input::get('koory');
		$data->sla = Input::get('sla');
		$data->statuspengerjaan = Input::get('statuspengerjaan');
		$data->lbsman = Input::get('lbsman');
		$data->lbsmot = Input::get('lbsmot');
		$data->cbog = Input::get('cbog');
		$data->pb = Input::get('pb');
		$data->OD160 = Input::get('160OD');
		$data->OD250 = Input::get('250OD');
		$data->OD400 = Input::get('400OD');
		$data->OD630 = Input::get('630OD');
		$data->ID400 = Input::get('400ID');
		$data->ID630 = Input::get('630ID');
		$data->OD4 = Input::get('4OD');
		$data->ID4 = Input::get('4ID');
		$data->ID6= Input::get('6ID');
		$data->ID8 = Input::get('8ID');
		$data->sktm300 = Input::get('sktm300');
		$data->sktm240 = Input::get('sktm240');
		$data->sutm = Input::get('sutm');
		$data->skutm = Input::get('skutm');
		$data->scoretm = Input::get('scoretm');
		$data->scoretr = Input::get('scoretr');
		$data->nyfgby = Input::get('nyfgby');
		$data->jtr = Input::get('jtr');
		$data->keterangan = Input::get('keterangan');

		$data->save();

		return redirect('/');
	}

	public function insert($input)
	{
		foreach ($input as $row) {
			$id = MonitorModel::find('idpelanggan',$row->idpelanggan);

			if($id == null){
				$data = new MonitorModel;

				$data->noagenda = $row->noagenda;
				$data->tariflama = $row->tariflama;
				$data->lamadaya = $row->lamadaya;
				$data->tarifbaru = $row->tarifbaru;
				$data->dayabaru = $row->dayabaru;
				$data->idpelanggan = $row->idpelanggan;
				$data->namapelanggan = $row->namapelanggan;
				$data->alamat = $row->alamat;
				$data->tanggalbayarbp = $row->tanggalbayarbp;
				$data->pengawas = $row->pengawas;
				$data->pelaksana = $row->pelaksana;
				$data->nospk = $row->nospk;
				$data->jenispekerjaan = $row->jenispekerjaan;
				$data->koorx = $row->koorx;
				$data->koory = $row->koory;
				$data->sla = $row->sla;
				$data->statuspengerjaan = $row->statuspengerjaan;
				$data->lbsman = $row->lbsman;
				$data->lbsmot = $row->lbsmot;
				$data->cbog = $row->cbog;
				$data->pb = $row->pb;
				$data->OD160 = $row->OD160;
				$data->OD250 = $row->OD250;
				$data->OD400 = $row->OD400;
				$data->OD630 = $row->OD630;
				$data->ID400 = $row->ID400;
				$data->ID630 = $row->ID630;
				$data->OD4 = $row->OD4;
				$data->ID4 = $row->ID4;
				$data->ID6 = $row->ID6;
				$data->ID8 = $row->ID8;
				$data->sktm300 = $row->sktm300;
				$data->sktm240 = $row->sktm240;
				$data->sutm = $row->sutm;
				$data->skutm = $row->skutm;
				$data->scoretm = $row->scoretm;
				$data->scoretr = $row->scoretr;
				$data->nyfgby = $row->nyfgby;
				$data->jtr = $row->jtr;
				$data->keterangan = $row->keterangan;

				$data->save();
			}else{
				$data = MonitorModel::find($idpelanggan);

				$data->noagenda = $row->noagenda;
				$data->tariflama = $row->tariflama;
				$data->lamadaya = $row->lamadaya;
				$data->tarifbaru = $row->tarifbaru;
				$data->dayabaru = $row->dayabaru;
				$data->idpelanggan = $row->idpelanggan;
				$data->namapelanggan = $row->namapelanggan;
				$data->alamat = $row->alamat;
				$data->tanggalbayarbp = $row->tanggalbayarbp;
				$data->pengawas = $row->pengawas;
				$data->pelaksana = $row->pelaksana;
				$data->nospk = $row->nospk;
				$data->jenispekerjaan = $row->jenispekerjaan;
				$data->koorx = $row->koorx;
				$data->koory = $row->koory;
				$data->sla = $row->sla;
				$data->statuspengerjaan = $row->statuspengerjaan;
				$data->lbsman = $row->lbsman;
				$data->lbsmot = $row->lbsmot;
				$data->cbog = $row->cbog;
				$data->pb = $row->pb;
				$data->OD160 = $row->OD160;
				$data->OD250 = $row->OD250;
				$data->OD400 = $row->OD400;
				$data->OD630 = $row->OD630;
				$data->ID400 = $row->ID400;
				$data->ID630 = $row->ID630;
				$data->OD4 = $row->OD4;
				$data->ID4 = $row->ID4;
				$data->ID6 = $row->ID6;
				$data->ID8 = $row->ID8;
				$data->sktm300 = $row->sktm300;
				$data->sktm240 = $row->sktm240;
				$data->sutm = $row->sutm;
				$data->skutm = $row->skutm;
				$data->scoretm = $row->scoretm;
				$data->scoretr = $row->scoretr;
				$data->nyfgby = $row->nyfgby;
				$data->jtr = $row->jtr;
				$data->keterangan = $row->keterangan;

				$data->save();
			}
		}
		
	}

	public function import()
	{

	}

	public function export()
	{
		
		\Excel::create('TestFile', function($excel) {

		// Set the title
		$excel->setTitle('TestTitle');

		$excel->sheet('Sheet1', function($sheet) {
		
			// Sheet manipulation
			$sheet->row(1, array('id','noagenda','tariflama','lamadaya','tarifbaru','dayabaru','idpelanggan',
								 'namapelanggan','alamat','tanggalbayarbp','pengawas','pelaksana','nospk','jenispekerjaan',
								 'koorx','koory','sla','statuspengerjaan','lbsman','lbsmot','cbog','pb','OD160','OD250','OD400',
								 'OD630','ID400','ID630','OD4','ID4','ID6','ID8','sktm300','sktm240','sutm','skutm','scoretm',
								 'scoretr','nyfgby','jtr','keterangan'));

			$monitor = MonitorModel::all();
			//dd($monitor);
			$index = 2;
			foreach ($monitor as $row) {
				$sheet->row($index, $row->getAttributes());
				$index = $index+1;
			}
			
		});

		})->download('xls');
	}
}
