<?php
/**
 * Description of LoginMDB2
 *
 * @author Rami
 */
class LoginMDB2 {
    
    function logMeIn() {    
        require_once("../vendor/pear/auth/Auth/HTTP.php");
        // Designate authentication credentials, table name,
        // username and password columns, password encryption type,
        // and query parameters for retrieving other fields
        $user = "rlukata";
        $password = "ramito1991";
        $host = "locahost";
        $database = "SchoolDatabase";
        $dblogin = array (
            'dsn' => "mysqli://".$user.":".$password."@".$host."/".$database,
            'table' => "logins",
            'usernamecol' => "username",
            'passwordcol' => "pswd", 
            'cryptType' => "md5",
            'db_fields' => "*"
        );

        // Instantiate Auth_HTTP
        $auth = new Auth_HTTP("MDB2", $dblogin) or die("Can't connect!");
        // Message to provide in case of authentication failure
        $auth->setCancelText('Authentication credentials not accepted! ');
        // Begin the authentication process
        $auth->start();
        // Check for credentials. If not available, prompt for them
        if($auth->getAuth()) {
            echo "Welcome, {$auth->getAuthData('username')}<br />";
        }
    }
}
