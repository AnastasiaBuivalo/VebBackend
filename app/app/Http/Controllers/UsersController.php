<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UsersController extends Controller
{
    public function list(): Collection
    {
        return Users::query()
            // ->orderBy('created_at', 'desc')
            ->get();
    }

    public function info($id): Model
    {
        $model = Users::query()
            ->where('id', $id)
            ->first();
        
        if ($model === null) {
            throw new NotFoundHttpException('Пользователь не найден.');
        }

        return $model;
    }

    public function login(Request $request)
    {
        
        $values = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        
        if (!Auth::attempt($values)) {
            throw new UnprocessableEntityHttpException('Неверный логин или пароль.');
        }

        /** @var $user User */
        $user = Auth::user();

        return [
            'token' => $user->createToken('API')->plainTextToken
        ];
    }

    public function logout()
    {
        /** @var $user User */
        $user = Auth::user();
        $user->tokens()->delete();
    }

    // public function create(Request $request): Model
    // {
    //     $values = $request->validate([
    //         'name' => 'required|string|max:128',
    //         'image' => 'required',
    //         'price' => 'required|numeric|min:0'
    //     ]);

    //     return Product::create($values);
    // }
}