<?php 

/**
 * 
 */
class UserRepository 
{
	$database = new Database();
    $connection = $database->checkConnection();
    $req = $connection->prepare('INSERT INTO user (id, name, userName, email, password) VALUES (null, :name, :userName, :email, :password)');
    $req->bindValue(':name',$_user->name(), \PDO::PARAM_STR);
    $req->bindValue(':userName',$_user->userName(), \PDO::PARAM_STR);
    $req->bindValue(':email',$_user->email(), \PDO::PARAM_STR);
    $req->bindValue(':password',password_hash($_user->password(),PASSWORD_BCRYPT), \PDO::PARAM_STR);
    $req->execute();

}



 ?>
