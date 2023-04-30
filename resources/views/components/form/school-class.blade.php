<div class="form-row">

    <div class="form-group col-sm">

        <label for="name">Turma:</label>
        <select class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus>

            <option>--------------------</option>
            <option value="6">6º ano</option>
            <option value="7">7º ano</option>
            <option value="8">8º ano</option>
            <option value="9">9º ano</option>

        </select>


        @error('name')
            <div class="alert alert-danger js-close_alert mt-1">Por favor, selecione uma turma.</div>
        @enderror

    </div>


    <div class="form-group col-sm">

        <label for="shift">Turno:</label>
        <select class="form-control" id="shift" name="shift">

            <option>--------------------</option>
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>

        </select>

    </div>

</div>


<div class="form-row">

    <div class="form-group col-sm">

        <label for="schooling">Escolaridade:</label>
        <select class="form-control" id="schooling" name="schooling">

            <option>--------------------</option>
            <option value="Fundamental I">Fundamental I</option>
            <option value="Fundamental II">Fundamental II</option>

        </select>

    </div>


    <div class="form-group col-sm">

        <label for="room">Sala:</label>
        <input class="form-control" id="room" name="room" type="text" placeholder="Insira a sala...">

    </div>

</div>
