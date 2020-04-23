<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function viewHomeSiswa()
    {
    	$nisn = Session::get('nisn');
    	$data['pembayaran'] = \App\Pembayaran::where('nisn',$nisn)->get();
    	
    	if (!Session::get('login')) {    		
    		return redirect('/');
    	}else{
    		if (!Session::get('level')) {
    			return view('siswa.home',$data);
            }else{
                return redirect('/');
            }
		        
		}
		
	}	
	public function siswa()
    {
    	// mengambil data dari table pembayaran
    	$pembayaran = DB::table('pembayaran')->get();
 
    	// mengirim data pembayaran ke view siswa
    	return view('siswa.home',['pembayaran' => $pembayaran]);
 
	}
	public function tambahpembayaran()
{
 
	// memanggil view tambah
	return view('siswa.tambahpembayaran');
 
}
	
	public function store(Request $request)
	{
		// insert data ke table siswa
		DB::table('pembayaran')->insert([
			'id_Pembayaran' => $request->id_pembayaran,
			'nisn' => $request->nisn,
			'nama' => $request->nama,
			'kelas' => $request->kelas,
			'tgl_dibayar' => $request->tgl_dibayar,
			'bulan_dibayar' => $request->bulan_dibayar,
			'tahun_dibayar' => $request->tahun_dibayar,
			'jumlah_bayar' => $request->jumlah_bayar,
			]);
		// alihkan halaman ke halaman siswa
		return redirect('siswa/home');
	 
	}
	public function deletepembayaranpost($id_pembyaran)
     {
        $data = \App\Pembayaran::find($id_pembayaran);

        $status = $data->delete();

        if ($status) {
            return redirect('siswa/home');
        } else {
            return redirect('siswa/home');
		}
	}
}