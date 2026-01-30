<?php

namespace App\Services;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PostService
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPostsPaginated(int $perPage = 10): LengthAwarePaginator
    {
        return $this->postRepository->paginate($perPage);
    }
}