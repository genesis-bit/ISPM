<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docentes</title>
    
    
    <!-- Scripts -->
    @vite([ 'resources/js/app.js'])
    <style>
      
        .titulo{
            text-decoration: underline;
            text-align: center;
        }
        
        .negritar{
            font-weight: bolder;
        }
        p{
            text-align: justify;
            font-size: 20px;
            line-height: 1cm;
        }
        .cabecalho{
            text-align: center;
        }
        .assinatura{
            padding-left: 78%;
        }
        .rodape{
            text-align: center;
            border-top: 1px solid #333;
            bottom: 0;
            left: 0;
            height: 40px;
            position: fixed;
            width: 100%;
        }
        .container{
            padding: 2% 3% 1% 2%;
        }
        table {
        border: 1px solid black;
        border-collapse: collapse;
        background-color: #f5f5f5;
        width: 100%;
        margin-bottom: 20px;
        }

        th, td {
        padding: 8px;
        text-align: left;
        }

        th {
        background-color: #333;
        color: #fff;
        }

        tr:nth-child(even) {
        background-color: #ddd;
        }

        tr:hover {
        background-color: #ccc;
        }
        
        
    </style>

</head>
<body>
     <p class="cabecalho">República de Angola<br>
        Ministério da Educação<br>
        Instituto Superior do Moxico</p>
    <div class="container">
       <!--</p> <br><br><br><br><br>-->
       

        <h3 class="titulo">Sistema Bibliotecário Para o Instituto Superior do Moxico</h3>
        <h2 class="titulo">Relatório de Movimentação da Biblioteca</h2>
        <h4 class="titulo">({{$data[0]}}...{{$data[1]}})</h4>
        <div class="corpo">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Emprestante</th>
                        <th>Livro</th>
                        <th>Tipo</th>
                        <th>Data Emprestimo</th>
                        <th>Data Prevista</th>
                        <th>Data Devolução</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($Biblioteca as $B)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$B->Emprestante->name}}</td>
                            <td>{{$B->Livro->titulo}}</td>
                            <td>{{$B->TipoE->descricao}}</td>
                            <td>{{date('d-m-Y', strtotime($B->created_at))}}</td>
                            <td>{{date('d-m-Y', strtotime($B->data_emprestimo))}}</td>
                            <td>{{$B->dataDev == null?'':date('d-m-Y', strtotime($B->dataDev))}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        <div class="rodape">
            <small>Sistema Bibliotecário Para o Instituto Superior do Moxico</small>
            <br> Data da Impressão: {{now()}};
        </div>
    </div>
</body>
</html>