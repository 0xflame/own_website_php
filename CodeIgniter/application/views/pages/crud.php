<?php

class crud {

	static function read_one($p_id) {
		$lstFiches = crud::read();
		foreach($lstFiches as $uneFiche) {
			$aUneFiche = explode(";", $uneFiche);
			$id=$aUneFiche[0];
       
			if($id == $p_id)
				return $aUneFiche;
		}
	}

	static function read(){
		$contenuFile = file_get_contents('fiches.csv');
		$aFiches = explode("\n", $contenuFile);
    
		return $aFiches;
	}

	static function create($uneFiche) {
		file_put_contents('fiches.csv', $uneFiche, FILE_APPEND | LOCK_EX);
	}

	static function destroy($p_id) {
		$lstFiches = crud::read();

		unlink('fiches.csv');
		//echo '<pre>';print_r($lstFiches);echo '</pre>';
		foreach($lstFiches as $uneFiche) {
			$aUneFiche = explode(";", $uneFiche);
			$id=$aUneFiche[0];
   
			if($id != $p_id)
				file_put_contents('fiches.csv', $uneFiche."\n",FILE_APPEND | LOCK_EX);
		}
	}

	static function update($id, $uneFiche) {
		crud::destroy($id);
		crud::create($uneFiche);
	}

}

?>