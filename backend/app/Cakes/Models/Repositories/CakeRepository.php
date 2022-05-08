<?php

namespace App\Cakes\Models\Repositories;

use App\Cakes\Models\Cake;

class CakeRepository implements CakeRepositoryInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id): mixed
    {
        return Cake::withoutTrashed()
            ->findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function findAll(): mixed
    {
        return Cake::get();
    }

    /**
     * @param array $data
     * @return Cake
     */
    public function store(array $data): Cake
    {
        $cake = new Cake;
        $cake->name = $data['name'];
        $cake->weight = $data['weight'];
        $cake->price = $data['price'];
        $cake->quantity = $data['quantity'];
        $cake->save();
        return $cake;
    }

    /**
     * @param Cake $cake
     * @param array $data
     * @param int $cake_id
     * @return Cake
     */
    public function update(Cake $cake, array $data, int $cake_id): Cake
    {
        $cake->exists = true;
        $cake->id = $cake_id;
        $cake->name = $data['name'];
        $cake->weight = $data['weight'];
        $cake->price = $data['price'];
        $cake->quantity = $data['quantity'];
        $cake->save();
        return $cake;
    }

    /**
     * @param int $cake_id
     * @return mixed
     */
    public function enable(int $cake_id): mixed
    {
        return Cake::withTrashed()
            ->find($cake_id)
            ->restore();
    }

    /**
     * @param int $cake_id
     * @return Cake
     */
    public function disable(int $cake_id): Cake
    {
        $cake = Cake::find($cake_id);
        $cake->delete();
        return $cake;
    }

    /**
     * @param int $cake_id
     * @return null
     */
    public function destroy(int $cake_id)
    {
        $cake = Cake::find($cake_id);
        $cake->delete();
        return null;
    }
}
