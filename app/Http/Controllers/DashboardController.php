<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::isActive()->count();
        $teachers = Teacher::isActive()->count();

        return view('dashboard.index', compact('students', 'teachers'));
    }
}
