<?php

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
    public static function save($e){
        $db = DB::getDB();
        $query = "INSERT INTO person_booking (name,surname,email,sex,country,smoker,photo) VALUES(:course,:home_univeristy,:months,:room_type,:kit,:comment,:date)";
        
        $params = array();
        $params[':name'] = $e->name;
        $params[':surname'] = $e->surname;
        $params[':email'] = $e->email;
        $params[':sex'] = $e->sex;
        $params[':country'] = $e->country;
        $params[':smoker'] = $e->smoker;
        $params[':photo'] = $e->photo;
        
        $res = $db -> query($query, $params);
        
        return($res);
    }
}
