<?php
require_once dirname(__FILE__).'/../DataAbstraction/DB.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentDAL
 *
 * @author marcinwlodarczyk
 */
class StudentDAL {
    
    public static function save($e){
        $db = DB::getDB();
        $query = "INSERT INTO student_booking (course,home_university,months,room_type,kit,comment,date,validated,person_booking_id) VALUES(:course,:home_university,:months,:room_type,:kit,:comment,:date,:validated,:person_booking_id)";
        
        $params = array();
        $params[':course'] = $e->course;
        $params[':home_university'] = $e->home_university;
        $params[':months'] = $e->months;
        $params[':room_type'] = $e->room_type;
        $params[':kit'] = $e->kit;
        $params[':comment'] = $e->comment;
        $params[':date'] = $e->date;
        $params[':validated'] = $e->validated;
        $params[':person_booking_id'] = $e->person_booking_id;
        
        $res = $db -> query($query, $params);
        
        return($res);
    }
}
