<?php
// Mulai session
session_start();

// Hapus semua data session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman register.html
header('Location: register.html');
exit;
?>