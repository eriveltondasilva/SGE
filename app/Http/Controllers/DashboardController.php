<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

// use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::isActive();
        $teachers = Teacher::isActive();

        return view('dashboard.index', [
            'students' => $students,
            'teachers' => $teachers,
        ]);
    }
}
