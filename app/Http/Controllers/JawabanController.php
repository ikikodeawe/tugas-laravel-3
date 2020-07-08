<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($id){
    	$answer = JawabanModel::get_all_by_id($id);
    	$tanya	= PertanyaanModel::get_by_id($id);

    	return view('pertanyaan.show', compact('answer'), compact('tanya'));
    }

    public function store(Request $request){
    	$new_ask = PertanyaanModel::save($request->all());

    	return redirect('/pertanyaan');
    }
}
