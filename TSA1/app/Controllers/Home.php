<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('created_at', 'ASC')
                ->findAll()
        ];

        return view('home', $data);
    }

    public function tasks(): string
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('created_at', 'ASC')
                ->findAll()
        ];

        return view('tasks', $data);
    }

    public function profile(): string
    {
        $userModel = new UserModel();

        $data = [
            'user' => $userModel->first()
        ];

        return view('profile', $data);
    }

    public function about(): string
    {
        return view('about');
    }
}