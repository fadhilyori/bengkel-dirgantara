<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ["title" => "Dashboard"];
        return view('pages.dashboard', $data);
    }

    public function transaksi() {
        $data = ["title" => "Transaksi"];
        return view('pages.transaksi', $data);
    }

    public function absensi() {
        $data = ["title" => "Absensi"];
        return view('pages.absensi', $data);
    }

    public function job() {
        $data = ["title" => "Job"];
        return view('pages.job', $data);
    }

    public function detailTransaksi(Request $request) {
        $id = $request->id;
        if ($id == "1") {
            $data = [
                "customer" => "Anas",
                "job" => "Ganti oli",
                "kendaraan" => "Honda Supra X",
                "total_price" => "95000",
                "discount" => "0",
                "tax" => "10",
                "bill_of_service" => "AAI87ANJS",
                'montir'=>'Imam Abu Mansur' 
            ];
        }
        return view('pages.detailTransaksi',$data);
    }
}
