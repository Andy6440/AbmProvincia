<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @OA\Post(
 *     path="/api/login",
 *     summary="Iniciar sesión",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="email",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="password",
 *                     type="string"
 *                 ),
 *                 example={"email": "user@example.com", "password": "password"}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Devuelve un token de acceso."
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Credenciales inválidas."
 *     )
 * )
 */
class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json(['token' => $token]);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}
