<?php
require_once dirname(__FILE__).'/../DAL/PersonDAL.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author marcinwlodarczyk
 */
class Person {
    public $id;
    public $name;
    public $surname;
    public $email;
    public $sex;
    public $country;
    public $smoker;
    public $photo;
    
    public function save(){       
        $this->id = PersonDAL::save($this);
        return isset($this->id);
    }
    
    public function validation(){
        $errors = array();
        
        
        $errors[] = isset($this->name) ? 0 : 'name is not set';
        $errors[] = isset($this->surname) ? 0 : 'surname is not set';
        $errors[] = isset($this->email) ? 0 : 'email is not set';
        $errors[] = isset($this->sex) ? 0 : 'sex is not set';
        $errors[] = isset($this->country) ? 0 : 'country is not set';
        $errors[] = isset($this->smoker) ? 0 : 'smoker is not set';
        $errors[] = isset($this->photo) ? 0 : 'photo is not set';
        $errors[] = strlen($this->name)>45 ? 'Name length over max limit('.strlen($this->name).')' : 0;
        $errors[] = strlen($this->surname)>45 ? 'Surname length over max limit('.strlen($this->surname).')' : 0;
        $errors[] = strlen($this->email)>45 ? 'Email length over max limit('.strlen($this->email).')' : 0;
        $errors[] = strlen($this->sex)>45 ? 'Sex length over max limit('.strlen($this->sex).')' : 0;
        $errors[] = strlen($this->country)>45 ? 'Country length over max limit('.strlen($this->sex).')' : 0;
        $errors[] = strlen($this->smoker)>1 ? 'Smoker length over max limit('.strlen($this->smoker).')' : 0;
        $errors[] = $this->photo === 1 ? 'Photo Error' : 0;
        
        foreach ($errors as $error){
            if($error !== 0){
                return $errors;
            }
        }
        return 0;
    }
}
