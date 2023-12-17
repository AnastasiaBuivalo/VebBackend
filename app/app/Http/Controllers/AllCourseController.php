<?php

namespace App\Http\Controllers;

use App\Models\AllCourse;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AllCourseController extends Controller
{
    public function list(): Collection
    {
        return AllCourse::query()
            // ->orderBy('created_at', 'desc')
            ->get();
    }

    public function info($id): Model
    {
        $model = AllCourse::query()
            ->where('id', $id)
            ->first();

        if ($model === null) {
            throw new NotFoundHttpException('Курс не найден.');
        }

        return $model;
    }

    public function create_course(Request $request)
    {
        $values = $request->validate([
            'title' => 'required|string|max:100',
            'descript' => 'required|string|max:1000',
            'duration' => 'numeric|min:0',
            'price' => 'numeric|min:0',
            'img' => 'required|string|max:100',
            'lecturer_id' => 'required|numeric|min:0'
        ]);

        // $values = AllCourse::create($values);
        $course= AllCourse::create($values);
                // 'id' => $values->id,
            // ], [
            //     'title' => $values['title'],
            //     'descript' => $values['descript'],
            //     'duration' => $values['duration'],
            //     'price' => $values['price'],
            //     'img' => $values['img'],
            //     'lecturer_id' => $values['lecturer_id'],
            // ]);
        return $course;
    }

}