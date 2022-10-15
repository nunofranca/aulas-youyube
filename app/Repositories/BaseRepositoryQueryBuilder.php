<?php
declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

abstract class BaseRepositoryQueryBuilder {

    private string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function getAll()
    {

    }
    public function create(array $attributes)
    {
        DB::table($this->table)->insert($attributes);
    }
}
