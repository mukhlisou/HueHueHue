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
}
