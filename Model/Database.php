<?php 

class DataBase extends PDO {

    public function __construct($MYSQL_HOST, $MYSQL_DATABASE, $MYSQL_USER, $MYSQL_PASSWORD){
		parent::__construct('mysql:host='.$MYSQL_HOST.';dbname='.$MYSQL_DATABASE.';charset=utf8', $MYSQL_USER, $MYSQL_PASSWORD);
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
}