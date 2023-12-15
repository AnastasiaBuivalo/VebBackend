<?php

namespace App\Http\Controllers;

use App\Models\Lecturers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LecturersController extends Controller
{
    public function list(): Collection
    {
        return Lecturers::query()
            // ->orderBy('created_at', 'desc')
            ->get();
    }

    public function info($id): Model
    {
        $model = Lecturers::query()
            ->where('id', $id)
            ->first();

        if ($model === null) {
            throw new NotFoundHttpException('Преподаватель не найден.');
        }

        return $model;
    }

}