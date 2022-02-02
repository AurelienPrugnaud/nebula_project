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
    private $pegi;
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
    private $osMin;
    /**
     * @var
     */
    private $cpuMin;
    /**
     * @var
     */
    private $ramMin;
    /**
     * @var
     */
    private $storageMin;
    /**
     * @var
     */
    private $directxMin;
    /**
     * @var
     */
    private $gpuMin;
    /**
     * @var
     */
    private $osRec;
    /**
     * @var
     */
    private $cpuRec;
    /**
     * @var
     */
    private $ramRec;
    /**
     * @var
     */
    private $storageRec;
    /**
     * @var
     */
    private $directxRec;
    /**
     * @var
     */
    private $gpuRec;
    /**
     * @var
     */
    private $languageAudio1;
    /**
     * @var
     */
    private $languageAudio2;
    /**
     * @var
     */
    private $languageAudio3;
    /**
     * @var
     */
    private $languageAudio4;
    /**
     * @var
     */
    private $languageAudio5;
    /**
     * @var
     */
    private $languageAudio6;
    /**
     * @var
     */
    private $languageAudio7;
    /**
     * @var
     */
    private $languageAudio8;
    /**
     * @var
     */
    private $languageAudio9;
    /**
     * @var
     */
    private $languageAudio10;
    /**
     * @var
     */
    private $languageText1;
    /**
     * @var
     */
    private $languageText2;
    /**
     * @var
     */
    private $languageText3;
    /**
     * @var
     */
    private $languageText4;
    /**
     * @var
     */
    private $languageText5;
    /**
     * @var
     */
    private $languageText6;
    /**
     * @var
     */
    private $languageText7;
    /**
     * @var
     */
    private $languageText8;
    /**
     * @var
     */
    private $languageText9;
    /**
     * @var
     */
    private $languageText10;
    /**
     * @var
     */
    private $languageText11;
    /**
     * @var
     */
    private $languageText12;
    /**
     * @var
     */
    private $languageText13;
    /**
     * @var
     */
    private $languageText14;
    /**
     * @var
     */
    private $languageText15;
    /**
     * @var
     */
    private $languageText16;
    /**
     * @var
     */
    private $languageText17;
    /**
     * @var
     */
    private $languageText18;
    /**
     * @var
     */
    private $languageText19;
    /**
     * @var
     */
    private $languageText20;
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
     * @param string $image1
     * @param string $image2
     * @param string $image3
     * @param string $image4
     * @param string $pegi
     * @param string $description1
     * @param string $description2
     * @param string $description3
     * @param string $description4
     * @param string $description5
     * @param string $description6
     * @param string $description7
     * @param string $description8
     * @param string $youtubeLink
     * @param string $osMin
     * @param string $cpuMin
     * @param string $ramMin
     * @param string $storageMin
     * @param string $directxMin
     * @param string $gpuMin
     * @param string $osRec
     * @param string $cpuRec
     * @param string $ramRec
     * @param string $storageRec
     * @param string $directxRec
     * @param string $gpuRec
     * @param string $languageAudio1
     * @param string $languageAudio2
     * @param string $languageAudio3
     * @param string $languageAudio4
     * @param string $languageAudio5
     * @param string $languageAudio6
     * @param string $languageAudio7
     * @param string $languageAudio8
     * @param string $languageAudio9
     * @param string $languageAudio10
     * @param string $languageText1
     * @param string $languageText2
     * @param string $languageText3
     * @param string $languageText4
     * @param string $languageText5
     * @param string $languageText6
     * @param string $languageText7
     * @param string $languageText8
     * @param string $languageText9
     * @param string $languageText10
     * @param string $languageText11
     * @param string $languageText12
     * @param string $languageText13
     * @param string $languageText14
     * @param string $languageText15
     * @param string $languageText16
     * @param string $languageText17
     * @param string $languageText18
     * @param string $languageText19
     * @param string $languageText20
     * @param string $dateAdd
     */
    public function __construct($id = '', $name = '', $categoryId1 = '', $categoryId2 = '', $categoryId3 = '', $categoryId4 = '', $developperId = '', $editorId = '', $platform = '', $dateLaunch = '', $image1 = '', $image2 = '', $image3 = '', $image4 = '', $pegi = '', $description1 = '', $description2 = '', $description3 = '', $description4 = '', $description5 = '', $description6 = '', $description7 = '', $description8 = '', $youtubeLink = '', $osMin = '', $cpuMin = '', $ramMin = '', $storageMin = '', $directxMin = '', $gpuMin = '', $osRec = '', $cpuRec = '', $ramRec = '', $storageRec = '', $directxRec = '', $gpuRec = '', $languageAudio1 = '', $languageAudio2 = '', $languageAudio3 = '', $languageAudio4 = '', $languageAudio5 = '', $languageAudio6 = '', $languageAudio7 = '', $languageAudio8 = '', $languageAudio9 = '', $languageAudio10 = '', $languageText1 = '', $languageText2 = '', $languageText3 = '', $languageText4 = '', $languageText5 = '', $languageText6 = '', $languageText7 = '', $languageText8 = '', $languageText9 = '', $languageText10 = '', $languageText11 = '', $languageText12 = '', $languageText13 = '', $languageText14 = '', $languageText15 = '', $languageText16 = '', $languageText17 = '', $languageText18 = '', $languageText19 = '', $languageText20 = '', $dateAdd = '') {

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
    public function getPegi() {
        return $this->pegi;
    }

    /**
     * @param mixed $pegi
     */
    public function setPegi($pegi): void {
        $this->pegi = $pegi;
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
    public function getOsMin() {
        return $this->osMin;
    }

    /**
     * @param mixed $osMin
     */
    public function setOsMin($osMin): void {
        $this->osMin = $osMin;
    }

    /**
     * @return mixed
     */
    public function getCpuMin() {
        return $this->cpuMin;
    }

    /**
     * @param mixed $cpuMin
     */
    public function setCpuMin($cpuMin): void {
        $this->cpuMin = $cpuMin;
    }

    /**
     * @return mixed
     */
    public function getRamMin() {
        return $this->ramMin;
    }

    /**
     * @param mixed $ramMin
     */
    public function setRamMin($ramMin): void {
        $this->ramMin = $ramMin;
    }

    /**
     * @return mixed
     */
    public function getStorageMin() {
        return $this->storageMin;
    }

    /**
     * @param mixed $storageMin
     */
    public function setStorageMin($storageMin): void {
        $this->storageMin = $storageMin;
    }

    /**
     * @return mixed
     */
    public function getDirectxMin() {
        return $this->directxMin;
    }

    /**
     * @param mixed $directxMin
     */
    public function setDirectxMin($directxMin): void {
        $this->cpuMin = $directxMin;
    }

    /**
     * @return mixed
     */
    public function getGpuMin() {
        return $this->gpuMin;
    }

    /**
     * @param mixed $gpuMin
     */
    public function setGpuMin($gpuMin): void {
        $this->gpuMin = $gpuMin;
    }

    /**
     * @return mixed
     */
    public function getOsRec() {
        return $this->osRec;
    }

    /**
     * @param mixed $osRec
     */
    public function setOsRec($osRec): void {
        $this->osRec = $osRec;
    }

    /**
     * @return mixed
     */
    public function getCpuRec() {
        return $this->cpuRec;
    }

    /**
     * @param mixed $cpuRec
     */
    public function setCpuRec($cpuRec): void {
        $this->cpuRec = $cpuRec;
    }

    /**
     * @return mixed
     */
    public function getRamRec() {
        return $this->cpuMin;
    }

    /**
     * @param mixed $ramRec
     */
    public function setRamRec($ramRec): void {
        $this->ramRec = $ramRec;
    }

    /**
     * @return mixed
     */
    public function getStorageRec() {
        return $this->storageRec;
    }

    /**
     * @param mixed $storageRec
     */
    public function setStorageRec($storageRec): void {
        $this->storageRec = $storageRec;
    }

    /**
     * @return mixed
     */
    public function getDirectxRec() {
        return $this->directxRec;
    }

    /**
     * @param mixed $directxRec
     */
    public function setDirectxRec($directxRec): void {
        $this->directxRec = $directxRec;
    }

    /**
     * @return mixed
     */
    public function getGpuRec() {
        return $this->cpuMin;
    }

    /**
     * @param mixed $gpuRec
     */
    public function setGpuRec($gpuRec): void {
        $this->gpuRec = $gpuRec;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio1() {
        return $this->languageAudio1;
    }

    /**
     * @param mixed $languageAudio1
     */
    public function setLanguageAudio1($languageAudio1): void {
        $this->languageAudio1 = $languageAudio1;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio2() {
        return $this->languageAudio2;
    }

    /**
     * @param mixed $languageAudio2
     */
    public function setLanguageAudio2($languageAudio2): void {
        $this->languageAudio2 = $languageAudio2;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio3() {
        return $this->languageAudio3;
    }

    /**
     * @param mixed $languageAudio3
     */
    public function setLanguageAudio3($languageAudio3): void {
        $this->languageAudio3 = $languageAudio3;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio4() {
        return $this->languageAudio4;
    }

    /**
     * @param mixed $languageAudio4
     */
    public function setLanguageAudio4($languageAudio4): void {
        $this->languageAudio4 = $languageAudio4;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio5() {
        return $this->languageAudio5;
    }

    /**
     * @param mixed $languageAudio5
     */
    public function setLanguageAudio5($languageAudio5): void {
        $this->languageAudio5 = $languageAudio5;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio6() {
        return $this->languageAudio6;
    }

    /**
     * @param mixed $languageAudio6
     */
    public function setLanguageAudio6($languageAudio6): void {
        $this->languageAudio6 = $languageAudio6;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio7() {
        return $this->languageAudio7;
    }

    /**
     * @param mixed $languageAudio7
     */
    public function setLanguageAudio7($languageAudio7): void {
        $this->languageAudio7 = $languageAudio7;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio8() {
        return $this->languageAudio8;
    }

    /**
     * @param mixed $languageAudio8
     */
    public function setLanguageAudio8($languageAudio8): void {
        $this->languageAudio8 = $languageAudio8;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio9() {
        return $this->languageAudio9;
    }

    /**
     * @param mixed $languageAudio9
     */
    public function setLanguageAudio9($languageAudio9): void {
        $this->languageAudio9 = $languageAudio9;
    }

    /**
     * @return mixed
     */
    public function getLanguageAudio10() {
        return $this->languageAudio10;
    }

    /**
     * @param mixed $languageAudio10
     */
    public function setLanguageAudio10($languageAudio10): void {
        $this->languageAudio10 = $languageAudio10;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext1() {
        return $this->languageText1;
    }

    /**
     * @param mixed $languageText1
     */
    public function setLanguagetext1($languageText1): void {
        $this->languageText1 = $languageText1;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext2() {
        return $this->languageText2;
    }

    /**
     * @param mixed $languageText2
     */
    public function setLanguagetext2($languageText2): void {
        $this->languageText2 = $languageText2;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext3() {
        return $this->languageText3;
    }

    /**
     * @param mixed $languageText3
     */
    public function setLanguagetext3($languageText3): void {
        $this->languageText3 = $languageText3;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext4() {
        return $this->languageText4;
    }

    /**
     * @param mixed $languageText4
     */
    public function setLanguagetext4($languageText4): void {
        $this->languageText4 = $languageText4;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext5() {
        return $this->languageText5;
    }

    /**
     * @param mixed $languageText5
     */
    public function setLanguagetext5($languageText5): void {
        $this->languageText5 = $languageText5;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext6() {
        return $this->languageText6;
    }

    /**
     * @param mixed $languageText6
     */
    public function setLanguagetext6($languageText6): void {
        $this->languageText6 = $languageText6;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext7() {
        return $this->languageText7;
    }

    /**
     * @param mixed $languageText7
     */
    public function setLanguagetext7($languageText7): void {
        $this->languageText7 = $languageText7;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext8() {
        return $this->languageText8;
    }

    /**
     * @param mixed $languageText8
     */
    public function setLanguagetext8($languageText8): void {
        $this->languageText8 = $languageText8;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext9() {
        return $this->languageText9;
    }

    /**
     * @param mixed $languageText9
     */
    public function setLanguagetext9($languageText9): void {
        $this->languageText9 = $languageText9;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext10() {
        return $this->languageText10;
    }

    /**
     * @param mixed $languageText10
     */
    public function setLanguagetext10($languageText10): void {
        $this->languageText10 = $languageText10;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext11() {
        return $this->languageText11;
    }

    /**
     * @param mixed $languageText11
     */
    public function setLanguagetext11($languageText11): void {
        $this->languageText11 = $languageText11;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext12() {
        return $this->languageText12;
    }

    /**
     * @param mixed $languageText12
     */
    public function setLanguagetext12($languageText12): void {
        $this->languageText12 = $languageText12;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext13() {
        return $this->languageText13;
    }

    /**
     * @param mixed $languageText13
     */
    public function setLanguagetext13($languageText13): void {
        $this->languageText13 = $languageText13;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext14() {
        return $this->languageText1;
    }

    /**
     * @param mixed $languageText14
     */
    public function setLanguagetext14($languageText14): void {
        $this->languageText14 = $languageText14;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext15() {
        return $this->languageText15;
    }

    /**
     * @param mixed $languageText15
     */
    public function setLanguagetext15($languageText15): void {
        $this->languageText15 = $languageText15;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext16() {
        return $this->languageText16;
    }

    /**
     * @param mixed $languageText16
     */
    public function setLanguagetext16($languageText16): void {
        $this->languageText16 = $languageText16;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext17() {
        return $this->languageText17;
    }

    /**
     * @param mixed $languageText17
     */
    public function setLanguagetext17($languageText17): void {
        $this->languageText17 = $languageText17;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext18() {
        return $this->languageText18;
    }

    /**
     * @param mixed $languageText18
     */
    public function setLanguagetext18($languageText18): void {
        $this->languageText18 = $languageText18;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext19() {
        return $this->languageText19;
    }

    /**
     * @param mixed $languageText19
     */
    public function setLanguagetext19($languageText19): void {
        $this->languageText19 = $languageText19;
    }

    /**
     * @return mixed
     */
    public function getLanguagetext20() {
        return $this->languageText20;
    }

    /**
     * @param mixed $languageText20
     */
    public function setLanguagetext20($languageText20): void {
        $this->languageText20 = $languageText20;
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

}