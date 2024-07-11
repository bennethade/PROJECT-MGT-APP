<?php

namespace App\Http\Controllers\API\Auth;

use App\Enums\HttpStatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function __invoke(RegisterRequest $request) : JsonResponse
    {

         /** @var User $user */
         $user = User::updateOrCreate(
            $request->validated(),
            $request->validated()
        );

        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->success(
            message: 'User Created Successfully',
            code: HttpStatusCode::CREATED->value,
            data: [
                'user' => new UserResource($user),
                'token' => $token,
            ], //@phpstan-ignore-line
        );
    }
}
