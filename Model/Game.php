<?php

/**
 *
 */
class User {
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $categoryId1;
    /**
     * @var
     */
    private $categoryId2;
    /**
     * @var
     */
    private $categoryId3;
    /**
     * @var
     */
    private $categoryId4;
    /**
     * @var
     */
    private $developperId;
    /**
     * @var
     */
    private $editorId;
    /**
     * @var
     */
    private $platform;
    /**
     * @var
     */
    private $dateLaunch;
    /**
     * @var
     */
    private $price;
    /**
     * @var
     */
    private $image1;
    /**
     * @var
     */
    private $image2;
    /**
     * @var
     */
    private $image3;
    /**
     * @var
     */
    private $image4;
    /**
     * @var
     */
    private $pegiId;
    /**
     * @var
     */
    private $description1;
    /**
     * @var
     */
    private $description2;
    /**
     * @var
     */
    private $description3;
    /**
     * @var
     */
    private $description4;
    /**
     * @var
     */
    private $description5;
    /**
     * @var
     */
    private $description6;
    /**
     * @var
     */
    private $description7;
    /**
     * @var
     */
    private $description8;
    /**
     * @var
     */
    private $youtubeLink;
    /**
     * @var
     */
    private $osMinId;
    /**
     * @var
     */
    private $cpuMinId;
    /**
     * @var
     */
    private $ramMinId;
    /**
     * @var
     */
    private $storageMinId;
    /**
     * @var
     */
    private $directxMinId;
    /**
     * @var
     */
    private $gpuMinId;
    /**
     * @var
     */
    private $osRecId;
    /**
     * @var
     */
    private $cpuRecId;
    /**
     * @var
     */
    private $ramRecId;
    /**
     * @var
     */
    private $storageRecId;
    /**
     * @var
     */
    private $directxRecId;
    /**
     * @var
     */
    private $gpuRecId;
    /**
     * @var
     */
    private $languageAudioId1;
    /**
     * @var
     */
    private $languageAudioId2;
    /**
     * @var
     */
    private $languageAudioId3;
    /**
     * @var
     */
    private $languageAudioId4;
    /**
     * @var
     */
    private $languageAudioId5;
    /**
     * @var
     */
    private $languageAudioId6;
    /**
     * @var
     */
    private $languageAudioId7;
    /**
     * @var
     */
    private $languageAudioId8;
    /**
     * @var
     */
    private $languageAudioId9;
    /**
     * @var
     */
    private $languageAudioId10;
    /**
     * @var
     */
    private $languageTextId1;
    /**
     * @var
     */
    private $languageTextId2;
    /**
     * @var
     */
    private $languageTextId3;
    /**
     * @var
     */
    private $languageTextId4;
    /**
     * @var
     */
    private $languageTextId5;
    /**
     * @var
     */
    private $languageTextId6;
    /**
     * @var
     */
    private $languageTextId7;
    /**
     * @var
     */
    private $languageTextId8;
    /**
     * @var
     */
    private $languageTextId9;
    /**
     * @var
     */
    private $languageTextId10;
    /**
     * @var
     */
    private $languageTextId11;
    /**
     * @var
     */
    private $languageTextId12;
    /**
     * @var
     */
    private $languageTextId13;
    /**
     * @var
     */
    private $languageTextId14;
    /**
     * @var
     */
    private $languageTextId15;
    /**
     * @var
     */
    private $languageTextId16;
    /**
     * @var
     */
    private $languageTextId17;
    /**
     * @var
     */
    private $languageTextId18;
    /**
     * @var
     */
    private $languageTextId19;
    /**
     * @var
     */
    private $languageTextId20;
    /**
     * @var
     */
    private $dateAdd;
    
