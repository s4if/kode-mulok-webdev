<?php

class Beranda
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION["username"])) {
            header(
                "Location: index.php?page=login&notifikasi=Maaf, anda harus login dulu",
            );
            exit();
        }
        $username = $_SESSION["username"];
        require_once __DIR__ . "/../view/beranda.php";
    }
}
