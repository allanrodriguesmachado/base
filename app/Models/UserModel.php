<?php 

namespace App\Models;

class UserModel extends Model {
    protected static array $safe = ["id", "created_at", "canceled_at"];

    protected static string $entity = "users";

    public function boostrap() {}

    public function load(int $id) {}

    public function find(string $email) {}

    public function all(int $limit, int $offset) {

    }

    public function save() {}

    public function destroy() {}

    public function required() {}
}