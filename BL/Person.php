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
    public $name;
    public $surname;
    public $email;
    public $sex;
    public $country;
    public $smoker;
    public $photo;
    
    public function save(){
        return(PersonDAL::save($this));
    }
}
