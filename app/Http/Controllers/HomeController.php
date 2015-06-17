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

	public function import()
	{
		$file = Input::file('file')->move(public_path('file'));
		$check =Input::file('file')->getClientOriginalExtension();
		
		if($check == "xls" || $check == "xlsx" || $check == "csv"){
			
			\Excel::load($file, function($reader) {

				// reader methods
				$reader->noHeading();
				$reader->toArray();
				//dd($reader->parsed);
				foreach ($reader->parsed as $row) {
					//dd($row);
					if(is_numeric($row[0])){
						$id = MonitorModel::where('idpelanggan',[$row[6]])->first();

						if($id == null){
							$data = new MonitorModel;


							if($row[1] !=null){$data->noagenda = $row[1];}
							if($row[2] !=null){$data->tariflama = $row[2];}
							if($row[3] !=null){$data->lamadaya = $row[3];}
							if($row[4] !=null){$data->tarifbaru = $row[4];}
							if($row[5] !=null){$data->dayabaru = $row[5];}
							if($row[6] !=null){$data->idpelanggan = $row[6];}
							if($row[7] !=null){$data->namapelanggan = $row[7];}
							if($row[8] !=null){$data->alamat = $row[8];}
							if($row[9] !=null){$data->tanggalbayarbp = $row[9];}
							if($row[10] !=null){$data->pengawas = $row[10];}
							if($row[11] !=null){$data->pelaksana = $row[11];}
							if($row[12] !=null){$data->nospk = $row[12];}
							if($row[13] !=null){$data->jenispekerjaan = $row[13];}
							if($row[14] !=null){$data->koorx = $row[14];}
							if($row[15] !=null){$data->koory = $row[15];}
							if($row[16] !=null){$data->sla = $row[16];}
							if($row[17] !=null){$data->statuspengerjaan = $row[17];}
							if($row[18] !=null){$data->lbsman = $row[18];}
							if($row[19] !=null){$data->lbsmot = $row[19];}
							if($row[20] !=null){$data->cbog = $row[20];}
							if($row[21] !=null){$data->pb = $row[21];}
							if($row[22] !=null){$data->OD160 = $row[22];}
							if($row[23] !=null){$data->OD250 = $row[23];}
							if($row[24] !=null){$data->OD400 = $row[24];}
							if($row[25] !=null){$data->OD630 = $row[25];}
							if($row[26] !=null){$data->ID400 = $row[26];}
							if($row[27] !=null){$data->ID630 = $row[27];}
							if($row[28] !=null){$data->OD4 = $row[28];}
							if($row[29] !=null){$data->ID4 = $row[29];}
							if($row[30] !=null){$data->ID6 = $row[30];}
							if($row[31] !=null){$data->ID8 = $row[31];}
							if($row[32] !=null){$data->sktm300 = $row[32];}
							if($row[33] !=null){$data->sktm240 = $row[33];}
							if($row[34] !=null){$data->sutm = $row[34];}
							if($row[35] !=null){$data->skutm = $row[35];}
							if($row[36] !=null){$data->scoretm = $row[36];}
							if($row[37] !=null){$data->scoretr = $row[37];}
							if($row[38] !=null){$data->nyfgby = $row[38];}
							if($row[39] !=null){$data->jtr = $row[39];}
							if($row[40] !=null){$data->keterangan = $row[40];}

							$data->save();
						}else{
							$data = MonitorModel::where('idpelanggan',[$row[6]])->first();

							if($row[1] !=null){$data->noagenda = $row[1];}
							if($row[2] !=null){$data->tariflama = $row[2];}
							if($row[3] !=null){$data->lamadaya = $row[3];}
							if($row[4] !=null){$data->tarifbaru = $row[4];}
							if($row[5] !=null){$data->dayabaru = $row[5];}
							if($row[6] !=null){$data->idpelanggan = $row[6];}
							if($row[7] !=null){$data->namapelanggan = $row[7];}
							if($row[8] !=null){$data->alamat = $row[8];}
							if($row[9] !=null){$data->tanggalbayarbp = $row[9];}
							if($row[10] !=null){$data->pengawas = $row[10];}
							if($row[11] !=null){$data->pelaksana = $row[11];}
							if($row[12] !=null){$data->nospk = $row[12];}
							if($row[13] !=null){$data->jenispekerjaan = $row[13];}
							if($row[14] !=null){$data->koorx = $row[14];}
							if($row[15] !=null){$data->koory = $row[15];}
							if($row[16] !=null){$data->sla = $row[16];}
							if($row[17] !=null){$data->statuspengerjaan = $row[17];}
							if($row[18] !=null){$data->lbsman = $row[18];}
							if($row[19] !=null){$data->lbsmot = $row[19];}
							if($row[20] !=null){$data->cbog = $row[20];}
							if($row[21] !=null){$data->pb = $row[21];}
							if($row[22] !=null){$data->OD160 = $row[22];}
							if($row[23] !=null){$data->OD250 = $row[23];}
							if($row[24] !=null){$data->OD400 = $row[24];}
							if($row[25] !=null){$data->OD630 = $row[25];}
							if($row[26] !=null){$data->ID400 = $row[26];}
							if($row[27] !=null){$data->ID630 = $row[27];}
							if($row[28] !=null){$data->OD4 = $row[28];}
							if($row[29] !=null){$data->ID4 = $row[29];}
							if($row[30] !=null){$data->ID6 = $row[30];}
							if($row[31] !=null){$data->ID8 = $row[31];}
							if($row[32] !=null){$data->sktm300 = $row[32];}
							if($row[33] !=null){$data->sktm240 = $row[33];}
							if($row[34] !=null){$data->sutm = $row[34];}
							if($row[35] !=null){$data->skutm = $row[35];}
							if($row[36] !=null){$data->scoretm = $row[36];}
							if($row[37] !=null){$data->scoretr = $row[37];}
							if($row[38] !=null){$data->nyfgby = $row[38];}
							if($row[39] !=null){$data->jtr = $row[39];}
							if($row[40] !=null){$data->keterangan = $row[40];}

							$data->save();
						}
					}
					
				}

			});
			return redirect('/');
		}
		else{

		}
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
								 'koorx','koory','sla','statuspengerjaan','lbsman','lbsmot','cbog','pb','160OD','250OD','400OD',
								 '630OD','400ID','630ID','4OD','4ID','ID6','ID8','sktm300','sktm240','sutm','skutm','scoretm',
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
