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
    public $person_booking_id;


    public function save(){
        return(StudentDAL::save($this));
    }
    
    public function validation(){
        $errors = array();
        
        
        $errors[] = isset($this->course) ? 0 : 'course is not set';
        $errors[] = isset($this->home_university) ? 0 : 'home_university is not set';
        $errors[] = isset($this->arrival_date) ? 0 : 'arrival_date is not set';
        $errors[] = isset($this->months) ? 0 : 'months is not set';
        $errors[] = isset($this->room_type) ? 0 : 'room_type is not set';
        $errors[] = isset($this->kit) ? 0 : 'kit is not set';
        $errors[] = isset($this->comment) ? 0 : 'comment is not set';
        $errors[] = isset($this->date) ? 0 : 'date is not set';
        $errors[] = isset($this->validated) ? 0 : 'validated is not set';
        $errors[] = strlen($this->course)>45 ? 'Course length over max limit('.strlen($this->course).')' : 0;
        $errors[] = strlen($this->home_university)>45 ? 'Home_university length over max limit('.strlen($this->home_university).')' : 0;
        $errors[] = strlen($this->arrival_date)>10 ? 'Arrival_date length over max limit('.strlen($this->arrival_date).')' : 0;
        $errors[] = strlen($this->months)>2 ? 'Months length over max limit('.strlen($this->months).')' : 0;
        $errors[] = strlen($this->room_type)>1 ? 'Room_type length over max limit('.strlen($this->room_type).')' : 0;
        $errors[] = strlen($this->kit)>1 ? 'Kit length over max limit('.strlen($this->kit).')' : 0;
        $errors[] = strlen($this->comment)>255 ? 'Comment length over max limit('.strlen($this->comment).')' : 0;
        $errors[] = $this->validated != 0 ? 'Validated is('.$this->validated.')' : 0;
        

        foreach ($errors as $error){
            if($error !== 0){
                return $errors;
            }
        }
        return 0;
    }
}
