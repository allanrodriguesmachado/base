<?php

use App\Models\{Model, UserModel};

require_once __DIR__ . '/../vendor/autoload.php';

$layer = new ReflectionClass(Model::class);


dd(get_class_methods($layer));