    /**
     * @param int $id
     * @param string $name
     * @param int $categoryId1
     * @param int $categoryId2
     * @param int $categoryId3
     * @param int $categoryId4
     * @param string $developperId
     * @param string $editorId
     * @param string $platform
     * @param string $dateLaunch
     * @param string $price
     * @param string $image1
     * @param string $image2
     * @param string $image3
     * @param string $image4
     * @param string $pegiId
     * @param string $description1
     * @param string $description2
     * @param string $description3
     * @param string $description4
     * @param string $description5
     * @param string $description6
     * @param string $description7
     * @param string $description8
     * @param string $youtubeLink
     * @param string $osMinId
     * @param string $cpuMinId
     * @param string $ramMinId
     * @param string $storageMinId
     * @param string $directxMinId
     * @param string $gpuMinId
     * @param string $osRecId
     * @param string $cpuRecId
     * @param string $ramRecId
     * @param string $storageRecId
     * @param string $directxRecId
     * @param string $gpuRecId
     * @param string $languageAudioId1
     * @param string $languageAudioId2
     * @param string $languageAudioId3
     * @param string $languageAudioId4
     * @param string $languageAudioId5
     * @param string $languageAudioId6
     * @param string $languageAudioId7
     * @param string $languageAudioId8
     * @param string $languageAudioId9
     * @param string $languageAudioId10
     * @param string $languageTextId1
     * @param string $languageTextId2
     * @param string $languageTextId3
     * @param string $languageTextId4
     * @param string $languageTextId5
     * @param string $languageTextId6
     * @param string $languageTextId7
     * @param string $languageTextId8
     * @param string $languageTextId9
     * @param string $languageTextId10
     * @param string $languageTextId11
     * @param string $languageTextId12
     * @param string $languageTextId13
     * @param string $languageTextId14
     * @param string $languageTextId15
     * @param string $languageTextId16
     * @param string $languageTextId17
     * @param string $languageTextId18
     * @param string $languageTextId19
     * @param string $languageTextId20
     * @param string $dateAdd
     */
    public function __construct($id = '', $name = '', $categoryId1 = '', $categoryId2 = '', $categoryId3 = '', $categoryId4 = '', $developperId = '', $editorId = '', $platform = '', $dateLaunch = '', $price ='', $image1 = '', $image2 = '', $image3 = '', $image4 = '', $pegiId = '', $description1 = '', $description2 = '', $description3 = '', $description4 = '', $description5 = '', $description6 = '', $description7 = '', $description8 = '', $youtubeLink = '', $osMinId = '', $cpuMinId = '', $ramMinId = '', $storageMinId = '', $directxMinId = '', $gpuMinId = '', $osRecId = '', $cpuRecId = '', $ramRecId = '', $storageRecId = '', $directxRecId = '', $gpuRecId = '', $languageAudioId1 = '', $languageAudioId2 = '', $languageAudioId3 = '', $languageAudioId4 = '', $languageAudioId5 = '', $languageAudioId6 = '', $languageAudioId7 = '', $languageAudioId8 = '', $languageAudioId9 = '', $languageAudioId10 = '', $languageTextId1 = '', $languageTextId2 = '', $languageTextId3 = '', $languageTextId4 = '', $languageTextId5 = '', $languageTextId6 = '', $languageTextId7 = '', $languageTextId8 = '', $languageTextId9 = '', $languageTextId10 = '', $languageTextId11 = '', $languageTextId12 = '', $languageTextId13 = '', $languageTextId14 = '', $languageTextId15 = '', $languageTextId16 = '', $languageTextId17 = '', $languageTextId18 = '', $languageTextId19 = '', $languageTextId20 = '', $dateAdd = '') {

    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCategoryId1() {
        return $this->categoryId1;
    }

    /**
     * @param mixed $categoryId1
     */
    public function setCategoryId1($categoryId1): void {
        $this->categoryId1 = $categoryId1;
    }

    /**
     * @return mixed
     */
    public function getCategoryId2() {
        return $this->categoryId2;
    }

    /**
     * @param mixed $categoryId2
     */
    public function setCategoryId2($categoryId2): void {
        $this->categoryId2 = $categoryId2;
    }

    /**
     * @return mixed
     */
    public function getCategoryId3() {
        return $this->categoryId3;
    }

    /**
     * @param mixed $categoryId3
     */
    public function setCategoryId3($categoryId3): void {
        $this->categoryId3 = $categoryId3;
    }

    /**
     * @return mixed
     */
    public function getCategoryId4() {
        return $this->categoryId4;
    }

    /**
     * @param mixed $categoryId4
     */
    public function setCategoryId4($categoryId4): void {
        $this->categoryId4 = $categoryId4;
    }

    /**
     * @return mixed
     */
    public function getDevelopperId() {
        return $this->developperId;
    }

    /**
     * @param mixed $developperId
     */
    public function setDevelopperId($developperId): void {
        $this->developperId = $developperId;
    }

    /**
     * @return mixed
     */
    public function getEditorId() {
        return $this->editorId;
    }

    /**
     * @param mixed $editorId
     */
    public function setEditorId($editorId): void {
        $this->editorId = $editorId;
    }

    /**
     * @return mixed
     */
    public function getPlatform() {
        return $this->platform;
    }

    /**
     * @param mixed $platform
     */
    public function setPlatform($platform): void {
        $this->platform = $platform;
    }

    /**
     * @return mixed
     */
    public function getDateLaunch() {
        return $this->dateLaunch;
    }

    /**
     * @param mixed $dateLaunch
     */
    public function setDateLaunch($dateLaunch): void {
        $this->dateLaunch = $dateLaunch;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getImage1() {
        return $this->image1;
    }

    /**
     * @param mixed $image1
     */
    public function setImage1($image1): void {
        $this->image1 = $image1;
    }

    /**
     * @return mixed
     */
    public function getImage2() {
        return $this->image2;
    }

    /**
     * @param mixed $image2
     */
    public function setImage2($image2): void {
        $this->image2 = $image2;
    }

    /**
     * @return mixed
     */
    public function getImage3() {
        return $this->image3;
    }

    /**
     * @param mixed $image3
     */
    public function setImage3($image3): void {
        $this->image3 = $image3;
    }

    /**
     * @return mixed
     */
    public function getImage4() {
        return $this->image4;
    }

    /**
     * @param mixed $image4
     */
    public function setImage4($image4): void {
        $this->image4 = $image4;
    }

    /**
     * @return mixed
     */
    public function getPegiId() {
        return $this->pegiId;
    }

    /**
     * @param mixed $pegiId
     */
    public function setPegiId($pegiId): void {
        $this->pegiId = $pegiId;
    }

    /**
     * @return mixed
     */
    public function getDescription1() {
        return $this->description1;
    }

    /**
     * @param mixed $description1
     */
    public function setDescription1($description1): void {
        $this->description1 = $description1;
    }

    /**
     * @return mixed
     */
    public function getDescription2() {
        return $this->description2;
    }

    /**
     * @param mixed $description2
     */
    public function setDescription2($description2): void {
        $this->description2 = $description2;
    }

    /**
     * @return mixed
     */
    public function getDescription3() {
        return $this->description3;
    }

    /**
     * @param mixed $description3
     */
    public function setDescription3($description3): void {
        $this->description3 = $description3;
    }

    /**
     * @return mixed
     */
    public function getDescription4() {
        return $this->description4;
    }

    /**
     * @param mixed $description4
     */
    public function setDescription4($description4): void {
        $this->description4 = $description4;
    }

    /**
     * @return mixed
     */
    public function getDescription5() {
        return $this->description5;
    }

    /**
     * @param mixed $description5
     */
    public function setDescription5($description5): void {
        $this->description5 = $description5;
    }

    /**
     * @return mixed
     */
    public function getDescription6() {
        return $this->description6;
    }

    /**
     * @param mixed $description6
     */
    public function setDescription6($description6): void {
        $this->description6 = $description6;
    }

    /**
     * @return mixed
     */
    public function getDescription7() {
        return $this->description7;
    }

    /**
     * @param mixed $description7
     */
    public function setDescription7($description7): void {
        $this->image1 = $description7;
    }

    /**
     * @return mixed
     */
    public function getDescription8() {
        return $this->description8;
    }

    /**
     * @param mixed $description8
     */
    public function setDescription8($description8): void {
        $this->description8 = $description8;
    }

    /**
     * @return mixed
     */
    public function getYoutubeLink() {
        return $this->youtubeLink;
    }

    /**
     * @param mixed $youtubeLink
     */
    public function setYoutubeLink($youtubeLink): void {
        $this->image1 = $youtubeLink;
    }

    /**
     * @return mixed
     */
    public function getOsMinId() {
        return $this->osMinId;
    }

    /**
     * @param mixed $osMinId
     */
    public function setOsMinId($osMinId): void {
        $this->osMinId = $osMinId;
    }

    /**
     * @return mixed
     */
    public function getCpuMinId() {
        return $this->cpuMinId;
    }

    /**
     * @param mixed $cpuMinId
     */
    public function setCpuMinId($cpuMinId): void {
        $this->cpuMinId = $cpuMinId;
    }

    /**
     * @return mixed
     */
    public function getRamMinId() {
        return $this->ramMinId;
    }

    /**
     * @param mixed $ramMinId
     */
    public function setRamMinId($ramMinId): void {
        $this->ramMinId = $ramMinId;
    }

    /**
     * @return mixed
     */
    public function getStorageMinId() {
        return $this->storageMinId;
    }

    /**
     * @param mixed $storageMinId
     */
    public function setStorageMinId($storageMinId): void {
        $this->storageMinId = $storageMinId;
    }

    /**
     * @return mixed
     */
    public function getDirectxMinId() {
        return $this->directxMinId;
    }

    /**
     * @param mixed $directxMinId
     */
    public function setDirectxMinId($directxMinId): void {
        $this->directxMinId = $directxMinId;
    }

    /**
     * @return mixed
     */
    public function getGpuMinId() {
        return $this->gpuMinId;
    }

    /**
     * @param mixed $gpuMinId
     */
    public function setGpuMinId($gpuMinId): void {
        $this->gpuMinId = $gpuMinId;
    }

    /**
     * @return mixed
     */
    public function getOsRecId() {
        return $this->osRecId;
    }

    /**
     * @param mixed $osRecId
     */
    public function setOsRec($osRecId): void {
        $this->osRecId = $osRecId;
    }

    /**
     * @return mixed
     */
    public function getCpuRecId() {
        return $this->cpuRecId;
    }

    /**
     * @param mixed $cpuRecId
     */
    public function setCpuRecId($cpuRecId): void {
        $this->cpuRecId = $cpuRecId;
    }

    /**
     * @return mixed
     */
    public function getRamRecId() {
        return $this->ramRecId;
    }

    /**
     * @param mixed $ramRec
     */
    public function setRamRecId($ramRecId): void {
        $this->ramRecId = $ramRecId;
    }

    /**
     * @return mixed
     */
    public function getStorageRecId() {
        return $this->storageRecId;
    }

    /**
     * @param mixed $storageRecId
     */
    public function setStorageRecId($storageRecId): void {
        $this->storageRecId = $storageRecId;
    }

    /**
     * @return mixed
     */
    public function getDirectxRecId() {
        return $this->directxRecId;
    }

    /**
     * @param mixed $directxRecId
     */
    public function setDirectxRecId($directxRecId): void {
        $this->directxRecId = $directxRecId;
    }

    /**
     * @return mixed
     */
    public function getGpuRecId() {
        return $this->gpuRecId;
    }

    /**
     * @param mixed $gpuRecId
     */
    public function setGpuRec($gpuRecId): void {
        $this->gpuRecId = $gpuRecId;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId1() {
        return $this->languageAudioId1;
    }

    /**
     * @param mixed $languageAudioId1
     */
    public function setLanguageAudioId1($languageAudioId1): void {
        $this->languageAudioId1 = $languageAudioId1;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId2() {
        return $this->languageAudioId2;
    }

    /**
     * @param mixed $languageAudioId2
     */
    public function setLanguageAudioId2($languageAudioId2): void {
        $this->languageAudioId2 = $languageAudioId2;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId3() {
        return $this->languageAudioId3;
    }

    /**
     * @param mixed $languageAudioId3
     */
    public function setLanguageAudioId3($languageAudioId3): void {
        $this->languageAudioId3 = $languageAudioId3;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId4() {
        return $this->languageAudioId4;
    }

    /**
     * @param mixed $languageAudioId4
     */
    public function setLanguageAudioId4($languageAudioId4): void {
        $this->languageAudioId4 = $languageAudioId4;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId5() {
        return $this->languageAudioId5;
    }

    /**
     * @param mixed $languageAudioId5
     */
    public function setLanguageAudioId5($languageAudioId5): void {
        $this->languageAudioId5 = $languageAudioId5;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId6() {
        return $this->languageAudioId6;
    }

    /**
     * @param mixed $languageAudioId6
     */
    public function setLanguageAudioId6($languageAudioId6): void {
        $this->languageAudioId6 = $languageAudioId6;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId7() {
        return $this->languageAudioId7;
    }

    /**
     * @param mixed $languageAudioId7
     */
    public function setLanguageAudioId7($languageAudioId7): void {
        $this->languageAudioId7 = $languageAudioId7;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId8() {
        return $this->languageAudioId8;
    }

    /**
     * @param mixed $languageAudioId8
     */
    public function setLanguageAudioId8($languageAudioId8): void {
        $this->languageAudioId8 = $languageAudioId8;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId9() {
        return $this->languageAudioId9;
    }

    /**
     * @param mixed $languageAudioId9
     */
    public function setLanguageAudioId9($languageAudioId9): void {
        $this->languageAudioId9 = $languageAudioId9;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudioId10() {
        return $this->languageAudioId10;
    }

    /**
     * @param mixed $languageAudioId10
     */
    public function setLanguageAudioId10($languageAudioId10): void {
        $this->languageAudioId10 = $languageAudioId10;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId1() {
        return $this->languageTextId1;
    }

    /**
     * @param mixed $languageTextId1
     */
    public function setLanguagetext1($languageTextId1): void {
        $this->languageTextId1 = $languageTextId1;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId2() {
        return $this->languageTextId2;
    }

    /**
     * @param mixed $languageTextId2
     */
    public function setLanguagetextId2($languageTextId2): void {
        $this->languageTextId2 = $languageTextId2;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId3() {
        return $this->languageTextId3;
    }

    /**
     * @param mixed $languageTextId3
     */
    public function setLanguagetext3($languageTextId3): void {
        $this->languageTextId3 = $languageTextId3;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId4() {
        return $this->languageTextId4;
    }

    /**
     * @param mixed $languageTextId4
     */
    public function setLanguagetext4($languageTextId4): void {
        $this->languageTextId4 = $languageTextId4;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId5() {
        return $this->languageTextId5;
    }

    /**
     * @param mixed $languageTextId5
     */
    public function setLanguagetextId5($languageTextId5): void {
        $this->languageTextId5 = $languageTextId5;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId6() {
        return $this->languageTextId6;
    }

    /**
     * @param mixed $languageTextId6
     */
    public function setLanguagetextId6($languageTextId6): void {
        $this->languageTextId6 = $languageTextId6;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId7() {
        return $this->languageTextId7;
    }

    /**
     * @param mixed $languageTextId7
     */
    public function setLanguagetextId7($languageTextId7): void {
        $this->languageTextId7 = $languageTextId7;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId8() {
        return $this->languageTextId8;
    }

    /**
     * @param mixed $languageTextId8
     */
    public function setLanguagetextId8($languageTextId8): void {
        $this->languageTextId8 = $languageTextId8;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId9() {
        return $this->languageTextId9;
    }

    /**
     * @param mixed $languageTextId9
     */
    public function setLanguagetextId9($languageTextId9): void {
        $this->languageTextId9 = $languageTextId9;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId10() {
        return $this->languageTextId10;
    }

    /**
     * @param mixed $languageTextId10
     */
    public function setLanguagetextId10($languageTextId10): void {
        $this->languageTextId10 = $languageTextId10;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId11() {
        return $this->languageTextId11;
    }

    /**
     * @param mixed $languageTextId11
     */
    public function setLanguagetextId11($languageTextId11): void {
        $this->languageTextId11 = $languageTextId11;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId12() {
        return $this->languageTextId12;
    }

    /**
     * @param mixed $languageTextId12
     */
    public function setLanguagetextId12($languageTextId12): void {
        $this->languageTextId12 = $languageTextId12;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId13() {
        return $this->languageTextId13;
    }

    /**
     * @param mixed $languageTextId13
     */
    public function setLanguagetextId13($languageTextId13): void {
        $this->languageTextId13 = $languageTextId13;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId14() {
        return $this->languageTextId14;
    }

    /**
     * @param mixed $languageTextId14
     */
    public function setLanguagetextId14($languageTextId14): void {
        $this->languageTextId14 = $languageTextId14;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId15() {
        return $this->languageTextId15;
    }

    /**
     * @param mixed $languageTextId15
     */
    public function setLanguagetextId15($languageTextId15): void {
        $this->languageTextId15 = $languageTextId15;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId16() {
        return $this->languageTextId16;
    }

    /**
     * @param mixed $languageTextId16
     */
    public function setLanguagetextId16($languageTextId16): void {
        $this->languageTextId16 = $languageTextId16;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId17() {
        return $this->languageTextId17;
    }

    /**
     * @param mixed $languageTextId17
     */
    public function setLanguagetextId17($languageTextId17): void {
        $this->languageTextId17 = $languageTextId17;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId18() {
        return $this->languageTextId18;
    }

    /**
     * @param mixed $languageTextId18
     */
    public function setLanguagetextId18($languageTextId18): void {
        $this->languageTextId18 = $languageTextId18;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId19() {
        return $this->languageTextId19;
    }

    /**
     * @param mixed $languageTextId19
     */
    public function setLanguagetextId19($languageTextId19): void {
        $this->languageTextId19 = $languageTextId19;
    }

    /**
     * @return mixed
     */
    public function getLanguagetextId20() {
        return $this->languageTextId20;
    }

    /**
     * @param mixed $languageTextId20
     */
    public function setLanguagetextId20($languageTextId20): void {
        $this->languageTextId20 = $languageTextId20;
    }

    /**
     * @return mixed
     */
    public function getDateAdd() {
        return $this->dateAdd;
    }

    /**
     * @param mixed $dateAdd
     */
    public function setDateAdd($dateAdd): void {
        $this->dateAdd = $dateAdd;
    }

    /**
     * @param $dbc
     * @return false|string
     */
    public static function getGamesList($dbc) {
        $sqlQuery = 'SELECT id, name FROM games ORDER BY id';
        $statement = $dbc->query($sqlQuery);
        $games = $statement->fetchAll(PDO::FETCH_ASSOC);
        $gamesJson = json_encode($games);
        return $users;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function getUserById($dbc, $id) {
        $sqlQuery = 'SELECT id, name FROM games WHERE id = :id';
        $bindParam = array('id' => $id);
        $gameById = $dbc->select($sqlQuery, $bindParam);
        $gameByIdJson = json_encode($gameById);
        return $gameByIdJson;
    }

    /**
     * @param int $id
     * @param string $name
     * @param int $categoryId1
     * @param int $categoryId2
     * @param int $categoryId3
     * @param int $categoryId4
     * @param string $developperId
     * @param string $editorId
     * @param string $platform
     * @param string $dateLaunch
     * @param string $price
     * @param string $image1
     * @param string $image2
     * @param string $image3
     * @param string $image4
     * @param string $pegiId
     * @param string $description1
     * @param string $description2
     * @param string $description3
     * @param string $description4
     * @param string $description5
     * @param string $description6
     * @param string $description7
     * @param string $description8
     * @param string $youtubeLink
     * @param string $osMinId
     * @param string $cpuMinId
     * @param string $ramMinId
     * @param string $storageMinId
     * @param string $directxMinId
     * @param string $gpuMinId
     * @param string $osRecId
     * @param string $cpuRecId
     * @param string $ramRecId
     * @param string $storageRecId
     * @param string $directxRecId
     * @param string $gpuRecId
     * @param string $languageAudioId1
     * @param string $languageAudioId2
     * @param string $languageAudioId3
     * @param string $languageAudioId4
     * @param string $languageAudioId5
     * @param string $languageAudioId6
     * @param string $languageAudioId7
     * @param string $languageAudioId8
     * @param string $languageAudioId9
     * @param string $languageAudioId10
     * @param string $languageTextId1
     * @param string $languageTextId2
     * @param string $languageTextId3
     * @param string $languageTextId4
     * @param string $languageTextId5
     * @param string $languageTextId6
     * @param string $languageTextId7
     * @param string $languageTextId8
     * @param string $languageTextId9
     * @param string $languageTextId10
     * @param string $languageTextId11
     * @param string $languageTextId12
     * @param string $languageTextId13
     * @param string $languageTextId14
     * @param string $languageTextId15
     * @param string $languageTextId16
     * @param string $languageTextId17
     * @param string $languageTextId18
     * @param string $languageTextId19
     * @param string $languageTextId20
     * @param string $dateAdd
     */
    public static function addGame($dbc, $id, $name, $categoryId1, $categoryId2, $categoryId3, $categoryId4, $developperId, $editorId, $platform, $dateLaunch, $price, $image1, $image2, $image3, $image4, $pegiId, $description1, $description2, $description3, $description4, $description5, $description6, $description7, $description8, $youtubeLink, $osMinId, $cpuMinId, $ramMinId, $storageMinId, $directxMinId, $gpuMinId, $osRecId, $cpuRecId, $ramRecId, $storageRecId, $directxRecId, $gpuRecId, $languageAudioId1, $languageAudioId2, $languageAudioId3, $languageAudioId4, $languageAudioId5, $languageAudioId6, $languageAudioId7, $languageAudioId8, $languageAudioId9, $languageAudioId10, $languageTextId1, $languageTextId2, $languageTextId3, $languageTextId4, $languageTextId5, $languageTextId6, $languageTextId7, $languageTextId8, $languageTextId9, $languageTextId10, $languageTextId11, $languageTextId12, $languageTextId13, $languageTextId14, $languageTextId15, $languageTextId16, $languageTextId17, $languageTextId18, $languageTextId19, $languageTextId20, $dateAdd) {
        $sqlQuery = 'INSERT INTO users SET id = :id, name = :name, categoryId1 = :categoryId1, categoryId2 = :categoryId2, categoryId3 = :categoryId3, categoryId4 = :categoryId4, developperId = :developperId, editorId = :editorId, platform = :platform, dateLaunch = :dateLaunch, price = :price, image1 = :image1, image2 = :image2, image2 = :image2, image3 = :image3, image4 = :image4, pegiId = :pegiId, description1 = :description1, description2 = :description2, description3 = :description3, description4 = :description4, description5 = :description5, description6 = :description6, description7 = :description7, description8 = :description8, youtubeLink = :youtubeLink, osMinId = :osMinId, cpuMinId = :cpuMinId, ramMinId = :ramMinId, storageMinId = :storageMinId, directxMinId = :directxMinId, gpuMinId = :gpuMinId, osRecId = :osRecId, cpuRecId = :cpuRecId, ramRecId = :ramRecId, storageRecId = :storageRecId, directxRecId = :directxRecId, gpuRecId = :gpuRecId, languageAudioId1 = :languageAudioId1, languageAudioId2 = :languageAudioId2, languageAudioId3 = :languageAudioId3, languageAudioId4 = :languageAudioId4, languageAudioId5 = :languageAudioId5, languageAudioId6 = :languageAudioId6, languageAudioId7 = :languageAudioId7, languageAudioId8 = :languageAudioId8, languageAudioId9 = :languageAudioId9, languageAudioId10 = :languageAudioId10, languageTextId1 = :languageTextId1, languageTextId2 = :languageTextId2, languageTextId3 = :languageTextId3, languageTextId4 = :languageTextId4, languageTextId5 = :languageTextId5, languageTextId6 = :languageTextId6, languageTextId7 = :languageTextId7, languageTextId8 = :languageTextId8, languageTextId9 = :languageTextId9, languageTextId10 = :languageTextId10, languageTextId11 = :languageTextId11, languageTextId12 = :languageTextId12, languageTextId13 = :languageTextId13, languageTextId14 = :languageTextId14, languageTextId15 = :languageTextId15, languageTextId16 = :languageTextId16, languageTextId17 = :languageTextId17, languageTextId18 = :languageTextId18, languageTextId19 = :languageTextId19, languageTextId20 = :languageTextId20, dateAdd = :dateAdd,';
        $bindParam = array('id' => $id, 'name' => $name, 'categoryId1' => $categoryId1, 'categoryId2' => $categoryId2, 'categoryId3' => $categoryId3, 'categoryId4' => $categoryId4, 'developperId' => $developperId, 'editorId' => $editorId, 'platform' => $platform, 'dateLaunch' => $dateLaunch, 'price' => $price, 'image1' => $image1, 'image2' => $image2, 'image3' => $image3, 'image4' => $image4, 'pegiId' => $pegiId, 'description1' => $description1, 'description2' => $description2, 'description3' => $description3, 'description4' => $description4, 'description5' => $description5, 'description6' => $description8, 'youtubeLink' => $youtubeLink, 'osMinId' => $osMinId, 'cpuMinId' => $cpuMinId, 'ramMinId' => $ramMinId, 'storageMinId' => $storageMinId, 'directxMinId' => $directxMinId, 'gpuMinId' => $gpuMinId, 'osRecId' => $osRecId, 'cpuRecId' => $cpuRecId, 'ramRecId' => $ramRecId, 'storageRecId' => $storageRecId, 'directxRecId' => $directxRecId, 'gpuRecId' => $gpuRecId, 'languageAudioId1' => $languageAudioId1, 'languageAudioId2' => $languageAudioId2, 'languageAudioId3' => $languageAudioId3, 'languageAudioId4' => $languageAudioId4, 'languageAudioId5' => $languageAudioId5, 'languageAudioId6' => $languageAudioId6, 'languageAudioId7' => $languageAudioId7, 'languageAudioId8' => $languageAudioId8, 'languageAudioId9' => $languageAudioId9, 'languageAudioId10' => $languageAudioId10, 'languageTextId1' => $languageTextId1, 'languageTextId2' => $languageTextId2, 'languageTextId3' => $languageTextId3, 'languageTextId4' => $languageTextId4, 'languageTextId5' => $languageTextId5, 'languageTextId6' => $languageTextId6, 'languageTextId7' => $languageTextId7, 'languageTextId8' => $languageTextId8, 'languageTextId9' => $languageTextId9, 'languageTextId10' => $languageTextId10, 'languageTextId11' => $languageTextId11, 'languageTextId12' => $languageTextId2, 'languageTextId13' => $languageTextId13, 'languageTextId14' => $languageTextId14, 'languageTextId15' => $languageTextId15, 'languageTextId16' => $languageTextId16, 'languageTextId17' => $languageTextId17, 'languageTextId18' => $languageTextId18, 'languageTextId19' => $languageTextId19, 'languageTextId20' => $languageTextId20, 'dateAdd' => $dateAdd);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($game);
        return $gameJson;
    }

    /**
     * @param int $id
     * @param string $name
     * @param int $categoryId1
     * @param int $categoryId2
     * @param int $categoryId3
     * @param int $categoryId4
     * @param string $developperId
     * @param string $editorId
     * @param string $platform
     * @param string $dateLaunch
     * @param string $price
     * @param string $image1
     * @param string $image2
     * @param string $image3
     * @param string $image4
     * @param string $pegiId
     * @param string $description1
     * @param string $description2
     * @param string $description3
     * @param string $description4
     * @param string $description5
     * @param string $description6
     * @param string $description7
     * @param string $description8
     * @param string $youtubeLink
     * @param string $osMinId
     * @param string $cpuMinId
     * @param string $ramMinId
     * @param string $storageMinId
     * @param string $directxMinId
     * @param string $gpuMinId
     * @param string $osRecId
     * @param string $cpuRecId
     * @param string $ramRecId
     * @param string $storageRecId
     * @param string $directxRecId
     * @param string $gpuRecId
     * @param string $languageAudioId1
     * @param string $languageAudioId2
     * @param string $languageAudioId3
     * @param string $languageAudioId4
     * @param string $languageAudioId5
     * @param string $languageAudioId6
     * @param string $languageAudioId7
     * @param string $languageAudioId8
     * @param string $languageAudioId9
     * @param string $languageAudioId10
     * @param string $languageTextId1
     * @param string $languageTextId2
     * @param string $languageTextId3
     * @param string $languageTextId4
     * @param string $languageTextId5
     * @param string $languageTextId6
     * @param string $languageTextId7
     * @param string $languageTextId8
     * @param string $languageTextId9
     * @param string $languageTextId10
     * @param string $languageTextId11
     * @param string $languageTextId12
     * @param string $languageTextId13
     * @param string $languageTextId14
     * @param string $languageTextId15
     * @param string $languageTextId16
     * @param string $languageTextId17
     * @param string $languageTextId18
     * @param string $languageTextId19
     * @param string $languageTextId20
     * @param string $dateAdd
     */
    public static function updateGame($dbc, $id, $name, $categoryId1, $categoryId2, $categoryId3, $categoryId4, $developperId, $editorId, $platform, $dateLaunch, $price, $image1, $image2, $image3, $image4, $pegiId, $description1, $description2, $description3, $description4, $description5, $description6, $description7, $description8, $youtubeLink, $osMinId, $cpuMinId, $ramMinId, $storageMinId, $directxMinId, $gpuMinId, $osRecId, $cpuRecId, $ramRecId, $storageRecId, $directxRecId, $gpuRecId, $languageAudioId1, $languageAudioId2, $languageAudioId3, $languageAudioId4, $languageAudioId5, $languageAudioId6, $languageAudioId7, $languageAudioId8, $languageAudioId9, $languageAudioId10, $languageTextId1, $languageTextId2, $languageTextId3, $languageTextId4, $languageTextId5, $languageTextId6, $languageTextId7, $languageTextId8, $languageTextId9, $languageTextId10, $languageTextId11, $languageTextId12, $languageTextId13, $languageTextId14, $languageTextId15, $languageTextId16, $languageTextId17, $languageTextId18, $languageTextId19, $languageTextId20, $dateAdd) {
        $sqlQuery = 'UPDATE users SET id = :id, name = :name, categoryId1 = :categoryId1, categoryId2 = :categoryId2, categoryId3 = :categoryId3, categoryId4 = :categoryId4, developperId = :developperId, editorId = :editorId, platform = :platform, dateLaunch = :dateLaunch, price = :price, image1 = :image1, image2 = :image2, image2 = :image2, image3 = :image3, image4 = :image4, pegiId = :pegiId, description1 = :description1, description2 = :description2, description3 = :description3, description4 = :description4, description5 = :description5, description6 = :description6, description7 = :description7, description8 = :description8, youtubeLink = :youtubeLink, osMinId = :osMinId, cpuMinId = :cpuMinId, ramMinId = :ramMinId, storageMinId = :storageMinId, directxMinId = :directxMinId, gpuMinId = :gpuMinId, osRecId = :osRecId, cpuRecId = :cpuRecId, ramRecId = :ramRecId, storageRecId = :storageRecId, directxRecId = :directxRecId, gpuRecId = :gpuRecId, languageAudioId1 = :languageAudioId1, languageAudioId2 = :languageAudioId2, languageAudioId3 = :languageAudioId3, languageAudioId4 = :languageAudioId4, languageAudioId5 = :languageAudioId5, languageAudioId6 = :languageAudioId6, languageAudioId7 = :languageAudioId7, languageAudioId8 = :languageAudioId8, languageAudioId9 = :languageAudioId9, languageAudioId10 = :languageAudioId10, languageTextId1 = :languageTextId1, languageTextId2 = :languageTextId2, languageTextId3 = :languageTextId3, languageTextId4 = :languageTextId4, languageTextId5 = :languageTextId5, languageTextId6 = :languageTextId6, languageTextId7 = :languageTextId7, languageTextId8 = :languageTextId8, languageTextId9 = :languageTextId9, languageTextId10 = :languageTextId10, languageTextId11 = :languageTextId11, languageTextId12 = :languageTextId12, languageTextId13 = :languageTextId13, languageTextId14 = :languageTextId14, languageTextId15 = :languageTextId15, languageTextId16 = :languageTextId16, languageTextId17 = :languageTextId17, languageTextId18 = :languageTextId18, languageTextId19 = :languageTextId19, languageTextId20 = :languageTextId20, dateAdd = :dateAdd,';
        $bindParam = array('id' => $id, 'name' => $name, 'categoryId1' => $categoryId1, 'categoryId2' => $categoryId2, 'categoryId3' => $categoryId3, 'categoryId4' => $categoryId4, 'developperId' => $developperId, 'editorId' => $editorId, 'platform' => $platform, 'dateLaunch' => $dateLaunch, 'price' => $price, 'image1' => $image1, 'image2' => $image2, 'image3' => $image3, 'image4' => $image4, 'pegiId' => $pegiId, 'description1' => $description1, 'description2' => $description2, 'description3' => $description3, 'description4' => $description4, 'description5' => $description5, 'description6' => $description8, 'youtubeLink' => $youtubeLink, 'osMinId' => $osMinId, 'cpuMinId' => $cpuMinId, 'ramMinId' => $ramMinId, 'storageMinId' => $storageMinId, 'directxMinId' => $directxMinId, 'gpuMinId' => $gpuMinId, 'osRecId' => $osRecId, 'cpuRecId' => $cpuRecId, 'ramRecId' => $ramRecId, 'storageRecId' => $storageRecId, 'directxRecId' => $directxRecId, 'gpuRecId' => $gpuRecId, 'languageAudioId1' => $languageAudioId1, 'languageAudioId2' => $languageAudioId2, 'languageAudioId3' => $languageAudioId3, 'languageAudioId4' => $languageAudioId4, 'languageAudioId5' => $languageAudioId5, 'languageAudioId6' => $languageAudioId6, 'languageAudioId7' => $languageAudioId7, 'languageAudioId8' => $languageAudioId8, 'languageAudioId9' => $languageAudioId9, 'languageAudioId10' => $languageAudioId10, 'languageTextId1' => $languageTextId1, 'languageTextId2' => $languageTextId2, 'languageTextId3' => $languageTextId3, 'languageTextId4' => $languageTextId4, 'languageTextId5' => $languageTextId5, 'languageTextId6' => $languageTextId6, 'languageTextId7' => $languageTextId7, 'languageTextId8' => $languageTextId8, 'languageTextId9' => $languageTextId9, 'languageTextId10' => $languageTextId10, 'languageTextId11' => $languageTextId11, 'languageTextId12' => $languageTextId2, 'languageTextId13' => $languageTextId13, 'languageTextId14' => $languageTextId14, 'languageTextId15' => $languageTextId15, 'languageTextId16' => $languageTextId16, 'languageTextId17' => $languageTextId17, 'languageTextId18' => $languageTextId18, 'languageTextId19' => $languageTextId19, 'languageTextId20' => $languageTextId20, 'dateAdd' => $dateAdd);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($game);
        return $gameJson;
    }

    /**
     * @param $dbc
     * @param $id
     * @return false|string
     */
    public static function deleteGame($dbc, $id) {
        $sqlQuery = "DELETE FROM games WHERE games.id = $id";
        $bindParam = array('id' => $id);
        $game = $dbc->updateOrDeleteOrAdd($sqlQuery, $bindParam);
        $gameJson = json_encode($user);
        return $gameJson;
    }
}