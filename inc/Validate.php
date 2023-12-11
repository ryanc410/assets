<?php

class Validate {
    public function sanitize($input){
        $data = trim($input);
        $data = htmlspecialchars($input);
        $data = stripslashes($input);
        return $data;
    }
    public function isValidUsername($username){
        $pattern = '/^[A-Za-z0-9_-]+$/';
        return preg_match($pattern, $username);
    }
    public function isValidEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function hasUpper($input){
        return preg_match('/[A-Z]/', $input);
    }
    public function hasLower($input){
        return preg_match('/[a-z]/', $input);
    }
    public function hasNumber($input){
        return preg_match('/[0-9]/', $input);
    }
    public function checkLength($input, $min, $max){
        $len = strlen($input);
        if($len > $max) || if($len < $min){
            return false;
        }
    }
}