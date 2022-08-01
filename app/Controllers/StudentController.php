<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $studentModel = model(StudentModel::class);
        $data = [
            'title' => 'Students',
            'students' => $studentModel->findAll()
        ];
        return view('Students/index', $data);
    }
}