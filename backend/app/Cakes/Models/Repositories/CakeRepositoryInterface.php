<?php

namespace App\Cakes\Models\Repositories;

use App\Cakes\Models\Cake;

interface CakeRepositoryInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id): mixed;

    /**
     * @return mixed
     */
    public function findAll(): mixed;

    /**
     * @param array $data
     * @return Cake
     */
    public function store(array $data): Cake;

    /**
     * @param Cake $cake
     * @param array $data
     * @param int $cake_id
     * @return Cake
     */
    public function update(Cake $cake, array $data, int $cake_id): Cake;

    /**
     * @param int $cake_id
     * @return mixed
     */
    public function enable(int $cake_id): mixed;

    /**
     * @param int $cake_id
     * @return Cake
     */
    public function disable(int $cake_id): Cake;

    /**
     * @param int $cake_id
     * @return mixed
     */
    public function destroy(int $cake_id);
}
