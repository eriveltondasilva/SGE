<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Variáveis
        $search   = $request->search;
        $students = Student::isActive();


        if ($search) {
            if (is_numeric($search)) {
                $students = $students->where('id', $search)->get();
            } else {
                $students = $students->where('name', 'like', $search . '%')->paginate(25);
            }
        } else {
            $students = $students->orderBy('name')->paginate(25);
        }



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
    public function store(StudentRequest $request)
    {
        // Validar os dados do responsável pelo aluno:
        $validatedRelative = $request->validate([
            'relative[name]'      => 'string|nullable',
            'relative[email]'     => 'string|nullable',
            'relative[telephone]' => 'string|nullable',
        ]);


        // Validar o endereço do aluno
        $validatedAddress = $request->validate([
            'street'       => 'string|nullable',
            'complement'   => 'string|nullable',
            'neighborhood' => 'string|nullable',
            'city'         => 'string|nullable',
            'cep'          => 'string|nullable',
            'state'        => 'string|nullable',
        ]);


        // Criar o cadastro do aluno
        $student = Student::create($request->validated());


        // Adicionar id da escola no cadastro do aluno
        $student->school_id = Auth::user()->school_id;
        $student->save();


        // Adicionar responsável ao cadastro do aluno
        $student->relative()->create([ $validatedRelative,
            'name'        => $request->relative['name'],
            'email'       => $request->relative['email'],
            'telephone'   => $request->relative['telephone'],
            'kinship'     => $request->kinship,
        ]);


        // Adicionar endereço ao cadastro do aluno
        $student->address()->create($validatedAddress);





        //
        return back()
            ->with('msg', 'Aluno cadastrado com sucesso!');
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
    public function update(StudentRequest $request, Student $student)
    {
        // Validação dos dados pessoais do aluno através do StudentRequest
        $validated = $request->validated();


        // Validação dos dados do responsável pelo aluno
        $validatedRelative = $request->validate([
            'relative[name]'      => 'string|nullable',
            'relative[email]'     => 'string|nullable',
            'relative[telephone]' => 'string|nullable',
        ]);


        // Validação do endereço do aluno:
        $validatedAddress = $request->validate([
            'street'       => 'string|nullable',
            'complement'   => 'string|nullable',
            'neighborhood' => 'string|nullable',
            'city'         => 'string|nullable',
            'cep'          => 'string|nullable',
            'state'        => 'string|nullable',
        ]);


        // Atualizar cadastro dos dados pessoais do aluno
        $student->update($validated);

        $student->relative()->update($validatedRelative, [
            'name'        => $request->relative['name'],
            'email'       => $request->relative['email'],
            'telephone'   => $request->relative['telephone'],
            'kinship'     => $request->kinship,
        ]);

        $student->address()->update($validatedAddress);





        //
        return to_route('student.show', $student)
            ->with('msg', 'Cadastro do aluno atualizado com sucesso!');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
