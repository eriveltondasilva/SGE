<footer class="form-row mt-5">

    <div class="col-sm mb-2">

        <button class="btn btn-danger btn-block" type="reset">
            <i class="fa-solid fa-trash-can mr-1"></i>
            Limpar
        </button>

    </div>


    <div class="col-sm mb-2">

        <button class="btn btn-primary btn-block" type="submit">
            <i class="fa-solid fa-floppy-disk mr-1"></i>
            {{ request()->routeIs('*.create') ? 'Cadastrar' : 'Atualizar' }}
        </button>

    </div>

</footer>
