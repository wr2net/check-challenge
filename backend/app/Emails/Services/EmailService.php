<?php

namespace App\Emails\Services;

use App\Emails\Models\Email;
use App\Emails\Models\Repositories\EmailRepositoryInterface as EmailRepository;

class EmailService
{
    /**
     * @var EmailRepository
     */
    private EmailRepository $emailRepository;

    const EMAIL_ALREADY_EXISTS = "Email already exists. Try again please!";

    /**
     * @param EmailRepository $emailRepository
     */
    public function __construct(EmailRepository $emailRepository)
    {
        $this->emailRepository = $emailRepository;
    }

    /**
     * @return mixed
     */
    public function findAll(): mixed
    {
        return $this->emailRepository->findAll();
    }

    /**
     * @param int|string $email
     * @return mixed
     */
    public function find(int|string $email): mixed
    {
        return $this->emailRepository->find($email);
    }

    /**
     * @param array $data
     * @return Email|array
     */
    public function store(array $data): Email|array
    {
        $exists = $this->find($data['email']);
        if (isset($exists->id)) {
            return [
                "message" => self::EMAIL_ALREADY_EXISTS,
            ];
        }
        return $this->emailRepository->store($data);
    }

    /**
     * @param Email $email
     * @param array $data
     * @param int $email_id
     * @return Email|array
     */
    public function update(Email $email, array $data, int $email_id): Email|array
    {
        return $this->emailRepository->update($email, $data, $email_id);
    }

    /**
     * @param int $email_id
     * @return mixed
     */
    public function enable(int $email_id): mixed
    {
        return $this->emailRepository->enable($email_id);
    }

    /**
     * @param int $email_id
     * @return mixed
     */
    public function disable(int $email_id): mixed
    {
        return $this->emailRepository->disable($email_id);
    }

    /**
     * @param int $email_id
     * @return mixed
     */
    public function destroy(int $email_id): mixed
    {
        return $this->emailRepository->destroy($email_id);
    }
}
