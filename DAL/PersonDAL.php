<?php
require_once dirname(__FILE__).'/../DataAbstraction/DB.php';
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
class PersonDAL {
    public static function save($e){
        $db = DB::getDB();
        $query = "INSERT INTO person_booking (name,surname,email,sex,country,smoker,photo) VALUES(:name,:surname,:email,:sex,:country,:smoker,:photo)";
        
        $params = array();
        $params[':name'] = $e->name;
        $params[':surname'] = $e->surname;
        $params[':email'] = $e->email;
        $params[':sex'] = $e->sex;
        $params[':country'] = $e->country;
        $params[':smoker'] = $e->smoker;
        $params[':photo'] = $e->photo;
        
        $res = $db -> query($query, $params);
        if($res){
            return $db->lastInsertId();
        }
        
        return(FALSE);
    }
}
