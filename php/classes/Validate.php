<?php

class Validate {

	public function validarCampos($formulario) {
		return array_search("", $formulario) == false;
	}

	public function usuarioExiste($emailFormulario) {
		$usuarioEnDB = Usuario::findEmail($emailFormulario);
		if ($usuarioEnDB->email == $emailFormulario) {
			return true;
		} else {
			return false;
		}


	}

}

?>

