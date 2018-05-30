<?php

	function existeParametro($nombre, $arrayDonde) {
		return array_key_exists($nombre, $arrayDonde);
	}

	function existeFileSinError($nombre) {
		if (existeParametro($nombre, $_FILES) && $_FILES[$nombre]['error'] === UPLOAD_ERR_OK) {
			return true;
		}
		return false;
	}

	function valorParametro($nombre, $arrayDonde, $default = null) {
		if (existeParametro($nombre, $arrayDonde) && !empty($arrayDonde[$nombre])) {
			return $arrayDonde[$nombre];
		}

		return $default;
	}

	function infoUsuario($email) {

		$existe = false;
		$usuarioEncontrado = null;
		

		$usuario = Usuario::findEmail($email);
		if ($usuario->email == $email) {
			$existe = true;
		} else {
			$existe = false;
		};		

		$usuarioEncontrado = Usuario::infoUsuario($email);

		return [
			'existe' => $existe,
			'usuario' => $usuarioEncontrado
		];


	}

	function guardarAvatar($nombreDelInputFile) {
		if (array_key_exists($nombreDelInputFile, $_FILES)) {
			$file = $_FILES[$nombreDelInputFile];

			$nombre = $file['name'];
			$tmp = $file['tmp_name'];
			$ext = pathinfo($nombre, PATHINFO_EXTENSION);
			$carpetaDondeQuieroGuardar = "./img/avatar/";

			if(!file_exists($carpetaDondeQuieroGuardar)) {
				$old = umask(0);
				mkdir($carpetaDondeQuieroGuardar, 0777);
				umask($old);
			}

			$date = new DateTime();
			$urlFinalConNombreYExtension = $carpetaDondeQuieroGuardar . "perfil_".$date->getTimestamp()."." . $ext;
			move_uploaded_file($tmp, $urlFinalConNombreYExtension);
			return $urlFinalConNombreYExtension;
		}
	}

?>
