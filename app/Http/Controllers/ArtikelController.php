<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    //
    public function index(){
        $artikels = ArtikelModel::get_all();
        return view('artikel.index', compact('artikels'));
    }

    public function create(){
        return view('artikel.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        ArtikelModel::save($data);
        return redirect('/artikel');
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public static function update($id, Request $request){
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id){
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }

}
