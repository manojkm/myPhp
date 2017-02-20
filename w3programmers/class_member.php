<?php
class Member
{
    public $username = "";
    private $loggedIn = false;

    public function login() {
        $this->loggedIn = true;
    }

    public function logout() {
        $this->loggedIn = false;
    }

    public function isLoggedIn() {
        return $this->loggedIn;
    }
}
?>
