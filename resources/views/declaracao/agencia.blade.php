<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Declaracao para Agencia</title>
    
    
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
        .assinatura{
            padding-left: 78%;
        }
        .rodape{
            text-align: right;
        }
        .container{
            padding: 15% 3% 1% 4%;
        }
       
        
    </style>

</head>
<body>
    <div class="container">
       <!--</p> <br><br><br><br><br>-->
        <p class="cabecalho">PARA<br>{{$Legalizacao->Agencia->nome}} <br>LUANDA</p>
        <h1 class="titulo">DECLARAÇÃO</h1>
        <div class="corpo">
            <p>Para efeitos julgados conveniente declara-se que o Sr. <span class="negritar">{{$Legalizacao->Funcionario->nome}}</span> 
                é funcionário da empresa acima referida em efectivo serviço,
                 com o B.I nº {{$Legalizacao->Funcionario->bi}}, está autorizado a Legalizar o B/L Surrenderd seguinte.</p>
            <p class="negritar">B/L Nº  : {{$Legalizacao->bl}}</p>
            <p>Por ser verdade e me ter sido solicitado mandei passar a presente declaração,
                 que vai por mim assinada e autenticada com o carimbo a óleo em uso nesta empresa.</p>
        </div>
        <div class="rodape">
            <br>
            <p>Luanda, aos 11 de Janeiro de 2024.</p> 
            
            <p class="assinatura">A Gerência</p> 
            <br>
            ________________________
        </div>
    </div>
</body>
</html>