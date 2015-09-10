<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Devan
 */
class Student {
    
    /**
     * Constructor for students
     */
    function __construct() {
        $this->surname ='';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Add emails to the student with the given index. allows for overwriting 
     * existing emails.
     * @param type $which index
     * @param type $address value
     */
    function add_email($which,$address){
        $this->emails[$which] = $address;
    }
    
    /**
     * add a grade to the student, cannot modify
     * @param type $grade
     */
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    /**
     * 
     * @return type
     */
    function average(){
        $total = 0;
        foreach($this->grades as $value){
            $total += $value;
        }
        return $total/count($this->grades);
    }
    
    function toString(){
        $result = $this->first_name . ' ' . $this->surname;
        $result .= '  ('.$this->average().")\n";
        foreach($this->emails as $which=>$what){
            $result .= $which.': '.$what."\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
