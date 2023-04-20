<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


@include('layouts.partials._head')


<body class="hold-transition sidebar-mini">

    {{-- wrapper --}}
    <div class="wrapper">

        {{-- navbar --}}
        @include('layouts.partials._navbar')


        {{-- sidebar --}}
        @include('layouts.partials._sidebar')


        {{-- content-wrapper --}}
        <div class="content-wrapper">

            {{-- content-header --}}
            @include('layouts.partials._header')


            {{-- main content --}}
            <main class="content">

                {{-- container-fluid --}}
                <div class="container-fluid">

                    {{-- row --}}
                    <div class="row">

                        {{-- col-12 --}}
                        <div class="col-lg-12">

                            {{ $infobox ?? '' }}


                            {{-- card-yellow --}}
                            <div class="card card-yellow">

                                {{-- Código para deixar uma linha grossa no topo dos mains das páginas  --}}
                                <div class="card-header">
                                    <h5></h5>
                                </div>


                                {{ $slot }}

                            </div>
                            {{-- /.card-yellow --}}

                        </div>
                        {{-- /.col-12 --}}

                    </div>
                    {{-- /.row --}}

                </div>
                {{-- /.container-fluid --}}

            </main>
            {{-- /.main content --}}

        </div>
        {{-- /.content-wrapper --}}


        @include('layouts.partials._footer')

    </div>
    {{-- /.wrapper --}}

</body>


</html>
