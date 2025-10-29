<?php
// Controller - Handle dashboard logic
class BerandaController
{
    // Show dashboard page
    public function showBeranda()
    {
        // Check if user is logged in
        if (!isset($_SESSION['username'])) {
            header('Location: index.php?page=login&notifikasi=Anda harus login terlebih dahulu');
            exit();
        }

        $username = $_SESSION['username'];
        require_once __DIR__ . '/../view/beranda.php';
    }
}