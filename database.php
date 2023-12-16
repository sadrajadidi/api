<?php
require_once 'config.php';


try{

    $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('SELECT * FROM users');
    $stmt->execute();
     $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $users = $stmt->fetchAll();
    
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

}

class Database {
// database confige to connection 
protected $user_name = USER_NAME;
protected $server_name =SERVER;
protected $password = PASSWORD;
protected $db_name = DBNAME;
 public function __construct() {
    try{

        $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare('SELECT * FROM users');
        $stmt->execute();
         $stmt->setFetchMode(PDO::FETCH_ASSOC);
         $users = $stmt->fetchAll();
        
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    
    }
    
}

}



// foreach($users as $user)
// {
    // $user['first_name'];
// }