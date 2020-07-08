<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create(){
    	return view('pertanyaan.form');
    }

    public function index(){
    	$ask = PertanyaanModel::get_all();

    	return view('pertanyaan.index', compact('ask'));
    }

    public function store(Request $request){
    	$new_ask = PertanyaanModel::save($request->all());

    	return redirect('/pertanyaan');
    }
}
