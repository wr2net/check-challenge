<?php

namespace App\Emails\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Emails\Models\Email;
use App\Emails\Requests\EmailRequests;
use App\Emails\Resources\EmailResource;
use App\Emails\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class EmailController extends Controller
{
    /**
     * @var EmailService
     */
    private EmailService $emailService;

    /**
     * @param EmailService $emailService
     */
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request): mixed
    {
        $list = $this->emailService->findAll();
        return EmailResource::collection($list);
    }

    /**
     * @param EmailRequests $request
     * @return JsonResponse
     */
    public function store(EmailRequests $request): JsonResponse
    {
        $email = $this->emailService->store($request->validated());
        return response()->json($email, Response::HTTP_CREATED);
    }

    /**
     * @param int|string $email
     * @return JsonResponse
     */
    public function show(int|string $email): JsonResponse
    {
        $email = $this->emailService->find($email);
        return response()->json($email, Response::HTTP_OK);
    }

    /**
     * @param EmailRequests $request
     * @param Email $email
     * @param int $email_id
     * @return JsonResponse
     */
    public function update(EmailRequests $request, Email $email, int $email_id): JsonResponse
    {
        $email = $this->emailService->update($email, $request->validated(), $email_id);
        return response()->json($email, Response::HTTP_OK);
    }

    /**
     * @param int $email_id
     * @return JsonResponse
     */
    public function enable(int $email_id): JsonResponse
    {
        $email = $this->emailService->enable($email_id);
        return response()->json($email, Response::HTTP_OK);
    }

    /**
     * @param int $email_id
     * @return JsonResponse
     */
    public function disable(int $email_id): JsonResponse
    {
        $email = $this->emailService->disable($email_id);
        return response()->json($email, Response::HTTP_OK);
    }

    /**
     * @param int $email_id
     * @return JsonResponse
     */
    public function destroy(int $email_id): JsonResponse
    {
        $this->emailService->destroy($email_id);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
