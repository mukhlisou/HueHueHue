<?php namespace App\Http\Controllers;

use App\MonitorModel;

use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
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

        return view('play');
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
    public function update_belum($id)
    {         
        $row = MonitorModel::where('id','=',$id)->first();
        return view('edit_belum', ['row' => $row]);
    }
    public function update_nyala($id)
    {         
        $row = MonitorModel::where('id','=',$id)->first();
        return view('edit_nyala', ['row' => $row]);
    }

    public function detail($id)
    {       
        $row = MonitorModel::where('id','=',$id)->first();
        return view('detail', ['row' => $row]);
    }

    public function mailconfig()
    {
        $array = Config::get('mail');

        return view('mailconfig', ['row' => $array]);
    }

    public function editmail()
    {

        $validator = Validator::make(Input::all(), ['MAIL_PASSWORD'=>'required'], ['MAIL_PASSWORD.required'=>'password required']);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }  

        $driver = Input::get('MAIL_DRIVER');
        $host = Input::get('MAIL_HOST');
        $port = Input::get('MAIL_PORT');
        $address = Input::get('MAIL_ADDRESS');
        $password = Input::get('MAIL_PASSWORD');
        $encryption = Input::get('MAIL_ENCRYPTION');
        $name = Input::get('MAIL_NAME');
        $to = Input::get('MAIL_TO');

        $array = Config::get('mail');

        $array['driver'] = $driver;
        $array['host'] = $host;
        $array['port'] = $port;
        $array['from']['address'] = $address;
        $array['from']['name'] = $name;
        $array['to'] = $to;
        $array['encryption'] = $encryption;
        $array['username'] = $address;
        $array['password'] = $password;

        $data = var_export($array, 1);
        if(File::put(base_path() . '\config\mail.php', "<?php\n return $data ;")) 
        {
            return $this->mailconfig();
        }
        else
        {
            return redirect()->back()
                ->withErrors(["something happened"])
                ->withInput();
        }
    }

	public function create(){
		return view('create');
	}
	public function total(){
		$monitor = MonitorModel::all();
		return view('total', ['monitor' => $monitor]);
	}
	public function nyala(){
		$monitor = MonitorModel::all()->where('sudah_nyala',1);
		return view('nyala', ['monitor' => $monitor]);
	}
	public function belum(){
		$monitor = MonitorModel::all()->where('sudah_nyala',0);
		return view('belum', ['monitor' => $monitor]);
	}

	public function add()
	{

        $rules = [
			'noagenda'=>'required|integer',
			'idpelanggan' => 'required|integer|unique:monitor',
	        'namapelanggan' => 'required',
	        'sla'=>'required',
		];

		$messages = [
			'noagenda.required' => 'No. agenda is required.',
			'noagenda.integer' => 'No. agenda must be numbers.',
			'idpelanggan.unique' => 'ID Pelanggan sudah terdaftar.',
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
            if(Input::get('sudah_nyala')!= null){
                $data->sudah_nyala = 1 ;
            }else{
                $data->sudah_nyala = 0 ;
            }if(Input::get('s1')!= null){
				$data->s1 = Input::get('s1');
			}else{
				$data->s1 ='off' ;
			}
			if(Input::get('s2')!= null){
				$data->s2 = Input::get('s2');
			}else{
				$data->s2 ='off' ;
			}
			if(Input::get('s3')!= null){
				$data->s3 = Input::get('s3');
			}else{
				$data->s3 ='off' ;
			}
			if(Input::get('s4')!= null){
				$data->s4 = Input::get('s4');
			}else{
				$data->s4 ='off' ;
			}
			if(Input::get('s5')!= null){
				$data->s5 = Input::get('s5');
			}else{
				$data->s5 ='off' ;
			}
			if(Input::get('s6')!= null){
				$data->s6 = Input::get('s6');
			}else{
				$data->s6 ='off' ;
			}
			if(Input::get('s7')!= null){
				$data->s7= Input::get('s7');
			}else{
				$data->s7 ='off' ;
			}
			if(Input::get('s8')!= null){
				$data->s8 = Input::get('s8');
			}else{
				$data->s8 ='off' ;
			}
			if(Input::get('s9')!= null){
				$data->s9 = Input::get('s9');
			}else{
				$data->s9 ='off' ;
			}
			if(Input::get('s10')!= null){
				$data->s10 = Input::get('s10');
			}else{
				$data->s10 ='off' ;
			}
			if(Input::get('s11')!= null){
				$data->s11 = Input::get('s11');
			}else{
				$data->s11 ='off' ;
			}
			if(Input::get('s12')!= null){
				$data->s12 = Input::get('s12');
			}else{
				$data->s12 ='off' ;
			}if(Input::get('s13')!= null){
				$data->s13 = Input::get('s13');
			}else{
				$data->s13 ='off' ;
			}if(Input::get('s14')!= null){
				$data->s14 = Input::get('s14');
			}else{
				$data->s14 ='off' ;
			}if(Input::get('s15')!= null){
				$data->s15 = Input::get('s15');
			}else{
				$data->s15 ='off' ;
			}if(Input::get('s16')!= null){
				$data->s16 = Input::get('s16');
			}else{
				$data->s16 ='off' ;
			}if(Input::get('s17')!= null){
				$data->s17 = Input::get('s17');
			}else{
				$data->s17 ='off' ;
			}if(Input::get('s18')!= null){
				$data->s18 = Input::get('s18');
			}else{
				$data->s18 ='off' ;
			}if(Input::get('s19')!= null){
				$data->s19 = Input::get('s19');
			}else{
				$data->s19 ='off' ;
			}if(Input::get('s20')!= null){
				$data->s20 = Input::get('s20');
			}else{
				$data->s20 ='off' ;
			}if(Input::get('s21')!= null){
				$data->s21 = Input::get('s21');
			}else{
				$data->s21 ='off' ;
			}if(Input::get('s22')!= null){
				$data->s22 = Input::get('s22');
			}else{
				$data->s22 ='off' ;
			}


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
	        'namapelanggan' => 'required',
		];

		$messages = [
			'noagenda.required' => 'No. agenda is required.',
			'noagenda.integer' => 'No. agenda must be numbers.',
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
            if(Input::get('sudah_nyala')!= null){
                $data->sudah_nyala = 1 ;
            }else{
                $data->sudah_nyala = 0 ;
            }if(Input::get('s1')!= null){
				$data->s1 = Input::get('s1');
			}else{
				$data->s1 ='off' ;
			}
			if(Input::get('s2')!= null){
				$data->s2 = Input::get('s2');
			}else{
				$data->s2 ='off' ;
			}
			if(Input::get('s3')!= null){
				$data->s3 = Input::get('s3');
			}else{
				$data->s3 ='off' ;
			}
			if(Input::get('s4')!= null){
				$data->s4 = Input::get('s4');
			}else{
				$data->s4 ='off' ;
			}
			if(Input::get('s5')!= null){
				$data->s5 = Input::get('s5');
			}else{
				$data->s5 ='off' ;
			}
			if(Input::get('s6')!= null){
				$data->s6 = Input::get('s6');
			}else{
				$data->s6 ='off' ;
			}
			if(Input::get('s7')!= null){
				$data->s7= Input::get('s7');
			}else{
				$data->s7 ='off' ;
			}
			if(Input::get('s8')!= null){
				$data->s8 = Input::get('s8');
			}else{
				$data->s8 ='off' ;
			}
			if(Input::get('s9')!= null){
				$data->s9 = Input::get('s9');
			}else{
				$data->s9 ='off' ;
			}
			if(Input::get('s10')!= null){
				$data->s10 = Input::get('s10');
			}else{
				$data->s10 ='off' ;
			}
			if(Input::get('s11')!= null){
				$data->s11 = Input::get('s11');
			}else{
				$data->s11 ='off' ;
			}
			if(Input::get('s12')!= null){
				$data->s12 = Input::get('s12');
			}else{
				$data->s12 ='off' ;
			}if(Input::get('s13')!= null){
				$data->s13 = Input::get('s13');
			}else{
				$data->s13 ='off' ;
			}if(Input::get('s14')!= null){
				$data->s14 = Input::get('s14');
			}else{
				$data->s14 ='off' ;
			}if(Input::get('s15')!= null){
				$data->s15 = Input::get('s15');
			}else{
				$data->s15 ='off' ;
			}if(Input::get('s16')!= null){
				$data->s16 = Input::get('s16');
			}else{
				$data->s16 ='off' ;
			}if(Input::get('s17')!= null){
				$data->s17 = Input::get('s17');
			}else{
				$data->s17 ='off' ;
			}if(Input::get('s18')!= null){
				$data->s18 = Input::get('s18');
			}else{
				$data->s18 ='off' ;
			}if(Input::get('s19')!= null){
				$data->s19 = Input::get('s19');
			}else{
				$data->s19 ='off' ;
			}if(Input::get('s20')!= null){
				$data->s20 = Input::get('s20');
			}else{
				$data->s20 ='off' ;
			}if(Input::get('s21')!= null){
				$data->s21 = Input::get('s21');
			}else{
				$data->s21 ='off' ;
			}if(Input::get('s22')!= null){
				$data->s22 = Input::get('s22');
			}else{
				$data->s22 ='off' ;
			}

            $data->save();

            return redirect('/');
        }
	}
    public function edit_belum($idpelanggan)
    {
        $rules = [
            'noagenda'=>'required|integer',
            'namapelanggan' => 'required',
        ];

        $messages = [
            'noagenda.required' => 'No. agenda is required.',
            'noagenda.integer' => 'No. agenda must be numbers.',
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
            if(Input::get('sudah_nyala')!= null){
                $data->sudah_nyala = 1 ;
            }else{
                $data->sudah_nyala = 0 ;
            }if(Input::get('s1')!= null){
                $data->s1 = Input::get('s1');
            }else{
                $data->s1 ='off' ;
            }
            if(Input::get('s2')!= null){
                $data->s2 = Input::get('s2');
            }else{
                $data->s2 ='off' ;
            }
            if(Input::get('s3')!= null){
                $data->s3 = Input::get('s3');
            }else{
                $data->s3 ='off' ;
            }
            if(Input::get('s4')!= null){
                $data->s4 = Input::get('s4');
            }else{
                $data->s4 ='off' ;
            }
            if(Input::get('s5')!= null){
                $data->s5 = Input::get('s5');
            }else{
                $data->s5 ='off' ;
            }
            if(Input::get('s6')!= null){
                $data->s6 = Input::get('s6');
            }else{
                $data->s6 ='off' ;
            }
            if(Input::get('s7')!= null){
                $data->s7= Input::get('s7');
            }else{
                $data->s7 ='off' ;
            }
            if(Input::get('s8')!= null){
                $data->s8 = Input::get('s8');
            }else{
                $data->s8 ='off' ;
            }
            if(Input::get('s9')!= null){
                $data->s9 = Input::get('s9');
            }else{
                $data->s9 ='off' ;
            }
            if(Input::get('s10')!= null){
                $data->s10 = Input::get('s10');
            }else{
                $data->s10 ='off' ;
            }
            if(Input::get('s11')!= null){
                $data->s11 = Input::get('s11');
            }else{
                $data->s11 ='off' ;
            }
            if(Input::get('s12')!= null){
                $data->s12 = Input::get('s12');
            }else{
                $data->s12 ='off' ;
            }if(Input::get('s13')!= null){
                $data->s13 = Input::get('s13');
            }else{
                $data->s13 ='off' ;
            }if(Input::get('s14')!= null){
                $data->s14 = Input::get('s14');
            }else{
                $data->s14 ='off' ;
            }if(Input::get('s15')!= null){
                $data->s15 = Input::get('s15');
            }else{
                $data->s15 ='off' ;
            }if(Input::get('s16')!= null){
                $data->s16 = Input::get('s16');
            }else{
                $data->s16 ='off' ;
            }if(Input::get('s17')!= null){
                $data->s17 = Input::get('s17');
            }else{
                $data->s17 ='off' ;
            }if(Input::get('s18')!= null){
                $data->s18 = Input::get('s18');
            }else{
                $data->s18 ='off' ;
            }if(Input::get('s19')!= null){
                $data->s19 = Input::get('s19');
            }else{
                $data->s19 ='off' ;
            }if(Input::get('s20')!= null){
                $data->s20 = Input::get('s20');
            }else{
                $data->s20 ='off' ;
            }if(Input::get('s21')!= null){
                $data->s21 = Input::get('s21');
            }else{
                $data->s21 ='off' ;
            }if(Input::get('s22')!= null){
                $data->s22 = Input::get('s22');
            }else{
                $data->s22 ='off' ;
            }

            $data->save();

            return redirect('/belum');
        }
    }
    public function edit_nyala($idpelanggan)
    {
        $rules = [
            'noagenda'=>'required|integer',
            'namapelanggan' => 'required',
        ];

        $messages = [
            'noagenda.required' => 'No. agenda is required.',
            'noagenda.integer' => 'No. agenda must be numbers.',
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
            if(Input::get('sudah_nyala')!= null){
                $data->sudah_nyala = 1 ;
            }else{
                $data->sudah_nyala = 0 ;
            }if(Input::get('s1')!= null){
                $data->s1 = Input::get('s1');
            }else{
                $data->s1 ='off' ;
            }
            if(Input::get('s2')!= null){
                $data->s2 = Input::get('s2');
            }else{
                $data->s2 ='off' ;
            }
            if(Input::get('s3')!= null){
                $data->s3 = Input::get('s3');
            }else{
                $data->s3 ='off' ;
            }
            if(Input::get('s4')!= null){
                $data->s4 = Input::get('s4');
            }else{
                $data->s4 ='off' ;
            }
            if(Input::get('s5')!= null){
                $data->s5 = Input::get('s5');
            }else{
                $data->s5 ='off' ;
            }
            if(Input::get('s6')!= null){
                $data->s6 = Input::get('s6');
            }else{
                $data->s6 ='off' ;
            }
            if(Input::get('s7')!= null){
                $data->s7= Input::get('s7');
            }else{
                $data->s7 ='off' ;
            }
            if(Input::get('s8')!= null){
                $data->s8 = Input::get('s8');
            }else{
                $data->s8 ='off' ;
            }
            if(Input::get('s9')!= null){
                $data->s9 = Input::get('s9');
            }else{
                $data->s9 ='off' ;
            }
            if(Input::get('s10')!= null){
                $data->s10 = Input::get('s10');
            }else{
                $data->s10 ='off' ;
            }
            if(Input::get('s11')!= null){
                $data->s11 = Input::get('s11');
            }else{
                $data->s11 ='off' ;
            }
            if(Input::get('s12')!= null){
                $data->s12 = Input::get('s12');
            }else{
                $data->s12 ='off' ;
            }if(Input::get('s13')!= null){
                $data->s13 = Input::get('s13');
            }else{
                $data->s13 ='off' ;
            }if(Input::get('s14')!= null){
                $data->s14 = Input::get('s14');
            }else{
                $data->s14 ='off' ;
            }if(Input::get('s15')!= null){
                $data->s15 = Input::get('s15');
            }else{
                $data->s15 ='off' ;
            }if(Input::get('s16')!= null){
                $data->s16 = Input::get('s16');
            }else{
                $data->s16 ='off' ;
            }if(Input::get('s17')!= null){
                $data->s17 = Input::get('s17');
            }else{
                $data->s17 ='off' ;
            }if(Input::get('s18')!= null){
                $data->s18 = Input::get('s18');
            }else{
                $data->s18 ='off' ;
            }if(Input::get('s19')!= null){
                $data->s19 = Input::get('s19');
            }else{
                $data->s19 ='off' ;
            }if(Input::get('s20')!= null){
                $data->s20 = Input::get('s20');
            }else{
                $data->s20 ='off' ;
            }if(Input::get('s21')!= null){
                $data->s21 = Input::get('s21');
            }else{
                $data->s21 ='off' ;
            }if(Input::get('s22')!= null){
                $data->s22 = Input::get('s22');
            }else{
                $data->s22 ='off' ;
            }

            $data->save();

            return redirect('/nyala');
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
                $errors = array();

                $rowIndex = 1;
				foreach ($reader->parsed as $row) {
					//dd($row);
					if(is_numeric($row[0])){

                        $rules = [

                        ];

                        $messages = [
                        ];
		
						$validator = Validator::make($row->all(), $rules, $messages);

						if ($validator->fails()) {	
                            foreach ($validator->errors()->all() as $message) {
                                array_push($errors,$message);
                            }
						}else{
							$id = MonitorModel::where('idpelanggan',[$row[6]])->first();
							if($id == null){
								$data = new MonitorModel;
							}else{
								$data = MonitorModel::where('idpelanggan',[$row[6]])->first();
							}

							if($row[1] !=null){$data->noagenda = $row[1];}else{
								$data->noagenda = '';
							}
							if($row[2] !=null){$data->tariflama = $row[2];}else{
								$data->tariflama = '';
							}
							if($row[3] !=null){$data->lamadaya = $row[3];}else{
								$data->lamadaya = '';
							}
							if($row[4] !=null){$data->tarifbaru = $row[4];}else{
								$data->tarifbaru = '';
							}
							if($row[5] !=null){$data->dayabaru = $row[5];}else{
								$data->dayabaru = '';
							}
							if($row[6] !=null){$data->idpelanggan = $row[6];}else{
								$data->idpelanggan = '';
							}
							if($row[7] !=null){$data->namapelanggan = $row[7];}else{
								$data->namapelanggan = '';
							}
							if($row[8] !=null){$data->alamat = $row[8];}else{
								$data->alamat = '';
							}
							if($row[9] !=null){$data->tanggalbayarbp = $row[9];}else{
								$data->tanggalbayarbp = '';
							}
							if($row[10] !=null){$data->pengawas = $row[10];}else{
								$data->pengawas = '';
							}
							if($row[11] !=null){$data->pelaksana = $row[11];}else{
								$data->pelaksana = '';
							}
							if($row[12] !=null){$data->nospk = $row[12];}else{
								$data->nospk = '';
							}
							if($row[13] !=null){$data->jenispekerjaan = $row[13];}else{
								$data->jenispekerjaan = '';
							}
							if($row[14] !=null){$data->koorx = $row[14];}else{
								$data->koorx = 0;
							}
							if($row[15] !=null){$data->koory = $row[15];}else{
								$data->koory = 0;
							}
							if($row[16] !=null){$data->sla = $row[16];}else{
								$data->sla = '';
							}
							if($row[17] !=null){$data->statuspengerjaan = $row[17];}else{
								$data->statuspengerjaan = '';
							}
							if($row[18] !=null){$data->lbsman = $row[18];}else{
								$data->lbsman = 0;
							}
							if($row[19] !=null){$data->lbsmot = $row[19];}else{
								$data->lbsmot = 0;
							}
							if($row[20] !=null){$data->cbog = $row[20];}else{
								$data->cbog = 0;
							}
							if($row[21] !=null){$data->pb = $row[21];}else{
								$data->pb = 0;
							}
							if($row[22] !=null){$data->OD160 = $row[22];}else{
								$data->OD160 = 0;
							}
							if($row[23] !=null){$data->OD250 = $row[23];}else{
								$data->OD250 = 0;
							}
							if($row[24] !=null){$data->OD400 = $row[24];}else{
								$data->OD400 = 0;
							}
							if($row[25] !=null){$data->OD630 = $row[25];}else{
								$data->OD630 = 0;
							}
							if($row[26] !=null){$data->ID400 = $row[26];}else{
								$data->ID400 = 0;
							}
							if($row[27] !=null){$data->ID630 = $row[27];}else{
								$data->ID630 = 0;
							}
							if($row[28] !=null){$data->OD4 = $row[28];}else{
								$data->OD4 = 0;
							}
							if($row[29] !=null){$data->ID4 = $row[29];}else{
								$data->ID4 = 0;
							}
							if($row[30] !=null){$data->ID6 = $row[30];}else{
								$data->ID6 = 0;
							}
							if($row[31] !=null){$data->ID8 = $row[31];}else{
								$data->ID8 = 0;
							}
							if($row[32] !=null){$data->sktm300 = $row[32];}else{
								$data->sktm300 = 0;
							}
							if($row[33] !=null){$data->sktm240 = $row[33];}else{
								$data->sktm240 = 0;
						}
							if($row[34] !=null){$data->sutm = $row[34];}else{
								$data->sutm = 0;
							}
							if($row[35] !=null){$data->skutm = $row[35];}else{
								$data->skutm = 0;
							}
							if($row[36] !=null){$data->scoretm = $row[36];}else{
								$data->scoretm = 0;
							}
							if($row[37] !=null){$data->scoretr = $row[37];}else{
								$data->scoretr = 0;
							}
							if($row[38] !=null){$data->nyfgby = $row[38];}else{
								$data->nyfgby = 0;
							}
							if($row[39] !=null){$data->jtr = $row[39];}else{
								$data->jtr = 0;
							}
							if($row[40] !=null){$data->keterangan = $row[40];}else{
								$data->keterangan = '';
							}
                            if($row[41] !=null && ($row[41] == '1' || $row[41] == '0')){$data->sudah_nyala = $row[41];}else{
                                $data->sudah_nyala = 0;
                            }

							array_push($input,$data);
						}						
					}
                    $rowIndex = $rowIndex + 1;
					
				}
                if(count($errors) == 0){
                    foreach($input as $in){
                        $in->save();
                    }
                }
				else{
                    return redirect()->back()
                                ->withErrors($errors)
                                ->withInput();
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

        $excel->sheet('Belum Menyala', function($sheet) {
        
            // Sheet manipulation
            $sheet->setAutoSize(false);
            
            $sheet->row(1, array('No','No Agenda','Tarif Lama','Lama Daya','Tarif Baru','Daya Baru','ID Pelanggan',
                                 'Nama Pelanggan','Alamat','Tanggal Bayar BP','Pengawas','Pelaksana','No SPK','Jenis Pekerjaan',
                                 'Koordinat Lokasi',null,'SLA','Status / Progress Pengerjaan','Kubikel',null,null,null,'Trafo',null,null,
                                 null,null,null,'PHBTR / Rak TR',null,null,null,'SKTM',null,'SUTM','SKUTM','S Core TM',
                                 'S Core TR','NYFGBY','JTR','Keterangan', 'Sudah Menyala'));
            $sheet->row(2, array(null,null,null,null,null,null,null,null,null,null,null,null,null,null,
                                 'X','Y',null,null,'LBS Man','LBS Mot','CBOG','PB','160 OD','250 OD','400 OD',
                                 '630 OD','400 ID','630 ID','4 OD','4 ID','6 ID','8 ID','3x300','3x240',null,null,'1x35',
                                 '1x240','4x95','3x70 + 50',null,null));

            $belum = MonitorModel::all()->where('sudah_nyala',0);
            //dd($monitor);
            $index = 3;
            foreach ($belum as $row_belum) {
                $sheet->row($index, $row_belum->getAttributes());
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
            $sheet->mergeCells('AP1:AP2');
            $sheet->cells('A1:AP2', function($cells) {

                // manipulate the range of cells
                $cells->setBackground('#4BACC6');
                $cells->setFontColor('#ffffff');
                $cells->setFontSize(11);
                $cells->setFontWeight('bold');
                $cells->setAlignment('center');
                $cells->setVAlignment('center');
            });
            $sheet->setBorder('A1:AP2', 'thin');
            $sheet->setWidth(array(
                'A' => 5,'B' => 12,'C' => 12,'D' => 12,'E' => 12,'F' => 12,'G' => 14,'H' => 20,'I' => 35,'J' => 16,'K' => 12,'L' => 11,'M' => 10,'N' => 17,'O' => 10,
                'P' => 10,'Q' => 10,'R' => 26,'S' => 10,'T' => 10,'U' => 10,'V' => 10,'W' => 10,'X' => 10,'Y' => 10,'Z' => 10,'AA' => 10,'AB' => 10,'AC' => 10,'AD' => 10,
                'AE' => 10,'AF' => 10,'AG' => 10,'AH' => 10,'AI' => 10,'AJ' => 10,'AK' => 10,'AL' => 10,'AM' => 10,'AN' => 10,'AO' => 30,'AP' => 20,
            ));

        });

		$excel->sheet('sudah Menyala', function($sheet) {
		
			// Sheet manipulation
			$sheet->setAutoSize(false);
			
			$sheet->row(1, array('No','No Agenda','Tarif Lama','Lama Daya','Tarif Baru','Daya Baru','ID Pelanggan',
								 'Nama Pelanggan','Alamat','Tanggal Bayar BP','Pengawas','Pelaksana','No SPK','Jenis Pekerjaan',
								 'Koordinat Lokasi',null,'SLA','Status / Progress Pengerjaan','Kubikel',null,null,null,'Trafo',null,null,
								 null,null,null,'PHBTR / Rak TR',null,null,null,'SKTM',null,'SUTM','SKUTM','S Core TM',
								 'S Core TR','NYFGBY','JTR','Keterangan', 'Sudah Menyala'));
			$sheet->row(2, array(null,null,null,null,null,null,null,null,null,null,null,null,null,null,
								 'X','Y',null,null,'LBS Man','LBS Mot','CBOG','PB','160 OD','250 OD','400 OD',
								 '630 OD','400 ID','630 ID','4 OD','4 ID','6 ID','8 ID','3x300','3x240',null,null,'1x35',
								 '1x240','4x95','3x70 + 50',null,null));

			$sudah = MonitorModel::all()->where('sudah_nyala',1);
			//dd($monitor);
			$index = 3;
			foreach ($sudah as $row_sudah) {
				$sheet->row($index, $row_sudah->getAttributes());
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
            $sheet->mergeCells('AP1:AP2');
			$sheet->cells('A1:AP2', function($cells) {

				// manipulate the range of cells
				$cells->setBackground('#4BACC6');
				$cells->setFontColor('#ffffff');
				$cells->setFontSize(11);
				$cells->setFontWeight('bold');
				$cells->setAlignment('center');
				$cells->setVAlignment('center');
			});
			$sheet->setBorder('A1:AP2', 'thin');
			$sheet->setWidth(array(
				'A'	=> 5,'B' => 12,'C' => 12,'D' => 12,'E' => 12,'F' => 12,'G' => 14,'H' => 20,'I' => 35,'J' => 16,'K' => 12,'L' => 11,'M' => 10,'N' => 17,'O' => 10,
				'P' => 10,'Q' => 10,'R' => 26,'S' => 10,'T' => 10,'U' => 10,'V' => 10,'W' => 10,'X' => 10,'Y' => 10,'Z' => 10,'AA' => 10,'AB' => 10,'AC' => 10,'AD' => 10,
				'AE' => 10,'AF' => 10,'AG' => 10,'AH' => 10,'AI' => 10,'AJ' => 10,'AK' => 10,'AL' => 10,'AM' => 10,'AN' => 10,'AO' => 30,'AP' => 20,
			));

		});

		})->download('xls');
	}
}
