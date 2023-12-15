<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StudentsController extends Controller
{
    public function list(): Collection
    {
        return Students::query()
            // ->orderBy('created_at', 'desc')
            ->get();
    }

    public function info($id): Model
    {
        $model = Students::query()
            ->where('id', $id)
            ->first();

        if ($model === null) {
            throw new NotFoundHttpException('Студент не найден.');
        }

        return $model;
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