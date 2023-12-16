<?php
require_once 'config.php';


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
      
        
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    
    }
    
}
public function read ()
{
    $query = "SELECT * FROM users";
      $stmt = $conn->prepare($query);
        $stmt->execute();
         $stmt->setFetchMode(PDO::FETCH_ASSOC);
         $users = $stmt->fetchAll();

         return $users;
}

}



// foreach($users as $user)
// {
    // $user['first_name'];
// }