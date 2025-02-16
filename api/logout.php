<?php
session_start();
session_destroy();
header("location:../");//redirect to login page