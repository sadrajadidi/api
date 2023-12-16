<?php
require_once 'database.php';
use Database\Database;

 $show_users = new Database; 

 $users = $show_users->read();

 var_dump($users);