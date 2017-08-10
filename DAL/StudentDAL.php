<?php

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
        $query = "INSERT INTO student_booking (course,home_univeristy,months,room_type,kit,comment,date) VALUES(:course,:home_univeristy,:months,:room_type,:kit,:comment,:date,:validated)";
        
        $params = array();
        $params[':course'] = $e->course;
        $params[':home_univeristy'] = $e->home_univeristy;
        $params[':months'] = $e->months;
        $params[':room_type'] = $e->room_type;
        $params[':kit'] = $e->kit;
        $params[':comment'] = $e->comment;
        $params[':date'] = $e->date;
        $params[':validated'] = $e->validated;
        
        $res = $db -> query($query, $params);
        
        return($res);
    }
}
