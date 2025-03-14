<?php

namespace App\DB;

use PDO;
use PDOException;

class Connection {
    private static ?PDO $instance = null;

    public static function connection(): ?PDO {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO(
                    'sqlite:' . __DIR__ . '/../../fullstack.db'
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
                return null;
            }
        }

        return self::$instance;
    }
}