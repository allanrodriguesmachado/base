<?php

namespace App\Models;

use App\DB\Connection;
use PDO;
use PDOException;

abstract class Model
{
    protected ?object $data;
    protected ?PDOException $fail;
    protected ?string $message;

    public function data(): ?object
    {
        return $this->data;
    }

    public function fail(): ?PDOException
    {
        return $this->fail;
    }

    public function message(): ?string
    {
        return $this->message;
    }

    protected function create() {}
    protected function read(string $select, ?string $params = null) {
        try {
            $stmt = Connection::connection()->prepare($select);

            if ($params) {
                parse_str($params, $params);
                foreach ($params as $key => $value) {
                   $stmt->bindValue(":{$key}", $value);
                }
            }
          $stmt->execute();
          return $stmt;
        }catch(PDOException $exception) {
            $this->fail = $exception;
            return null;
        }
    }
    protected function update() {}
    protected function delete() {}

    protected function safe(): void {}
    private function filter():void {}
}
