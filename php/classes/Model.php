<?php

class Model {
	public function __construct($data)
	{
		$this->toModel($data);
	}

	public static function findEmail($email)
	{
		$sql = 'SELECT * FROM '.static::$table.' WHERE email = :email';
		$stmt = DB::getConn()->prepare($sql);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR); 
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$class = get_called_class();

		$usuario = new $class([]);
		$usuario->toModel($result);
		return $usuario;
	}

	public static function infoUsuario($email)
	{
		$sql = 'SELECT * FROM '.static::$table.' WHERE email = :email';
		$stmt = DB::getConn()->prepare($sql);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR); 
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	public function toModel($data)
	{
		if (isset($data['id'])) {$this->id = $data['id'];}
		foreach ($data as $key => $value) {
			if (in_array($key, $this->fillable)) {
				$this-> $key = $value;
			}	
		}
	}

	public function save()
	{
		$sql = ($this->id)?$this->update():$this->insert();
		$stmt = DB::getConn()->prepare($sql);
		foreach ($this->fillable as $column) {
			$stmt->bindValue(":$column", $this->$column);
		}
		$stmt->execute();
	}

	public function insert()
	{
		$columns = implode(', ', $this->fillable);
		$placeholders = ':'.implode(', :', $this->fillable);
		return "INSERT INTO ".static::$table." ($columns) VALUES ($placeholders)";
	}

	public function update()
	{
		$set = '';
		foreach ($this->fillable as $column) {
			$set .= "$column=:$column,";
		}
		$set = trim($set, ",");
		return "UPDATE ".static::$table." SET $set WHERE id = ".$this->id;
	}


}

?>