<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Teacher;
use App\Services\SearchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
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
        $query  = Teacher::isActive();
        $search = request()->search;

        // Classe de serviço para fazer pesquisar no model e filtrar os resultados
        $query = $this->searchService->SearchPerson($query, $search);

        $teachers = $query->get();



        //
        return view('dashboard.teacher.index', compact('teachers', 'search'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create(Teacher $teacher)
    {
        // Variável
        $lastTeacher = Teacher::isActive()->max('id');



        //
        return view('dashboard.teacher.create', compact('lastTeacher'));
    }





    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        // Variável
        $validated = $request->validated();

        // Criar o cadastro do aluno
        $teacher = Teacher::create($validated);

        // Adicionar id da escola no cadastro do professor
        $teacher->school_id = Auth::user()->school_id;
        $teacher->save();

        // Adicionar endereço ao cadastro do professor
        $teacher->address()->create($validated['address']);



        //
        return back()->with('msg', 'Cadastro do professor realizado com sucesso!');
    }





    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
        return view('dashboard.teacher.show', compact('teacher'));
    }





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('dashboard.teacher.edit', compact('teacher'));
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Teacher $teacher)
    {
        // Variável
        $validated = $request->validated();

        // Atualizar cadastro do professor
        $teacher->update($validated);

        // Atualizar endereço do professor
        $teacher->address()->update($validated['address']);



        //
        return to_route('teacher.show', $teacher)
            ->with('msg', 'Cadastro do professor atualizado com sucesso!');
    }





    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Teacher $teacher)
    // {
    //     //
    // }
}
