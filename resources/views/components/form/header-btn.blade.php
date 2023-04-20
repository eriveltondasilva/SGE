@php
    $show = $name . '.show';
    $edit = $name . '.edit';
@endphp
@props(['person'])


<header class="row form-header mt-3">

    <div class="col-md mb-2">

        <div class="font-weight-bold text-lg" for="#">
            Matrícula:
            <span class="font-weight-normal badge badge-primary text-md">
                {{ Str::padLeft($person->id, 3, '0') }}
            </span>
        </div>

    </div>


    <div class="col-md">

        <div class="btn-group float-md-right" role="group">

            <a class="btn btn-secondary @disabled(request()->routeIs('*.show'))" href="{{ route($show, $person) }}" role="button">
                <i class="fa-solid fa-circle-chevron-left mr-1"></i>
                Voltar
            </a>


            <a class="btn btn-primary @disabled(request()->routeIs('*.edit'))" href="{{ route($edit, $person) }}" role="button">
                <i class="fa-solid fa-pen-to-square mr-1"></i>
                Editar
            </a>

        </div>

    </div>

</header>
