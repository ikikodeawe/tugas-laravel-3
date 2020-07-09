<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
	public static function get_all(){
		$ask = DB::table('pertanyaan')->get();
		return $ask;
	}

	public static function save($data){
		unset($data["_token"]);
		$new_ask = DB::table('pertanyaan')->insert($data);
		return $new_ask;
	}

	public static function get_by_id($id){
		$tanya = DB::table('pertanyaan')->where('id',$id)->first();
		return $tanya;
	}

	public static function delete($id){
		$hapus = DB::table('pertanyaan')->where('id',$id)->delete();
		return $hapus;
	}

	public static function update($id, $request){
		$tanya = DB::table('pertanyaan')->where('id',$id)
		->update([
			'judul' => $request['judul'],
			'isi'	=> $request['isi']
		]);
		return $tanya;
	}
}

?>