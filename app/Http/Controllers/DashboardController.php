<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index(Student $student)
    {
        $students = Student::isActive();

        return view('dashboard.index', [
            'students' => $students,
        ]);
    }
}
