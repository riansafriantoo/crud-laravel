<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(){

        $data_diri = \App\Data::all();
        return view('data_diri.index',['data_diri' => $data_diri]);
    }

    public function create(Request $request){

        $data_diri = \App\Data::create($request->all());
        if($request->hasFile('foto_profil')){
            $request->file('foto_profil')->move('images/',$request->file('foto_profil')->getClientOriginalName());
            $data_diri->foto_profil=$request->file('foto_profil')->getClientOriginalName();
            $data_diri->save();
        }
        return redirect('/data_diri');
        //dd($request->all());
    }

    public function edit($id){
        $data_diri = \App\Data::find($id);
        return view('data_diri/edit',['data_diri'=>$data_diri]);
    }

    public function update(Request $request,$id){
        $data_diri = \App\Data::find($id);
        $data_diri->update($request->all());
        return redirect('/data_diri');
    }

    public function delete($id){
        $data_diri = \App\Data::find($id);
        $data_diri->delete();
        return redirect('/data_diri');
    }
}
