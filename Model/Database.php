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

	public function insertGame($title, $releaseDate, $price, $youtube, $addDate, $pegi, $editor, $dev, $image0, $image1, $image2, $image3, $image4, $image5, $paragraphTitle0, $paragraph0, $paragraphTitle1, $paragraph1, $paragraphTitle2, $paragraph2, $paragraphTitle3, $paragraph3, $paragraphTitle4, $paragraph4, $paragraphTitle5, $paragraph5, $paragraphTitle6, $paragraph6, $paragraphTitle7, $paragraph7) 
	{
		try {
			$request = "
				INSERT INTO game (
					name, releaseDate, price, youtubeLink, addDate, id_pegi, id_editor, id_developper
				) 
				VALUES (
					 :title, :releaseDate, :price, :youtube, :addDate, :pegi, :editor, :dev 
				);
				INSERT INTO image (
					name
				)
				VALUES (
					:image0
				);
				INSERT INTO image (
					name
				)
				VALUES (
					:image1
				);
				INSERT INTO image (
					name
				)
				VALUES (
					:image2
				);
				INSERT INTO image (
					name
				)
				VALUES (
					:image3
				);
				INSERT INTO image (
					name
				)
				VALUES (
					:image4
				);
				INSERT INTO image (
					name
				)
				VALUES (
					:image5
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle0, :paragraph0
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle1, :paragraph1
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle2, :paragraph2
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle3, :paragraph3
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle4, :paragraph4
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle5, :paragraph5
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle6, :paragraph6
				);
				INSERT INTO paragraph (
					title, paragraph
				)
				VALUES (
					:paragraphTitle7, :paragraph7
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
				":dev" => $dev,
				":image0" => $image0["name"],
				":image1" => $image1["name"],
				":image2" => $image2["name"],
				":image3" => $image3["name"],
				":image4" => $image4["name"],
				":image5" => $image5["name"],
				":paragraphTitle0" => $paragraphTitle0,
				":paragraph0" => $paragraph0,
				":paragraphTitle1" => $paragraphTitle1,
				":paragraph1" => $paragraph1,
				":paragraphTitle2" => $paragraphTitle2,
				":paragraph2" => $paragraph2,
				":paragraphTitle3" => $paragraphTitle3,
				":paragraph3" => $paragraph3,
				":paragraphTitle4" => $paragraphTitle4,
				":paragraph4" => $paragraph4,
				":paragraphTitle5" => $paragraphTitle5,
				":paragraph5" => $paragraph5,
				":paragraphTitle6" => $paragraphTitle6,
				":paragraph6" => $paragraph6,
				":paragraphTitle7" => $paragraphTitle7,
				":paragraph7" => $paragraph7,
				
			]);
		}
		catch(\Exception $e) {
			throw new \Exception($e->getMessage());
		}
		/* var_dump($title);
		var_dump($releaseDate);
		var_dump($price);
		var_dump($youtube);
		var_dump($addDate);
		var_dump($pegi);
		var_dump($editor);
		var_dump($dev);
		var_dump($image0);
		var_dump($image1);
		var_dump($image2);
		var_dump($image3);
		var_dump($image4);
		var_dump($image5);
		var_dump($paragraph0);
		var_dump($paragraphTitle0);
		var_dump($paragraph1);
		var_dump($paragraphTitle1);
		var_dump($paragraph2);
		var_dump($paragraphTitle2);
		var_dump($paragraph3);
		var_dump($paragraphTitle3);
		var_dump($paragraph4);
		var_dump($paragraphTitle4);
		var_dump($paragraph5);
		var_dump($paragraphTitle5);
		var_dump($paragraph6);
		var_dump($paragraphTitle6);
		var_dump($paragraph7);
		var_dump($paragraphTitle7); */

	}
}