<?php
session_start();
session_destroy();
header("Location: login.php?notifikasi=Anda telah berhasil logout");
exit();
