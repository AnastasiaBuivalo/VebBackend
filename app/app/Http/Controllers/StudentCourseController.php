<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StudentCourseController extends Controller
{
    public function list(): Collection
    {
        return StudentCourse::query()
            // ->orderBy('created_at', 'desc')
            ->get();
    }

    public function info($id): Model
    {
        $model = StudentCourse::query()
            ->where('id', $id)
            ->first();

        if ($model === null) {
            throw new NotFoundHttpException('Курс не найден.');
        }

        return $model;
    }

}