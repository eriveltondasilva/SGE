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
        $students = Student::isActive()->count();
        $teachers = Teacher::isActive()->count();

        return view('dashboard.index', compact('students', 'teachers'));
    }
}
