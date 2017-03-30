<?php


class Session
{
    private $signed_in = false;
    public $user_id;
    public $message;
    public $count;

    public function __construct()
    {
        session_start();
        $this->check_login();
        $this->check_message();
        $this->visitors_count();
    }


    public function message($msg = "")
    {

        if (!empty($msg)) {
            $_SESSION['message'] = $msg;
        } else {
            return $this->message;
        }

    }

    public function check_message()
    {

        if (isset($_SESSION['message'])) {

            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }

    }


    public function is_signed_in()
    {
        return $this->signed_in;
    }

    public function login($user)
    {
        if ($user) {
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->signed_in = true;
        }

    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;
    }


    public function check_login()
    {

        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        } else {
            unset($this->user_id);
            $this->signed_in = false;
        }
    }


    public function visitors_count()
    {
        if (isset($_SESSION['count'])) {
            return $this->count = $_SESSION['count']++;

        } else {
            return $_SESSION['count'] = 0;
        }


    }
}

$session = new Session();
?>



