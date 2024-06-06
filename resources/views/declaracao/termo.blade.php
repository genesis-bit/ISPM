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
            text-align: center;
        }
        .sublinhar{
            text-decoration: underline;
        }
        
        .negritar{
            font-weight: bolder;
        }
        p, pre{
            text-align: justify;
            font-size: 18px;
            line-height: 1cm;
        }
        .assinatura{
            padding-left: 78%;
        }
        .rodape{
            text-align: right;
        }
        .container{
            padding: 12% 3% 1% 4%;
        }
        .espacamento{
           /* margin-left: 15%;*/
            margin-right: 20%;
        }
        pre{
            font-family: initial;
        }
        
    </style>

</head>
<body>
    <div class="container">
        <p class="cabecalho">PARA<br>{{$Legalizacao->Agencia->nome}} <br>LUANDA</p>
        <h1 class="titulo sublinhar">TERMO DE RESPONSABILIDADE</h1>
        <div class="corpo">
            <pre>B/L: <span class="negritar">{{$Legalizacao->bl}}</span>                      NAVIO:<span class="negritar sublinhar">A{{$Legalizacao->navio}}</span>                   VIAGEM: <span class="negritar sublinhar">{{$Legalizacao->viagem}}</span></pre>
            <p> <span class="sublinhar">CHINANGOL, LIMITADA</span> sediada na Avenida Fidel de Castro Ruz, Viana, Luanda, Contribuinte nº 5403094229,
                 Email: Susie@chinangol.com , Tel: <span class="sublinhar">+244 922689522</span>, tendo tomado conhecimento do disposto no decreto 
                 executivo conjunto no 3-A/95 do Ministério das Finanças e Transportes, que aprova o regulamento de 
                 importação temporária, manuseamento e roexportação de Contentores na Republica de Angola, assume com o 
                 presente documento toda responsabilidade pela devolução do(s) contentor(es) constante(s) no B/L em referencia,
                  em bom estado de conservação dentro dos prazos estipulados, bem como os custos inerentes a eventuais sobre 
                  estadias, danos ou extravios.</p>
            <p>No incumprimento deste compromisso reserve-se ao representante legal do armador, 
                a aplicação de medidas que salvaguardem os interesses do seu representado.</p>
        </div>
        <div class="rodape">
            <br>
            <p>Luanda, aos 11 de Janeiro de 2024.</p> 
            
            <p class="assinatura">A Direcção</p> 
            <br>
            ________________________
        </div>
    </div>
</body>
</html>