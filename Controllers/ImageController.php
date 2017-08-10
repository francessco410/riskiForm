<?php
//require_once dirname(__FILE__).'/../BL/Image.php';
//require_once dirname(__FILE__).'/../BL/Recipe_has_image.php';

/**
 * Description of ImageController
 *
 * @author marcinwlodarczyk
 */
class ImageController {
    private $error = array();
    private $path;
    public function process(){
        if(isset($_POST['riski-form-submit'])){
            if(isset($_FILES['id-photo'])){
                return($this->upload());
                
            }
        }
    }
    public function getError(){
        return $this->error; 
    }
    function setError(Array $err){
        $this->error=$err;
        return $this->error;
    }
    public function getPath(){
        return $this->path; 
    }
    private function setPath($pth){
        $this->path=$pth;
        return $this->path;
    }
    
    public function upload(){
        $error=array();
        $valid=true;
        $target_dir = dirname(__FILE__)."/../";
        $target_filetype = pathinfo($_FILES["id-photo"]["name"], PATHINFO_EXTENSION);
        $target_file = "upload/scans/".(substr(htmlspecialchars($_POST['name']),0,2).".".substr(htmlspecialchars($_POST['surname']),0,20). date("Y-m-d_g:i").".".($target_filetype));
//        basename($_FILES["id-photo"]["name"]))
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        if(isset($_POST["riski-form-submit"])) {
            $check = getimagesize($_FILES["id-photo"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
//                $error = 5;
                $uploadOk = 1;
            } else {
                //echo "File is not an image.";
                $error[] = "File is not an image";
                $valid=false;
                $uploadOk = 0;
            }
        }
        // Check if file already exists
//        if (file_exists($target_file)) {
//            //echo "Sorry, file already exists.";
//            $error = 7;
//            $uploadOk = 0;
//        }
        // Check file size
        if ($_FILES["id-photo"]["size"] > 12000000) {
            //echo "Sorry, your file is too large.";
            $error[] = "File is too large";
            $valid=false;
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $error[] ="File is not .jpg, .png, .gif or .jpeg type";
            $valid=false;
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
            $error[] = "File wasn`t uploaded";
            $valid=false;
        // if everything is ok, try to upload file
        } else {
            if(move_uploaded_file($_FILES["id-photo"]["tmp_name"], $target_dir.$target_file)) {
                //echo "The file ".basename( $_FILES["recipe-image-user"]["name"]). " has been uploaded.";
//                $error = FALSE;
            } else {
                //echo "Sorry, there was an error uploading your file.";
                $error[] = "There was an error uploading file on final stage";
                $valid=false;
            }
        }
        
//        if($error === FALSE){
//            $i = new Image();
//            $i -> name = basename($_FILES["recipe-image-user"]["name"]);
//            $i -> path = 'img/recipe/recipe_img/'.$_FILES["recipe-image-user"]["name"];
//            $i -> size = $_FILES["recipe-image-user"]["size"];
//            if(!($i ->create())){
//                $error = 14;
//            }else{
//                return($i);
//            }
//        }
        $this->setError($error);
        $this->setPath($target_file);
        return($valid);
    }
    
}