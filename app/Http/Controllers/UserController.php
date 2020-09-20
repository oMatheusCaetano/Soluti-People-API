<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userService;
    private $perPage = 15;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Fetches all users with pagination.
     * It also accepts query strings for filters by e-mail, city or CPF
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $data = $this->getWithFilters($request->all());
            return $data
            ? response()->json($data, 200)
            : response()->json(User::paginate($this->perPage), 200);
        } catch (\Exception $e) {
            return $this->getGeneral500Response();
        }
    }

    /**
     * Fetch one users
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        try {
            $user = User::find($id);
            if (!$user) {
                return response()->json('', 204);
            } else {
                $user['telephones'] = $user->telephones;
                $user['address'] = $user->address;
                return response()->json($user, 200);
            }
        } catch (\Exception $e) {
            return $this->getGeneral500Response();
        }
    }

    /**
     * Create a new user
     *
     * @param int $id
     * @return JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        try {
            return response()->json(User::create($request->all()), 201);
        } catch (\Exception $e) {
            return $this->getGeneral500Response();
        }
    }

    /**
     * Update an users
     *
     * @param int $id
     * @return JsonResponse
     */
    public function update(UserRequest $request, int $id): JsonResponse
    {
        try {
            $user = User::find($id);
            if (!$user) {
                return $this->getGeneral404Response();
            }
            $user = $this->userService->update($request->all(), $user);
            $user['telephones'] = $user->telephones;
            $user['address'] = $user->address;
            return response()->json($user, 200);
        } catch (\Exception $e) {
            return $this->getGeneral500Response();
        }
    }

    /**
     * Fetches users base on e-mail, city or CPF filters
     *
     * @param array $filters
     */
    private function getWithFilters(array $filters)
    {
        if (isset($filters['cpf'])) {
            return User::where('cpf', $filters['cpf'])->paginate($this->perPage);
        }

        if (isset($filters['email'])) {
            return User::where('email', $filters['email'])->paginate($this->perPage);
        }

        if (isset($filters['city'])) {
            $data = Address::where('city', $filters['city'])->paginate($this->perPage);
            foreach ($data as $key => $value) {
                $data[$key] = $value->user;
            }
            return $data;
        }

        return false;
    }
}
