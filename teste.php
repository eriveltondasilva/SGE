<!-- Formulário de cadastro do aluno -->
<input class="form-control" id="name" name="name" type="text">

<input class="form-control" id="address[street]" name="address[street]" type="text">

<!-- Formulário de cadastro do aluno -->
public function store(StudentRequest $request)
    {
    // Criar o cadastro do aluno
    $student = Student::create($request->validated());


    // Adicionar endereço ao cadastro do aluno
    $student->address()->create($request->validated['address']);
}
