<?php

class Beranda
{
    public function index()
    {
        session_start();
        $username = $_SESSION["username"];
        require_once __DIR__ . "/../view/beranda.php";
    }
}
