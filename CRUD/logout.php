<?php

session_start();

unset($_SESSION['login']);
unset($_SESSOION['usuario']);

header('location:index.php');
