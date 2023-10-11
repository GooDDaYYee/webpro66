<?php
    // setcookie("test_ck","ทดสอบเก็บค่าคุกกี้",time()+20); // แบบ cookie

    session_start(); // แบบ session
    $_SESSION['test_ss']='ทดสอบค่าเซสชั่น';

    unset($_SESSION['test_ss']); //ยกเลิกsession
    session_destroy(); //ลบsession
?>