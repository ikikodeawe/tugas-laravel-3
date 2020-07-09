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

    /*public function show($id){
    	$tanya = PertanyaanModel::get_by_id($id);

    	return view('pertanyaan.show', compact('tanya'));
    }*/

    public function store(Request $request){
    	$new_ask = PertanyaanModel::save($request->all());

    	return redirect('/pertanyaan');
    }

    public function edit($id){
    	$ask = PertanyaanModel::get_by_id($id);
    	return view('pertanyaan.edit', compact('ask'));
    }

     public function update($id, Request $request){
    	$ask = PertanyaanModel::update($id, $request->all());

    	return redirect('/pertanyaan');
    }

    public function delete($id){
    	$hapus = PertanyaanModel::delete($id);
    	return redirect('/pertanyaan');
    }
}
