<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wayang;

class WayangController extends Controller
{
    public function index(){
        $result = Wayang::all();
        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }

    public function show($id)
    {
        $result = Wayang::find($id);

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }

    public function search($nama)
    {
        $result = Wayang::where('nama', 'ilike', '%'. $nama.'%')->get(); 
        
        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response()->json($data);
    }

    public function create(request $request){
        $wayang = new Wayang;
        $wayang->nama = $request->nama;
        $wayang->golongan = $request->golongan;
        $wayang->kasta = $request->kasta;
        $wayang->senjata = $request->senjata;
        $wayang->ayah = $request->ayah;
        $wayang->ibu = $request->ibu;
        $wayang->pasangan = $request->pasangan;
        $wayang->anak = $request->anak;
        $wayang->image_url = $request->image_url;
        $wayang->save();

        if($wayang){
            $data['code'] = 200;
            $data['result'] = $wayang;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response($data);
    }

    public function update(request $request, $id){
        $result = Wayang::find($id);
        $wayang->nama = $request->nama;
        $wayang->golongan = $request->golongan;
        $wayang->kasta = $request->kasta;
        $wayang->senjata = $request->senjata;
        $wayang->ayah = $request->ayah;
        $wayang->ibu = $request->ibu;
        $wayang->pasangan = $request->pasangan;
        $wayang->anak = $request->anak;
        $wayang->image_url = $request->image_url;
        $result->save();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response($data);
    }

    public function delete($id){
        $result = Wayang::find($id);
        $result->delete();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        } else {
            $data['code'] = 500;
            $data['result'] = 'Error';
        }
        return response($data);
    }
}
