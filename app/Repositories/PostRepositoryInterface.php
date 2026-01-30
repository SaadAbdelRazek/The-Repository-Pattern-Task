<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface PostRepositoryInterface
{
    public function getAll(): Collection;
    public function paginate(int $perPage = 10): LengthAwarePaginator;
}
