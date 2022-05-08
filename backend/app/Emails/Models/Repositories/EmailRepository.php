<?php

namespace App\Emails\Models\Repositories;

use App\Emails\Models\Email;

class EmailRepository implements EmailRepositoryInterface
{
    /**
     * @param int|string $email
     * @return mixed
     */
    public function find(int|string $email): mixed
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return Email::where('email', $email)
                ->first();
        }

        return Email::withTrashed()
            ->findOrFail($email);
    }

    /**
     * @return mixed
     */
    public function findAll(): mixed
    {
        return Email::get();
    }

    /**
     * @param array $data
     * @return Email
     */
    public function store(array $data): Email
    {
        $email = new Email;
        $email->name = $data['name'];
        $email->email = $data['email'];
        $email->save();
        return $email;
    }

    /**
     * @param Email $email
     * @param array $data
     * @param int $email_id
     * @return Email
     */
    public function update(Email $email, array $data, int $email_id): Email
    {
        $email->exists = true;
        $email->id = $email_id;
        $email->name = $data['name'];
        $email->email = $data['email'];
        $email->save();
        return $email;
    }

    /**
     * @param int $email_id
     * @return mixed
     */
    public function enable(int $email_id): mixed
    {
        return Email::withTrashed()
            ->find($email_id)
            ->restore();
    }

    /**
     * @param int $email_id
     * @return mixed
     */
    public function disable(int $email_id): mixed
    {
        $email = Email::find($email_id);
        $email->delete();
        return $email;
    }

    /**
     * @param int $email_id
     * @return null
     */
    public function destroy(int $email_id)
    {
        $email = Email::find($email_id);
        $email->forceDelete();
        return null;
    }
}
