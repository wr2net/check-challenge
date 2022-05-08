<?php

namespace App\Cakes\Services;

use App\Cakes\Models\Cake;
use App\Cakes\Models\Repositories\CakeRepositoryInterface as CakeRepository;

class CakeService
{
    /**
     * @var CakeRepository
     */
    private CakeRepository $cakeRepository;

    /**
     * @param CakeRepository $cakeRepository
     */
    public function __construct(CakeRepository $cakeRepository)
    {
        $this->cakeRepository = $cakeRepository;
    }

    /**
     * @return mixed
     */
    public function findAll(): mixed
    {
        return $this->cakeRepository->findAll();
    }

    /**
     * @param int $cake_id
     * @return mixed
     */
    public function findById(int $cake_id): mixed
    {
        return $this->cakeRepository->find($cake_id);
    }

    /**
     * @param array $data
     * @return Cake
     */
    public function store(array $data): Cake
    {
        return $this->cakeRepository->store($data);
    }

    /**
     * @param Cake $cake
     * @param array $data
     * @param int $cake_id
     * @return Cake
     */
    public function update(Cake $cake, array $data, int $cake_id): Cake
    {
        return $this->cakeRepository->update($cake, $data, $cake_id);
    }

    /**
     * @param int $cake_id
     * @return mixed
     */
    public function enable(int $cake_id): mixed
    {
        return $this->cakeRepository->enable($cake_id);
    }

    /**
     * @param int $cake_id
     * @return Cake
     */
    public function disable(int $cake_id): Cake
    {
        return $this->cakeRepository->disable($cake_id);
    }

    /**
     * @param int $cake_id
     * @return mixed
     */
    public function destroy(int $cake_id): mixed
    {
        return $this->cakeRepository->destroy($cake_id);
    }
}
