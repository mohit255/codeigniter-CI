<?php
include 'db.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

//$app->get('/users','getUsers');
//$app->get('/updates','getUserUpdates');
//$app->post('/updates', 'insertUpdate');
//$app->post('/insert','insertUsers');
//$app->delete('/updates/delete/:update_id','deleteUpdate');
//$app->delete('/user/:id','deleteUser');
//$app->get('/users/search/:query','getUserSearch');
$app->put('/users','updateUser');
$app->run();

/*
function getUsers() {
	$sql = "SELECT id,fn,ln FROM data";
	try {
		$db = getDB();
		$stmt = $db->query($sql);  
		$users = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo '{"users": ' . json_encode($users) . '}';
	} catch(PDOException $e) {
	    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function insertUsers()
{
	$request=\Slim\Slim::getInstance()->request();
	$update=json_decode($request->getBody());
	$sql="insert into data (fn,ln) values 
	('".$update->fn."','".$update->ln."')";
	try{
		$db=getDB();
		$stmt=$db->prepare($sql);
		$stmt->execute();
		//$users=$stmt->fetchAll(PDO::FETCH_OBJ);
		$users=$stmt->setFetchMode(PDO::FETCH_ASSOC);
		//$users=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$db=null;
		echo '{"insert":'.json_encode($users).'}';
		echo"values insert";
		}
	catch(PDOEXception $e){
		echo '{"error":{"text":'.$e->getMessage().'}}';
		}	
}

function getUserUpdates() {
	$sql = "SELECT A.user_id, A.username, A.name, A.profile_pic, B.update_id, B.created FROM users A, updates B WHERE A.user_id=B.user_id_fk  ORDER BY B.update_id DESC";
	try {
		$db = getDB();
		$stmt = $db->prepare($sql); 
		$stmt->execute();		
		$updates = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo '{"updates": ' . json_encode($updates) . '}';
		
	} catch(PDOException $e) {
	    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getUserUpdate($update_id) {
	$sql = "SELECT A.user_id, A.username, A.name, A.profile_pic, B.update_id, B.created FROM users A, updates B WHERE A.user_id=B.user_id_fk AND B.update_id=:update_id";
	try {
		$db = getDB();
		$stmt = $db->prepare($sql);
        $stmt->bindParam("update_id", $update_id);		
		$stmt->execute();		
		$updates = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo '{"updates": ' . json_encode($updates) . '}';
		
	} catch(PDOException $e) {
	    //error_log($e->getMessage(), 3, '/var/tmp/php.log');
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

/*function deleteUser($u_id)
  {
    $request= \Slim\Slim ::getInstance()->request(); 
    $update=json_decode($request->getBody());
    $sql="DELETE FROM data WHERE id = :id";
    try {
        $dbCon = getDB();
        $stmt = $dbCon->prepare($sql);  
        $stmt->bindParam("id", $u_id);
        $stmt->execute();
        $dbCon = null;
        echo true;
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}'; 
    }
} 

function deleteUpdate($u_id)
{
   
	$sql = "DELETE FROM data WHERE id=:id";
	try {
		$db = getDB();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("id", $u_id);
		$stmt->execute();
		$db = null;
		echo true;
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
	
}
*/

function updateUser($id) 
{
	$request=\Slim\slim::getInstance()->request();
	$update=json_decode($request->getBody());
	$sql="UPDATE data SET fn='".$update->fn."',ln='".$update->ln."' WHERE id=:id";
	try{
		$db=getDB();
		$stmt=$db->prepare($sql);
		$stmt->bindParam("id",$id);
		$stmt->execute();
		$users=$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$db=null;
		echo '("update":' .json_encode($users). ')';
		echo "update";
	   }
	catch(PSOException $e){
	echo '("error":("text":'.$e->getMessage() .'))';
		}
}
/*
function getUserSearch($query) {
	$sql = "SELECT user_id,username,name,profile_pic FROM users WHERE UPPER(name) LIKE :query ORDER BY user_id";
	try {
		$db = getDB();
		$stmt = $db->prepare($sql);
		$query = "%".$query."%";  
		$stmt->bindParam("query", $query);
		$stmt->execute();
		$users = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo '{"users": ' . json_encode($users) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
*/

?>