<?php

namespace App\Http\Controllers;

use App\Models\GejalaModel;
use App\Models\RejectModel;
use App\Models\RejectGejalaModel;
use App\Models\SolusiModel;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function indexGejala()
    {
        $title = 'Data Gejala';
        $data = GejalaModel::all(); //Memanggil  data pada tabel Gejala
        $dataSolusi = SolusiModel::all();
        return view('gejala', compact('title','data','dataSolusi'));
    }

    public function indexReject()
    {
        $title = 'Data Reject';
        $data = RejectModel::all(); //Memanggil  data pada tabel Reject
        return view('reject', compact('title','data'));
    }

    public function tambahReject(Request $request)
    {
        $title = 'Data Reject';
        
        // Membuat ID reject Baru
         RejectModel::create([
            'id_reject' => $request->id_reject,
            'nama' => $request->nama_reject
        ]);

         // Membuat id Relasi pada tabel Reject_Gejala
        $dataGejala = GejalaModel::all();
        foreach ($dataGejala as $key)  {
            RejectGejalaModel::create([
                'kode_reject' => $request->id_reject,
                'kode_gejala' => $key->id_gejala,
            ]); 
        }

        $data = RejectModel::all(); //Memanggil  data pada tabel Reject
        return redirect()->route('reject', compact('title','data'));
    }

    public function tambahGejala(Request $request)
    {
        $title = 'Data Reject';
        // dd($request);            
        //  Cek Solusi baru ada atau tidak  
        $cekSolusi = $request->keterangan_solusi_baru;
        // dd($cekSolusi);
        if ($cekSolusi != null) {
            // dd('1');
            // Membuat id solusi baru
            $dataSolusi = SolusiModel::all();
            $lastSolusi = $dataSolusi->last();
            // Remove 'S' and convert to an integer
            $lastId = (int)str_replace('S', '', $lastSolusi->id_solusi);
            $newId = 'S'. ($lastId + 1);

            SolusiModel::create([
                'id_solusi' =>  $newId,
                'keterangan' => $request->keterangan_solusi_baru
            ]);

            // Membuat id Gejala Baru
            $data = GejalaModel::create([
                'id_gejala' => $request->id_gejala,
                'nama' => $request->keterangan,
                'kode_solusi' => $newId,
            ]);
        } else {
            // dd('2');
            // Membuat id Gejala Baru
            $data = GejalaModel::create([
                'id_gejala' => $request->id_gejala,
                'nama' => $request->keterangan,
                'kode_solusi' => $request->solusi,
            ]);
        }

        // Membuat id Relasi pada tabel Reject_Gejala
        $dataReject = RejectModel::all();
        foreach ($dataReject as $key)  {
            RejectGejalaModel::create([
                'kode_reject' => $key->id_reject,
                'kode_gejala' =>  $request->id_gejala
            ]); 
        }
        return redirect()->route('gejala', compact('title'));
    }

    public function indexRelasi()
    {
        $title = 'Relasi';
        $dataGejala = GejalaModel::all();
        $dataReject = RejectModel::all();
        $relasi = RejectGejalaModel::all();
        // dd($relasi->where('kode_reject', 'R1')->where('kode_gejala','G1')->first());
        return view('relasi', compact('title','dataGejala','dataReject','relasi'));
    }

    public function modalEditRelasi($reject)
    {
        $dataReject = RejectModel::where('id_reject',$reject)->first();
        $dataRelasi = RejectGejalaModel::where('kode_reject',$reject)->get();
    //    dd($dataRelasi);
        return view('modalEditRelasi', compact('dataRelasi','dataReject'));
    }

    public function updateRelasi(Request $request,$reject)
    {
        // dd($request);
        $dataReject = RejectModel::where('id_reject',$reject)->first();
        $dataRelasi = RejectGejalaModel::where('kode_reject',$reject)->get();
        $angka = 0;
        foreach ($dataRelasi as $key ) {
          $key->update([
            'keterangan' => $request->relasi[$angka]
          ]);
          $angka = $angka + 1;
        }
    //    dd($dataRelasi);
        $title = 'Relasi';
        $dataGejala = GejalaModel::all();
        $dataReject = RejectModel::all();
        $relasi = RejectGejalaModel::all();
        // dd($relasi->where('kode_reject', 'R1')->where('kode_gejala','G1')->first());
        return view('relasi', compact('title','dataGejala','dataReject','relasi'));
           
    }

}
