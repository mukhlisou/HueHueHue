<?php namespace App\Http\Controllers;

use App\MonitorModel;

use Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Mail;
use DateTime;


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
    public function detail($id)
    {       
        $row = MonitorModel::where('id','=',$id)->first();
        return view('detail', ['row' => $row]);

    }
	public function create(){
		return view('create');
	}

	public function add()
	{

        $rules = [
			'noagenda'=>'required|integer',
			'idpelanggan' => 'required|integer',
	        'namapelanggan' => 'required',
	        'sla'=>'required',
		];

		$messages = [
			'noagenda.required' => 'No. agenda is required.',
			'noagenda.integer' => 'No. agenda must be numbers.',
			'idpelanggan.required' => 'ID pelanggan is required',
			'idpelanggan.integer' => 'ID pelanggan must be numbers.',
			'namapelanggan.required' => 'Nama pelanggan is required',
			'sla.required' => 'SLA is required',

		];
        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('create')
                ->withErrors($validator)
                ->withInput();
        }else{

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
	}
    function object_to_array($object) {
        return (array) $object;
    }
	public function edit($idpelanggan)
	{
		$rules = [
			'noagenda'=>'required|integer',
			'idpelanggan' => 'required|integer',
	        'namapelanggan' => 'required',
		];

		$messages = [
			'noagenda.required' => 'No. agenda is required.',
			'noagenda.integer' => 'No. agenda must be numbers.',
			'idpelanggan.required' => 'ID pelanggan is required',
			'idpelanggan.integer' => 'ID pelanggan must be numbers.',
			'namapelanggan.required' => 'Nama pelanggan is required',
		];
        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $data = MonitorModel::where('idpelanggan', $idpelanggan)->first();
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
            $data->ID6 = Input::get('6ID');
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
	}

	public function import()
	{
		$validator = Validator::make(Input::all(), ['file' => 'required',], ['file.required' => 'file can not be empty.',]);
		if ($validator->fails()) {
				return redirect()->back()
				->withErrors($validator)
				->withInput();
		}

		$file = Input::file('file')->move(public_path('file'));
		$check =Input::file('file')->getClientOriginalExtension();
		
		if($check == "xls" || $check == "xlsx" || $check == "csv"){
			
			\Excel::load($file, function($reader) {

				// reader methods
				$reader->noHeading();
				$reader->toArray();
				//dd($reader->parsed);
				$input = array();

				foreach ($reader->parsed as $row) {
					//dd($row);
					if(is_numeric($row[0])){

						$rules = [
							'1'=>'required|integer',
							'6' => 'required|integer',
				            '7' => 'required',
							'16'=>'required|in:5,15,40,75',
						];

						$messages = [
							'1.required' => 'No. agenda is required.',
							'1.integer' => 'No. agenda must be numbers.',
							'6.required' => 'ID pelanggan is required',
							'6.integer' => 'ID pelanggan must be numbers.',
							'7.required' => 'Nama pelanggan is required',
							'16.required' => 'SLA is required',
							'16.in' => 'The :attribute must be one of the following types: :5, 15, 40, 75',
						];
		
						$validator = Validator::make($row->all(), $rules, $messages);

						if ($validator->fails()) {
								return redirect()->back()
								->withErrors($validator)
								->withInput();
						}else{
							$id = MonitorModel::where('idpelanggan',[$row[6]])->first();
							if($id == null){
								$data = new MonitorModel;
							}else{
								$data = MonitorModel::where('idpelanggan',[$row[6]])->first();
							}

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

							array_push($input,$data);
						}
						
					}
					
				}
				foreach($input as $in){
					$in->save();
				}

			});
			return redirect('/');
		}
		else{

		}
	}

	public function export()
	{
		
		\Excel::create('Data Monitoring Pelayanan Penyambungan', function($excel) {

		// Set the title
		$excel->setTitle('');

		$excel->sheet('Sheet1', function($sheet) {
		
			// Sheet manipulation
			$sheet->setAutoSize(false);
			
			$sheet->row(1, array('No','No Agenda','Tarif Lama','Lama Daya','Tarif Baru','Daya Baru','ID Pelanggan',
								 'Nama Pelanggan','Alamat','Tanggal Bayar BP','Pengawas','Pelaksana','No SPK','Jenis Pekerjaan',
								 'Koordinat Lokasi',null,'SLA','Status / Progress Pengerjaan','Kubikel',null,null,null,'Trafo',null,null,
								 null,null,null,'PHBTR / Rak TR',null,null,null,'SKTM',null,'SUTM','SKUTM','S Core TM',
								 'S Core TR','NYFGBY','JTR','Keterangan'));
			$sheet->row(2, array(null,null,null,null,null,null,null,null,null,null,null,null,null,null,
								 'X','Y',null,null,'LBS Man','LBS Mot','CBOG','PB','160 OD','250 OD','400 OD',
								 '630 OD','400 ID','630 ID','4 OD','4 ID','6 ID','8 ID','3x300','3x240',null,null,'1x35',
								 '1x240','4x95','3x70 + 50',null));

			$monitor = MonitorModel::all();
			//dd($monitor);
			$index = 3;
			foreach ($monitor as $row) {
				$sheet->row($index, $row->getAttributes());
				$sheet->row($index, array($index-2));
				$index = $index+1;
			}
			$sheet->mergeCells('A1:A2');
			$sheet->mergeCells('B1:B2');
			$sheet->mergeCells('C1:C2');
			$sheet->mergeCells('D1:D2');
			$sheet->mergeCells('E1:E2');
			$sheet->mergeCells('F1:F2');
			$sheet->mergeCells('G1:G2');
			$sheet->mergeCells('H1:H2');
			$sheet->mergeCells('I1:I2');
			$sheet->mergeCells('J1:J2');
			$sheet->mergeCells('K1:K2');
			$sheet->mergeCells('L1:L2');
			$sheet->mergeCells('M1:M2');
			$sheet->mergeCells('N1:N2');
			$sheet->mergeCells('O1:P1');
			$sheet->mergeCells('Q1:Q2');
			$sheet->mergeCells('R1:R2');
			$sheet->mergeCells('S1:V1');
			$sheet->mergeCells('W1:AB1');
			$sheet->mergeCells('AC1:AF1');
			$sheet->mergeCells('AG1:AH1');
			$sheet->mergeCells('AI1:AI2');
			$sheet->mergeCells('AJ1:AJ2');
			$sheet->mergeCells('AO1:AO2');

			$sheet->cells('A1:AO2', function($cells) {

				// manipulate the range of cells
				$cells->setBackground('#4BACC6');
				$cells->setFontColor('#ffffff');
				$cells->setFontSize(11);
				$cells->setFontWeight('bold');
				$cells->setAlignment('center');
				$cells->setVAlignment('center');
			});
			$sheet->setBorder('A1:AO2', 'thin');
			$sheet->setWidth(array(
				'A'	=> 5,'B' => 12,'C' => 12,'D' => 12,'E' => 12,'F' => 12,'G' => 14,'H' => 20,'I' => 35,'J' => 16,'K' => 12,'L' => 11,'M' => 10,'N' => 17,'O' => 10,
				'P' => 10,'Q' => 10,'R' => 26,'S' => 10,'T' => 10,'U' => 10,'V' => 10,'W' => 10,'X' => 10,'Y' => 10,'Z' => 10,'AA' => 10,'AB' => 10,'AC' => 10,'AD' => 10,
				'AE' => 10,'AF' => 10,'AG' => 10,'AH' => 10,'AI' => 10,'AJ' => 10,'AK' => 10,'AL' => 10,'AM' => 10,'AN' => 10,'AO' => 30,
			));

		});

		})->download('xls');
	}
}
