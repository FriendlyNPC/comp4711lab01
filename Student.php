<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of a Student.
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
     * calculates the average grade for the student
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
        //make a panel for a student 
        $result = '<div class="panel panel-primary panel-center">';
        
        //the header of the panel will be the student name
        $result .= '<div class="panel-heading">'.$this->first_name . ' '  
                . $this->surname.'</div>';
        
        //contents of the panel
        $result .= '<div class="panel-body">';
        $result .= '<h6>Average:</h3>'.$this->average().'</br>';
        $result .= '<h6>Email:</h3>';
        
        //build a table for the email addresses
        $result .= '<table class="table table-striped">';        
        foreach($this->emails as $which=>$what){
            $result .= '<tr>';
            $result .= '<td>'.$which.'</td>';
            $result .= '<td>'.$what.'</td>';
            $result .= '</tr>';
        }
        //close table, panel body, and panel divs
        $result .= '</table>';
        $result .= "</div></div>";
        
        return $result;
    }
}
