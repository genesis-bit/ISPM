<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <a class="navbar-brand">
                    Sinotruk
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @auth
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" id="linkconsulta" href="{{ route('legalizacao.index') }}">Legalização</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/empresa') }}">Empresa</a>
                        </li>                       
                    </ul>
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        function mostrardadosBL(){
            $("#dadosProcessos").toggle();
            $("#informacao").toggle();
            $("#iconVer").toggle();
            $("#iconNVer").toggle();
        }        
        function atualizarEmpresa(id, nome, nif, endereco){
            $("#titlemodalEmpresa").text("Editar Empresa");
            $("#buttonsalvarEmpresa").text("Editar");
            $("#idEmpresaid").val(id);
            $("#nomeEmpresaid").val(nome);
            $("#nifid").val(nif);
            $("#enderecoid").val(endereco);
        }
        function limparEmpresa(){
            $("#buttonsalvarEmpresa").text("Adicionar");
            $("#titlemodalEmpresa").text("Nova Empresa");
            $("#idEmpresaid").val("");
            $("#nomeEmpresaid").val("");
            $("#nifid").val("");
            $("#enderecoid").val("");
        }
        function listaFuncionario(data, nomeEmpresa){
            $("#titleListaFucnionario").text(nomeEmpresa);
            $("#tablelistaFuncionario").text("");
            data.forEach(element => {
                $("#tablelistaFuncionario").append(
                   " <tr>"+
                        "<th scope='row'>"+element.id+"</th>"+
                        "<td>"+element.nome+"</td>"+
                        "<td>"+element.bi+"</td>"+
                        "<td></td>"+
                    "</tr>"
                );
                console.log(element);
            });
        }
        function informationLegalizacao(data){
            $("#informationBl").text(data.bl);
            $("#informationNavio").text(data.navio);
            $("#informationViagem").text(data.viagem);
            $("#informationEta").text(data.eta);
            $("#informationProduto").text(data.produto);
            $("#informationAgencia").text(data.agencia.nome);
            $("#informationFuncionario").text(data.funcionario.nome);
            $("#linkdownloadAgencia").attr("href", "/declaracao/agencia/"+data.id);
            $("#linkdownloadDespachante").attr("href", "/declaracao/despachante/"+data.id);
            $("#linkdownloadTermo").attr("href", "/declaracao/termo/"+data.id);
            console.log(data);
        }
    </script>
    
</body>
</html>
