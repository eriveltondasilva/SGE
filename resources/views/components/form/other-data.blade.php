@props(['person'])
@php($readonly = request()->routeIs('*.show'))


<section class="other-data mt-5">

    <h4 class="text-center">Outros Dados</h4>


    {{-- Campo para benefícios de governo --}}
    <div class="form-group">

        <label for="gov_benefits">Benefício do Governo:</label>
        <input class="form-control" id="gov_benefits" name="gov_benefits" type="text"
               value="{{ old('gov_benefits', $person ?? '') }}" placeholder="Insira benefícios do governo..."
               @readonly($readonly)>

    </div>


    {{-- Campo para colocar problemas de saúde --}}
    <div class="form-group">

        <label for="health_problems">Problema de Saúde:</label>
        <input class="form-control" id="health_problems" name="health_problems" type="text"
               value="{{ old('health_problems', $person ?? '') }}" placeholder="Insira problemas de saúde..."
               @readonly($readonly)>

    </div>


    {{-- Campo para as observações referentes --}}
    <div class="form-group">

        <label for="note">Observação:</label>
        <textarea class="form-control text-justify" id="note" name="note" rows="5"
                  placeholder="Insira alguma observação..." @readonly($readonly)>{{ old('note', $person ?? '') }}</textarea>

    </div>

</section>
