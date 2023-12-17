<?php
require_once 'database.php';

 $show_users = new Database(); 

 $users = $show_users->read();

 var_dump($users);

  

