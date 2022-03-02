<?php 
	namespace Aurelien\Nebula;
	use \PDO;


class DataBase extends PDO {

    public function __construct(){
		require_once($_SERVER['DOCUMENT_ROOT'].'/Environment/environment.php');
		return parent::__construct('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DATABASE.';charset=utf8', MYSQL_USER, MYSQL_PASSWORD);
	}

	public function select($sqlQuery, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
	{
		$statement = $this->prepare($sqlQuery);
		foreach ($array as $key => $value):
			$statement->bindValue("$key", $value);
		endforeach;
		$statement->execute();
		$statement->setFetchMode(PDO::FETCH_ASSOC, );
		return $statement->fetch();
	}

	/**
	 * @param $sqlQuery
	 * @param int $fetchMode
	 * @return array|false
	 */
	public function selectAll($sqlQuery, $fetchMode = PDO::FETCH_ASSOC)
	{
		$statement = $this->prepare($sqlQuery);
		$statement->execute();
		if(!empty($fetchMode) AND $fetchMode==PDO::FETCH_ASSOC)
			$statement->setFetchMode(PDO::FETCH_ASSOC);
		return $statement->fetchAll();
	}

	/**
	 * @param $sqlQuery
	 * @param array $array
	 */
	public function updateOrDeleteOrAdd($sqlQuery, $array = array())
	{
		$statement = $this->prepare($sqlQuery);
		foreach ($array as $key => $value):
			$statement->bindValue("$key", $value);
		endforeach;
		$statement->execute();
	}

	public function insertGame($title, $releaseDate, $price, $youtube, $addDate, $pegi, $editor, $dev) 
	{
		try {
			$request = "
				INSERT INTO game (
					name, releaseDate, price, youtubeLink, addDate, id_pegi, id_editor, id_developper
				) 
				VALUES (
					 :title, :releaseDate, :price, :youtube, :addDate, :pegi, :editor, :dev 
				)";

			$req = $this->prepare($request);
			$req->execute([
				":title" => $title,
				":releaseDate" => $releaseDate,
				":price" => $price,
				":youtube" => $youtube,
				":addDate" => $addDate,
				":pegi" => $pegi,
				":editor" => $editor,
				":dev" => $dev
			]);
		}
		catch(\Exception $e) {
			throw new \Exception($e->getMessage());
		}
	}
}