<?php

namespace App\Models;

use PDO;

class UserModel extends Model
{
    protected static array $safe = ["id", "created_at", "canceled_at"];

    protected static string $entity = "users";

    public function boostrap() {}

    public function load(int $id, string  $columns = "*")
    {
        $load = $this->read(
            "SELECT {$columns} FROM " . self::$entity . " WHERE id = :id",
            "id={$id}"
        );

        dd($this->fail());

        if ($this->fail() || !$load->rowCount()) {
            $this->message = "Usuário não encontrado";
            return null;
        }

        return $load->fetch(PDO::FETCH_ASSOC);
    }

    public function find(string $email) {}

    public function all(int $limit, int $offset) {}

    public function save() {}

    public function destroy() {}

    public function required() {}
}
