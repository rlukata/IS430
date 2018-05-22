<?php

/**
 * Description of validateStrings
 *
 * @author Rami
 */
class validateStrings {
    var $inputString;
    
    function set_Input($newInput) {
        $this->inputString = newInput;
    }
    
    function get_Input() {
        return $this->inputString;
    }
    
    function validateEmail($email){
        if (Validate::email($email, array('use_rfc822' => true))) {
            echo 'Valid!';
        } else {
            echo $email . ' failed.';
        }
    }
    
    function validatePhoneUS($phone) {
        $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        $holder = $phone;
        
        try {
            $holder = $phoneUtil->parse($phone, "US");
        } catch (\libphonenumber\NumberParseException $e) {
            var_dump($e);
        }

       if ($phoneUtil->isValidNumber($holder)) {
           echo 'Valid!<br>';
       }
       else {
           echo 'did not work!<br>';
           echo 'Try using regex (not safe): ';
           echo $this->validatePhoneUSRegex($phone);
           echo '<br>';
       }
    }
    
    function validatePhoneUSRegex($phone) {
        $pattern = '~^\(?([2-9][0-9]{2})\)?[-. ]?([2-9](?!11)[0-9]{2})[-. ]?([0-9]{4})$~';
        //$pattern = '/^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$/i/';
        $holder = strtr($phone, "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "22233344455566677778889999");
        
        if(preg_match($pattern, $holder)){
            echo "$phone is valid.\n";   
        } 
        else {
            echo "$phone is invalid. <br>";
        }
    }
}
