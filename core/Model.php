<?php

class Model {

	
	
	public static function many($query,$aclass){
		$cnt = 0;
		$array = array();
		while ($r = mysqli_fetch_array($query,  MYSQLI_ASSOC )) {
			$array[$cnt] = new $aclass;
			$cnt2=1;
			foreach ($r as $key => $v) {
				$array[$cnt]->$key = $v;
				$cnt2++;
			}
			$cnt++;
		}
		return $array;
	}
	//////////////////////////////////
	public static function one($query,$aclass){
		$cnt = 0;
		$found = null;
		$data = new $aclass;
		while ($r = mysqli_fetch_array($query,  MYSQLI_ASSOC )) {
			$cnt=1;
			foreach ($r as $key => $v) {
				$data->$key = $v;
				$cnt++;
			}

			$found = $data;
			break;
		}
		return $found;
	}

}



?>