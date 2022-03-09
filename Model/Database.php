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

	public function insertGame(
		$title, $releaseDate, $price, $hook, $youtube, $addDate, $pegi, $editor, $dev, $platform, $category0, $category1, $category2, $category3,$orderImg0, $image0, $orderImg1, $image1, $orderImg2, $image2, $orderImg3, $image3, $orderImg4, $image4, $orderImg5, $image5, $orderParagraph0, $paragraphTitle0, $paragraph0, $orderParagraph1, $paragraphTitle1, $paragraph1, $orderParagraph2, $paragraphTitle2, $paragraph2, $orderParagraph3, $paragraphTitle3, $paragraph3, $orderParagraph4, $paragraphTitle4, $paragraph4, $orderParagraph5, $paragraphTitle5, $paragraph5, $orderParagraph6, $paragraphTitle6, $paragraph6, $orderParagraph7, $paragraphTitle7, $paragraph7, $typeIdMin0, $requireMin0, $typeIdMin1, $requireMin1, $typeIdMin2, $requireMin2, $typeIdMin3, $requireMin3, $typeIdMin4, $requireMin4, $typeIdMin5, $requireMin5, $typeIdMin6, $requireMin6, $typeIdMin7, $requireMin7, $typeIdRec0, $requireRec0, $typeIdRec1, $requireRec1, $typeIdRec2, $requireRec2, $typeIdRec3, $requireRec3, $typeIdRec4, $requireRec4, $typeIdRec5, $requireRec5, $typeIdRec6, $requireRec6, $typeIdRec7, $requireRec7, $languageAudio0, $languageAudio1, $languageAudio2, $languageAudio3, $languageAudio4, $languageText0, $languageText1, $languageText2, $languageText3, $languageText4, $languageText5, $languageText6, $languageText7, $languageText8, $languageText9, $languageAudio5, $languageAudio6, $languageAudio7, $languageAudio8, $languageAudio9, $languageText10, $languageText11, $languageText12, $languageText13, $languageText14, $languageText15, $languageText16, $languageText17, $languageText18, $languageText19) 
	{
		try {
			$request = "
				INSERT INTO game (
					name, releaseDate, price, hook, youtubeLink, addDate, id_pegi, id_editor, id_developper
				) 
				VALUES (
					 :title, :releaseDate, :price, :hook, :youtube, :addDate, :pegi, :editor, :dev 
				);
				INSERT INTO image (
					name, orderImg, id_game
				)
				VALUES (
					:image0, :orderImg0, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO image (
					name, orderImg, id_game
				)
				VALUES (
					:image1, :orderImg1, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO image (
					name, orderImg, id_game
				)
				VALUES (
					:image2, :orderImg2, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO image (
					name, orderImg, id_game
				)
				VALUES (
					:image3, :orderImg3, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO image (
					name, orderImg, id_game
				)
				VALUES (
					:image4, :orderImg4, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO image (
					name, orderImg, id_game
				)
				VALUES (
					:image5, :orderImg5, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle0, :paragraph0, :orderParagraph0, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle1, :paragraph1, :orderParagraph1, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle2, :paragraph2, :orderParagraph2, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle3, :paragraph3, :orderParagraph3, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle4, :paragraph4, :orderParagraph4, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle5, :paragraph5, :orderParagraph5, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle6, :paragraph6, :orderParagraph6, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO paragraph (
					title, paragraph, orderParagraph, id_game
				)
				VALUES (
					:paragraphTitle7, :paragraph7, :orderParagraph7, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO category_game (
					id_category, id_game
				)
				VALUES (
					:category0, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO category_game (
					id_category, id_game
				)
				VALUES (
					:category1, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO category_game (
					id_category, id_game
				)
				VALUES (
					:category2, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO category_game (
					id_category, id_game
				)
				VALUES (
					:category3, ( SELECT MAX(id) FROM game )
				);
				INSERT INTO platform_game (
					id_platform, id_game
				)
				VALUES (
					:platform, ( SELECT MAX(id) FROM game)
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin0, :requireMin0, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin1, :requireMin1, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin2, :requireMin2, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin3, :requireMin3, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin4, :requireMin4, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin5, :requireMin5, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin6, :requireMin6, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdMin7, :requireMin7, (SELECT MAX(id) FROM game), true, false
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec0, :requireRec0, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec1, :requireRec1, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec2, :requireRec2, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec3, :requireRec3, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec4, :requireRec4, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec5, :requireRec5, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec6, :requireRec6, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO type_requirement_game (
					id_type, id_requirement, id_game, minimum, recomandation
				)
				VALUES (
					:typeIdRec7, :requireRec7, (SELECT MAX(id) FROM game), false, true
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio0, (SELECT MAX(id) FROM game), true
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio1, (SELECT MAX(id) FROM game), true
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio2, (SELECT MAX(id) FROM game), true
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio3, (SELECT MAX(id) FROM game), true
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio4, (SELECT MAX(id) FROM game), true
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText0, (SELECT MAX(id) FROM game), false
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText1, (SELECT MAX(id) FROM game), false
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText2, (SELECT MAX(id) FROM game), false
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText3, (SELECT MAX(id) FROM game), false
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText4, (SELECT MAX(id) FROM game), false
				);	
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText5, (SELECT MAX(id) FROM game), false
				);
					
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText6, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText7, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText8, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText9, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio5, (SELECT MAX(id) FROM game), true
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio6, (SELECT MAX(id) FROM game), true
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio7, (SELECT MAX(id) FROM game), true
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio8, (SELECT MAX(id) FROM game), true
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageAudio9, (SELECT MAX(id) FROM game), true
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText10, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText11, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText12, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText13, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText14, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText15, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText16, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText17, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText18, (SELECT MAX(id) FROM game), false
				);
				INSERT INTO language_game (
					id_language, id_game, isAudio
				)
				VALUES (
					:languageText19, (SELECT MAX(id) FROM game), false
				);
				";

			
			$req = $this->prepare($request);
			$req->execute([
				":title" => $title,
				":releaseDate" => $releaseDate,
				":price" => $price,
				":hook" => $hook,
				":youtube" => $youtube,
				":addDate" => $addDate,
				":pegi" => $pegi,
				":editor" => $editor,
				":dev" => $dev,
				":orderImg0" => $orderImg0,
				":image0" => $image0["name"],
				":orderImg1" => $orderImg1,
				":image1" => $image1["name"],
				":orderImg2" => $orderImg2,
				":image2" => $image2["name"],
				":orderImg3" => $orderImg3,
				":image3" => $image3["name"],
				":orderImg4" => $orderImg4,
				":image4" => $image4["name"],
				":orderImg5" => $orderImg5,
				":image5" => $image5["name"],
				":orderParagraph0" => $orderParagraph0,
				":paragraphTitle0" => $paragraphTitle0,
				":paragraph0" => $paragraph0,
				":orderParagraph1" => $orderParagraph1,
				":paragraphTitle1" => $paragraphTitle1,
				":paragraph1" => $paragraph1,
				":orderParagraph2" => $orderParagraph2,
				":paragraphTitle2" => $paragraphTitle2,
				":paragraph2" => $paragraph2,
				":orderParagraph3" => $orderParagraph3,
				":paragraphTitle3" => $paragraphTitle3,
				":paragraph3" => $paragraph3,
				":orderParagraph4" => $orderParagraph4,
				":paragraphTitle4" => $paragraphTitle4,
				":paragraph4" => $paragraph4,
				":orderParagraph5" => $orderParagraph5,
				":paragraphTitle5" => $paragraphTitle5,
				":paragraph5" => $paragraph5,
				":orderParagraph6" => $orderParagraph6,
				":paragraphTitle6" => $paragraphTitle6,
				":paragraph6" => $paragraph6,
				":orderParagraph7" => $orderParagraph7,
				":paragraphTitle7" => $paragraphTitle7,
				":paragraph7" => $paragraph7,
				":category0" => $category0,
				":category1" => $category1,
				":category2" => $category2,
				":category3" => $category3,
				":platform" => $platform,
				":typeIdMin0" => $typeIdMin0,
				":requireMin0" => $requireMin0,
				":typeIdMin1" => $typeIdMin1,
				":requireMin1" => $requireMin1,
				":typeIdMin2" => $typeIdMin2,
				":requireMin2" => $requireMin2,
				":typeIdMin3" => $typeIdMin3,
				":requireMin3" => $requireMin3,
				":typeIdMin4" => $typeIdMin4,
				":requireMin4" => $requireMin4,
				":typeIdMin5" => $typeIdMin5,
				":requireMin5" => $requireMin5,
				":typeIdMin6" => $typeIdMin6,
				":requireMin6" => $requireMin6,
				":typeIdMin7" => $typeIdMin7,
				":requireMin7" => $requireMin7,
				":typeIdRec0" => $typeIdRec0,
				":requireRec0" => $requireRec0,
				":typeIdRec1" => $typeIdRec1,
				":requireRec1" => $requireRec1,
				":typeIdRec2" => $typeIdRec2,
				":requireRec2" => $requireRec2,
				":typeIdRec3" => $typeIdRec3,
				":requireRec3" => $requireRec3,
				":typeIdRec4" => $typeIdRec4,
				":requireRec4" => $requireRec4,
				":typeIdRec5" => $typeIdRec5,
				":requireRec5" => $requireRec5,
				":typeIdRec6" => $typeIdRec6,
				":requireRec6" => $requireRec6,
				":typeIdRec7" => $typeIdRec7,
				":requireRec7" => $requireRec7,
				":languageAudio0" => $languageAudio0,
				":languageAudio1" => $languageAudio1,
				":languageAudio2" => $languageAudio2,
				":languageAudio3" => $languageAudio3,
				":languageAudio4" => $languageAudio4,
				":languageText0" => $languageText0,
				":languageText1" => $languageText1,
				":languageText2" => $languageText2,
				":languageText3" => $languageText3,
				":languageText4" => $languageText4,
				":languageText5" => $languageText5,
				":languageText6" => $languageText6,
				":languageText7" => $languageText7,
				":languageText8" => $languageText8,
				":languageText9" => $languageText9,
				":languageAudio5" => $languageAudio5,
				":languageAudio6" => $languageAudio6,
				":languageAudio7" => $languageAudio7,
				":languageAudio8" => $languageAudio8,
				":languageAudio9" => $languageAudio9,
				":languageText10" => $languageText10,
				":languageText11" => $languageText11,
				":languageText12" => $languageText12,
				":languageText13" => $languageText13,
				":languageText14" => $languageText14,
				":languageText15" => $languageText15,
				":languageText16" => $languageText16,
				":languageText17" => $languageText17,
				":languageText18" => $languageText18,
				":languageText19" => $languageText19,
			]);
		}
		catch(\Exception $e) {
			throw new \Exception($e->getMessage());
		}

		/* 
		var_dump($category0);
		var_dump($category1);
		var_dump($category2);
		var_dump($category3);
		var_dump($title);
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