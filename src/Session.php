<?php

namespace App;

class Session
{
    public function init()
    {
        session_start();
    }

    public function  set($key, $value)
    {
        if ($key) {
            $_SESSION[$key] = $value;
        }
    }

    public function  get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public function unseting($key)
    {
        if ($_SESSION[$key]) {
            unset($_SESSION[$key]);
        } else {
            return false;
        }
    }

    public function  destroy()
    {
        return session_destroy();
    }

    public function login_index($login)
    {
        if ($this->get('login') == false) {
            header('location: login.php');
        }
    }

    public function login_another($login)
    {
        if ($this->get('login') == true) {
            header('location: index.php');
        }
    }
}
