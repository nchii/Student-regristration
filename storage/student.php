<?php

session_start();

$student_list=[];

if (isset($_SESSION['student_list'])){
    $student_list=$_SESSION['student_list'];
}