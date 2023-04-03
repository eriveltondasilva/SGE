<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::isActive()->orderBy('full_name')->get();

        return view('dashboard.student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();

        $student->full_name = $request->full_name;
        $student->rg = $request->rg;
        $student->cpf = $request->cpf;
        $student->email = $request->email;
        $student->birth_place = $request->birth_place;
        $student->birth_date = $request->birth_date;
        $student->gender = $request->gender;
        $student->kin_name = $request->kin_name;
        $student->kin_kinship = $request->kin_kinship;
        $student->kin_telephone = $request->kin_telephone;
        $student->address_street = $request->address_street;
        $student->address_complement = $request->address_complement;
        $student->address_neighborhood = $request->address_neighborhood;
        $student->address_city = $request->address_city;
        $student->address_cep = $request->address_cep;
        $student->address_state = $request->address_state;
        $student->nationality = $request->nationality;
        $student->gov_benefits = $request->gov_benefits;
        $student->health_problem = $request->health_problem;
        $student->note = $request->note;

        // TODO: pegar a escola a qual pertence o usuário e colocar no
        // cadastro do aluno
        // $user = auth()->user();
        // $student->school_id = $user->school_id;

        $student->save();

        return redirect('/painel')->with('msg', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('dashboard.student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('dashboard.student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // $student->full_name = $request->full_name;
        // $student->save();

        $student->full_name = $request->full_name;
        $student->rg = $request->rg;
        $student->cpf = $request->cpf;
        $student->email = $request->email;
        $student->birth_place = $request->birth_place;
        $student->birth_date = $request->birth_date;
        $student->gender = $request->gender;
        $student->kin_name = $request->kin_name;
        $student->kin_kinship = $request->kin_kinship;
        $student->kin_telephone = $request->kin_telephone;
        $student->address_street = $request->address_street;
        $student->address_complement = $request->address_complement;
        $student->address_neighborhood = $request->address_neighborhood;
        $student->address_city = $request->address_city;
        $student->address_cep = $request->address_cep;
        $student->address_state = $request->address_state;
        $student->nationality = $request->nationality;
        $student->gov_benefits = $request->gov_benefits;
        $student->health_problem = $request->health_problem;
        $student->note = $request->note;

        $student->save();

        return back();
        // return redirect('/students')->with('msg', 'Evento editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}