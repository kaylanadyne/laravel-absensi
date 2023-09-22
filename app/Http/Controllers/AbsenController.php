<?php

namespace App\Http\Controllers;
use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function indexUsers(){
        $data = Absen::get();

        return view('dashboard.index', compact('data'));
    }

    public function indexAbsen(){
        return view('dashboard.index');
    }

    public function storeAbsen(Request $request){
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'keterangan' => 'required'
        ]);
        
        Absen::create($request->all());

        return redirect()->route('indexUser')
        ->with('Success', 'Selamat, berhasil menginput absen!');
    }

    public function deleteAbsen($id){
        Absen::where('id',$id)->delete();
        return redirect(route('indexUser'));
    }

    public function indexEdit($id){
        $data = Absen::where('id',$id)->first();
        return view ('dashboard.edit', compact('data'));
    }

    public function updateAbsen(Request $request , $id){

        Absen::where('id',$id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,           
            'keterangan' => $request->keterangan          
        ]);

        return redirect()->route('indexUser')
        ->with('Success', 'Selamat Activity Berhasil Dibuat!');
    }
}
