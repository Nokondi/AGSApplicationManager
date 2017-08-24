<?php
    require "loginheader.php";
    require "includes/functions.php";
    include "config.php";
    $s = checkRole($_SESSION['username']);
    if ($s == 'student') {header("location:form_student.php");}
    elseif($s == 'teacher') {header("location:form_teacher.php");}
    elseif($s == 'counselor') {header("location:form_counselor.php");}
?>