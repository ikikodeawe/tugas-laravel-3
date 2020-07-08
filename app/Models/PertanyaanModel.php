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
}

?>