<?php
error_reporting(E_ALL);
// include('autoload.php');

// use App\Calculate\Functions\Add;
// use App\Calculate\Functions\Subtract;
// use App\Card\Header;

// $header = new Header();
// echo $header->header();

// echo Add::add(1, 2);
// echo Subtract::subtract(1, 2);

// setcookie("name", "Ashmoon", time() - 1);
// setcookie("theme", "dark");

// echo "See at app.php";

$pdo = new PDO("mysql:host=localhost;dbname=project", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

// $sql = "DELETE FROM roles WHERE id > 4";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// echo $stmt->rowCount();
$sql = "UPDATE users SET name = :name WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'name' => 'Aaron',
    'id' => 4,
]);

echo $stmt->rowCount();
// $statement = $pdo->query("SELECT * FROM users");

// $sql = "INSERT INTO roles(name, value) VALUES('Superviosr', 4)";
// $pdo->query($sql);
// echo $pdo->lastInsertId();

// $result1 = $statement->fetch();
// $result2 = $statement->fetch();
// $result3 = $statement->fetch();

// echo "<pre>";
// print_r($result2);
// echo "</pre>";

// $sql = "INSERT INTO roles (name, value) VALUES (:name, :value)";
// $sql1 = "UPDATE roles SET name = :name, value = :value WHERE id = 4";

// $stmt1 = $pdo->prepare($sql1);
// $stmt1->execute([
//     'name' => 'Supervisor',
//     'id' => 4,
// ]);

// echo $stmt1->rowCount();

// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//     'name' => 'God',
//     'value' => 999
// ]);

// echo $pdo->lastInsertId();
