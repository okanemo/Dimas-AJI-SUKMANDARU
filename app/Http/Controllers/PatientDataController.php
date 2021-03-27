<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_data;

class PatientDataController extends Controller
{
    public function baca(){
        $datas = patient_data::get();

        return view('database_search',['datas'=>$datas]);
    }
    public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->data_search;
 
 	// mengambil data dari table patient_data sesuai pencarian data
	$datas=patient_data::where('id_number',$cari)->first();
 
    	// mengirim data pegawai ke view database_search
	return view('database_search',['datas' => $datas]);
 
}
    public function show(patient_data $patient_data) {
        return $patient_data;
    }
    public function store(Request $request) {
        $patient_data = patient_data::create($request->all());
        return response()->json($patient_data, 201);
    }
    public function update(Request $request, patient_data $patient_data) {
        $patient_data->update($request->all());
        return response()->json($patient_data);
    }
    public function delete(Post $patient_data) {
        $patient_data->delete();
        return response()->json(null, 204);
    }
}
