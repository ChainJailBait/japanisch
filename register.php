<?php session_start();
require_once("config.inc.php");

try{
$db = new PDO('mysql:host=mysql5; dbname='.DB_NAME, DB_USER, DB_PW);
} catch (PDOException $e){
	echo "Verbindung fehlgeschlagen";
	die();
}


if(isset($_POST['register'])){
	$user = $_POST['user'];
	$pw = md5($_POST['password']);
	$pw2 = $_POST['password2'];


    $stmt2 = $db->prepare("SELECT user FROM user WHERE user = :user");
    $stmt2->bindParam(':user', $user);
    $stmt2->execute();

    if($stmt2->rowCount() > 0){
        echo "Username existiert bereits!";
    } else {
        echo "Username ok!";

    $stmt = $db->prepare("INSERT INTO user(user,pw) VALUES(:user,:pw);"); //setzt nur Text ein und führt keinen Befehl aus
	$stmt->bindValue(":user",$user);
	$stmt->bindValue(":pw",$pw);
	$stmt->execute();

    }




	
	//print_r($stmt->errorInfo());
}


/*$schonda = "SELECT Username FROM users WHERE Username VALUE ('$user')";

if (!$schonda == 0) {
	 header("Location: vorhanden.php");
	}*/
 

$sql = "SELECT * FROM user";

$result = $db->query($sql);
$result= $result->fetchAll();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<title>Registrierung</title>
</head>

<body>
<div id="center">
<div id="header">
<div id="home">
</div>
</div>
<div id="content">

<form action="index.php" method="POST">
<input type="submit" name="back" value="Zurück"/>
</form>
</p>
</div>

<div id="footer">
</div>
<div id="footer_bg">
</div>

</div>