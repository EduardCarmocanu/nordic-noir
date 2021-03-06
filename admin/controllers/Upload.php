<?php
require_once('Dashboard_controller.php');
class Upload_controller
{ 
    public $returner = false;   
    public $file_name;
    private $DBC;
    
    private $upload_directory;
    private $uploadOk;
    private $imageFileType;
    private $the_file;
    private $check;
    private $target_file;
    
    public function __construct ($file,$check)
	{
        $this->the_file = $file;
        $this->DBC = new Dashboard_controller();
        //define ('SITE_ROOT', realpath(dirname(__FILE__)));
        $this->file_name = $this->DBC->generateRandomString();
        
        $this->upload_directory = "../assets/tours/";
        $this->uploadOk = 1;
        $this->target_file = $this->upload_directory . basename($this->file_name . $this->the_file['name']);
        $this->imageFileType = pathinfo($this->target_file,PATHINFO_EXTENSION);
        $this->check = $check;
        $this->runUpload();
    }

    private function runUpload(){
        $this->checkIfImage($this->check);
        $this->checkIfImageRightType($this->imageFileType);
        $this->uploadFile();
    }

    private function checkIfImage($c){
        if($c !== false){
            $this->uploadOk = 1;
        }else{
            $this->uploadOk = 0;            
        }
    }

    private function checkIfImageRightType($imageFileType){
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $uploadOk = 0;
        }
    }

    private function uploadFile(){
        $t = $this->target_file;
        if ($this->uploadOk == 0) {
            $this->retrner = false;            
        } else {
            if (move_uploaded_file($this->the_file["tmp_name"], $this->target_file)) {
                $this->returner = $t;
            } else { 
                $this->retrner = false;
            }
        }
    }

    public function printTest(){
        var_dump($this->target_file);
    }
}