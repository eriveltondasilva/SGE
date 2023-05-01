<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Student;
use App\Services\SearchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct(protected SearchService $searchService)
    {
        //
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Variáveis
        $query = Student::isActive();
        $search   = request()->search;

        // Classe de serviço para fazer pesquisar no model e filtrar os resultados
        $query = $this->searchService->SearchPerson($query, $search);

        $students = $query->get();


        //
        return view('dashboard.student.index', compact('students', 'search'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create(Student $student)
    {
        // Variável
        $lastStudent = Student::isActive()->max('id');



        //
        return view('dashboard.student.create', compact('lastStudent'));
    }





    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        // Variável para encurtar validação
        $validated = $request->validated();

        // Criar o cadastro do aluno
        $student = Student::create($validated);

        // Adicionar id da escola no cadastro do aluno
        $student->school_id = Auth::user()->school_id;
        $student->save();

        // Adicionar responsável ao cadastro do aluno
        $student->relative()->create($validated['relative']);

        // Adicionar endereço ao cadastro do aluno
        $student->address()->create($validated['address']);



        //
        return back()->with('msg', 'Cadastro do aluno realizado com sucesso!');
    }





    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        return view('dashboard.student.show', compact('student'));
    }





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
        return view('dashboard.student.edit', compact('student'));
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Student $student)
    {
        // Variável
        $validated = $request->validated();


        // Atualizar cadastro do aluno
        $student->update($validated);

        // Atualizar dados do responsável pelo aluno
        $student->relative()->update($validated['relative']);

        // Atualizar endereço do aluno
        $student->address()->update($validated['address']);



        //
        return to_route('student.show', $student)
            ->with('msg', 'Cadastro do aluno atualizado com sucesso!');
    }





    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Student $student)
    // {
    //     //
    // }
}
