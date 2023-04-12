<?php
    if (!isset($_SESSION['authenticated'])) {
        header('Location: ./login.php');
        exit();
    }
