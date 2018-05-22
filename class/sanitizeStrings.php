<?php

/**
 * Description of sanitizeStrings
 *
 * @author Rami
 */
class sanitizeStrings {
    
    var $stringInput;
    
    function set_Input($newInput) {
        $this->inputString = newInput;
    }
    
    function get_Input() {
        return $this->inputString;
    }
    
    function sanitizeInt($int) {
        $sanitized = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
        return $sanitized;
    }
    
    function validateInt($int) {
        $sanitized = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
        if (filter_var($int, FILTER_SANITIZE_NUMBER_INT)){
            return true;
        }
        else {
            return false;
        }
    }
    
    function poemSanitizer($string) {
        $current = "<html><body><pre>";
        $lines = explode(";", $string);
        $counter = 0;
        foreach ($lines as $key => $line) {
            $current.='<p>'.$line.'</p>';
            $counter++;
            if ($key > 0 && ($counter % 4) == 0) {
                $current.='<br>';   
            }
        }
        $current.= "</pre></body></html>";
        return $current;
    }
    
    function sanitizeString($string) {
        $sanitized = filter_var($string, FILTER_SANITIZE_STRING);
        return $sanitized;
    }
    
    function validateString($string) {
        $sanitized = filter_var($string, FILTER_SANITIZE_STRING);
        if (filter_var($sanitized, FILTER_SANITIZE_STRING)){
            return true;
        }
        else {
            return false;
        }
    }
    
    function sanitizeEmail($email) {
        $second = str_replace("'", "", $email);
        $third = str_replace('"', '', $second);
        $sanitized = filter_var($third, FILTER_SANITIZE_EMAIL);
        return $sanitized;
    }
    
    function validateEmail ($email) {
        $second = str_replace("'", "", $email);
        $third = str_replace('"', '', $second);
        $sanitized = filter_var($third, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitized, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        else {
            return false;
        }
    }
    
    function sanitizeURL($url) {
        $sanitized = filter_var($url, FILTER_SANITIZE_ENCODED);
        return $sanitized;
    }
    
    function validateURL($url) {
        if (filter_var($url, FILTER_VALIDATE_URL)){
            return true;
        }
        else {
            return false;
        }
    }   
    
    function sanitizeHTML($html) {
        $sanitized = filter_var($html, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        return $sanitized;
    }
}

?>