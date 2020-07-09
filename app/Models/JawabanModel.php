<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
	public static function get_all_by_id($id){
		$answer = DB::table('jawaban')->where('pertanyaan_id',$id)->get();
		return $answer;
	}

	public static function save($data){
		unset($data["_token"]);
		$new_answer = DB::table('jawaban')->insert($data);
		return $new_answer;
	}

	public static function get_by_id($id){
		$jawab = DB::table('jawaban')->where('id',$id)->first();
		return $jawab;
	}
}

?>