<?php
namespace Database;
require_once 'config.php';

class Database  {
// database confige to connection 

public $conn , $user_name, $server_name, $password, $db_name;
 public function __construct() {
    $this->$user_name = USER_NAME;
    $this->$server_name = SERVER;
    $this->$password = PASSWORD;
    $this->$db_name = DBNAME;
    
    try{

        $this->conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
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