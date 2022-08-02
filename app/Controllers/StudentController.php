<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function __construct()
    {
        $this->studentModel = model(StudentModel::class);   
    }

    public function index()
    {
        $studentModel = model(StudentModel::class);
        $data = [
            'title' => 'Students',
            'students' => $studentModel->findAll()
        ];
        return view('Students/index', $data);
    }

    public function create() {
        
        $data = [
            'title' => 'Create student'
        ];

        if ($this->request->getMethod() === 'post' && $this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required',
            'phone' => 'required',
            'course' => 'required',
        ])) {
            $this->studentModel->save([
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'course' => $this->request->getPost('course'),
            ]);

            return redirect('students')->with('status', 'Student record inserted successfully');
        }
        
        return view('Students/create', $data);
    }

    public function update($id = null) {
        $data = [
            'title' => 'Update Student',
            'student' => $this->studentModel->find($id)
        ];

        if($this->request->getMethod() === 'post' && $this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required',
            'phone' => 'required',
            'course' => 'required',
        ])) {
            $this->studentModel->update($id, [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'course' => $this->request->getPost('course'),
            ]);
            return redirect('students')->with('status', 'Student record has been updated successfully');

        }
        
        return view('Students/update', $data);
    }

    public function delete($id = null) {
        echo $id;
    }
}