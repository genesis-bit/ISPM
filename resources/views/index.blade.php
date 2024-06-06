<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />-->
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col">
            Logotipo
          </div>
          <div class="col">
            Navegação
          </div>
        </div>
        <div class="row">
          <div class="col">
            1 of 3
          </div>
          <div class="col">
            2 of 3
          </div>
          <div class="col">
            3 of 3
          </div>
        </div>
      </div>



    <div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>
       
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Agencia</h5>
                  <p class="card-text">
                    <a class="btn btn-primary" target="_blank" href="">Visualizar PDF</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Despachante</h5>
                  <p class="card-text">
                    <a class="btn btn-primary" target="_blank" href="">Visualizar PDF</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Termo de Responsabilidade</h5>
                  <p class="card-text">
                    <a class="btn btn-primary" target="_blank" href="">Visualizar PDF</a>
                  </p>
                </div>
              </div>
            </div>
          </div>



    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>