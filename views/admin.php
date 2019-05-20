<?php

if (!(isset($_SESSION["username"]))){
    require 'cms/login.php';
} else {
    require 'cms/dashboard.php';
}