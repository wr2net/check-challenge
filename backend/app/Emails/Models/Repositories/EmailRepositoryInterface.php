<?php

namespace App\Emails\Models\Repositories;

use App\Emails\Models\Email;

interface EmailRepositoryInterface
{
    /**
     * @param int|string $email
     * @return mixed
     */
    public function find(int|string $email): mixed;

    /**
     * @return mixed
     */
    public function findAll(): mixed;

    /**
     * @param array $data
     * @return Email
     */
    public function store(array $data): Email;

    /**
     * @param Email $email
     * @param array $data
     * @param int $email_id
     * @return Email
     */
    public function update(Email $email, array $data, int $email_id): Email;

    /**
     * @param int $email_id
     * @return mixed
     */
    public function enable(int $email_id): mixed;

    /**
     * @param int $email_id
     * @return mixed
     */
    public function disable(int $email_id): mixed;

    /**
     * @param int $email_id
     * @return mixed
     */
    public function destroy(int $email_id);
}
