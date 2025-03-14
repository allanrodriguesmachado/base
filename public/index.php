<?php

use App\Models\{Model, UserModel};
use App\DB\Connection;

require_once __DIR__ . '/../vendor/autoload.php';

$model = new UserModel();

$user = $model->load(1);

// return $user;
// $conn = Connection::connection();
// $stmt = $conn->prepare('SELECT * FROM users WHERE id = :id');
// $stmt->bindParam(':id', $id);
// $id = 1; 
// $stmt->execute();
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

dd($user);