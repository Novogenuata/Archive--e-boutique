
<?php

class AdminAuth {
    
    private $adminUsername = "root";
    private $adminPassword = "root";

    public function validateCredentials($username, $password) {
        return ($username == $this->adminUsername && $password == $this->adminPassword);
    }
}
?>