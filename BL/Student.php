<?php
require_once dirname(__FILE__).'/../DAL/StudentDAL.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author marcinwlodarczyk
 */

class Student {
    public $course;
    public $home_university;
    public $arrival_date;
    public $months;
    public $room_type;
    public $kit;
    public $comment;
    public $date;
    public $validated;
    
    public function save(){
        return(StudentDAL::save($this));
    }
}
