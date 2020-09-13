<?php
/**
 * 
 */
class KitBuilder
{
	private $conn;
	
	function __construct(\PDO $pdo)
	{
		$this -> conn = $pdo;
	}

	public function addKit($array)
	{
		$sql2 = "SELECT * FROM `kits` WHERE `KITDESC` = :descr";

		$stmt2 = $this -> conn -> prepare($sql2);

		$stmt2 -> execute(['descr' => $array[0]['kit']]);

		$data = $stmt2 -> fetchAll();

		$sql = "INSERT INTO `kits`(`KITDESC`, `KITSKU`, `KITTYPE`, `KITQTY`, `COMPSKU`, `COMPDESC`, `COMPQTY`) VALUES (:kit, :kitsku, :type, :kitq, :compsku, :comp, :compq)";

		$stmt = $this -> conn -> prepare($sql);

		if (!empty($array)) {
			foreach ($array as $key => $value) {
				$stmt -> execute([
					"kit"     => $array[$key]['kit'],
					"kitsku"  => $array[$key]['kitsku'],
					"type"    => $array[$key]['kitTYPE'],
					"kitq"    => $array[$key]['kitQTY'],
					"compsku" => $array[$key]['sku'],
					"comp"    => $array[$key]['desc'],
					"compq"   => $array[$key]['qty']
				]);
			}
			return TRUE;
		}

	return FALSE;
	}

	public function loadKits()
	{
		$sql = "SELECT * FROM `kits`";

		$stmt = $this -> conn -> prepare($sql);

		$stmt -> execute();

		$data = $stmt -> fetchAll();

		if (!empty($data)) {
			return $data;
		}
	return FALSE;
	}

	public function loadKit($name)
	{
		$sql = "SELECT * FROM `kits` WHERE `KITDESC` = :name";

		$stmt = $this -> conn -> prepare($sql);

		$stmt -> execute(['name' => $name]);

		$data = $stmt -> fetchAll();

		if (!empty($data)) {
			return $data;
		}
	return FALSE;
	}
}