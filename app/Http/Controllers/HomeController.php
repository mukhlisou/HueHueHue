<?php namespace App\Http\Controllers;

use App\MonitorModel;
use Http\Requests;
use Request;

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

	public function coba()
	{
        return view('welcome');
	
	}

	public function delete($id)
	{
		$row = MonitorModel::where('id','=',$id);
		$row->delete();
		$monitor = MonitorModel::all();
		return redirect()->back();
	
	}
	public function create(){
		return view('create');
	}

	public function add()
	{
		$data = MonitorModel;

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
		$data->160OD = Input::get('160OD');
		$data->250OD = Input::get('250OD');
		$data->400OD = Input::get('400OD');
		$data->630OD = Input::get('630OD');
		$data->400ID = Input::get('400ID');
		$data->630ID = Input::get('630ID');
		$data->4OD = Input::get('4OD');
		$data->4ID = Input::get('4ID');
		$data->6ID = Input::get('6ID');
		$data->8ID = Input::get('8ID');
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
