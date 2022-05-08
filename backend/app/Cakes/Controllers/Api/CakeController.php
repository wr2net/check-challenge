<?php

namespace App\Cakes\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Cakes\Models\Cake;
use App\Cakes\Requests\CakeRequests;
use App\Cakes\Resources\CakeResource;
use App\Cakes\Services\CakeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class CakeController extends Controller
{
    /**
     * @var CakeService
     */
    private CakeService $cakeService;

    /**
     * @param CakeService $cakeService
     */
    public function __construct(CakeService $cakeService)
    {
        $this->cakeService = $cakeService;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request): mixed
    {
        $list = $this->cakeService->findAll();
        return CakeResource::collection($list);
    }

    /**
     * @param CakeRequests $request
     * @return JsonResponse
     */
    public function store(CakeRequests $request): JsonResponse
    {
        $cake = $this->cakeService->store($request->validated());
        return response()->json($cake, Response::HTTP_CREATED);
    }

    /**
     * @param int $cake_id
     * @return JsonResponse
     */
    public function show(int $cake_id): JsonResponse
    {
        $cake = $this->cakeService->findById($cake_id);
        return response()->json($cake, Response::HTTP_OK);
    }

    /**
     * @param CakeRequests $request
     * @param Cake $cake
     * @param int $cake_id
     * @return JsonResponse
     */
    public function update(CakeRequests $request, Cake $cake, int $cake_id): JsonResponse
    {
        $cake = $this->cakeService->update($cake, $request->validated(), $cake_id);
        return response()->json($cake, Response::HTTP_OK);
    }

    /**
     * @param int $cake_id
     * @return JsonResponse
     */
    public function enable(int $cake_id): JsonResponse
    {
        $cake = $this->cakeService->enable($cake_id);
        return response()->json($cake, Response::HTTP_OK);
    }

    /**
     * @param int $cake_id
     * @return JsonResponse
     */
    public function disable(int $cake_id): JsonResponse
    {
        $cake = $this->cakeService->disable($cake_id);
        return response()->json($cake, Response::HTTP_OK);
    }

    /**
     * @param int $cake_id
     * @return JsonResponse
     */
    public function destroy(int $cake_id): JsonResponse
    {
        $this->cakeService->destroy($cake_id);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
