<?php

    $hostname='localhost';
    $un = 'root';
    $pw = '';
    $dbname = 'teacher_detail';

    $con = mysqli_connect($hostname,$un,$pw,$dbname) or die("Failed to connect with database");