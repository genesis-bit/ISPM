@extends('layouts.app')

@section('content')
      <h1>Livros na Prateleira</h1>
      <nav>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a >Home</a></li>
              <li class="breadcrumb-item active">Prateleiras</li>
          </ol>
      </nav>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($Prateleiras as $P)
                <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>{{$P->descricao}}</span>
                                    <button href="" class="btn btn-primary" role="button" onclick="trocarIdPrateleira('{{$P->id}}');" data-bs-toggle="modal" data-bs-target="#prateleiraLivroModal"> <i class="bi bi-plus-circle-fill"></i>Livro</button>
                                </h5>
                                <ul class="card-text">
                                    @foreach ($P->Livros as $PL)
                                        <li>{{$PL->titulo}}</li>
                                    @endforeach 
                                </ul>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-link"><small class="text-muted">({{$P->Livros->count()}})</small>-Lista Completa</button>
                            </div>
                        </div>
                    </div>
            @endforeach             
        </div>

        <div class="modal fade" id="prateleiraLivroModal" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">    
                    <div class="container mt-4 ">    
                        <h3 class="text-info">Adicionar livros  <i class='bx bxs-book'></i> na prateleira</h3>
                    </div>
                    <form action="{{route('prateleiraLivro.store')}}" method="POST" class="row p-lg-3 gy-2">
                        @csrf
                    <input type="hidden" name="prateleira" id="prateleira_id">
                        <div class="col-lg-12">  
                            <div class="form-floating">
                                <select class="form-select" id="categorialivro" name="livro" aria-label="Floating label select example">
                                    @foreach ($Livros as $L)
                                        <option value="{{$L->id}}">{{$L->titulo}}</option>
                                    @endforeach  
                                </select>
                                <label for="categorialivro">Livro</label>
                            </div>
                        </div>
                        <div class="col-lg-12">   
                            <div class="form-floating">
                                <input type="number" min="0" class="form-control" id="titulolivro" name="quantidade" required >
                                <label for="titulolivro">Quantidade de Livros</label>
                            </div>             
                    </div>
                        <div class="col-lg-12">   
                            <div class="form-floating">
                                <input type="text" class="form-control" id="titulolivro" name="posicao" required >
                                <label for="titulolivro">Posição</label>
                            </div>             
                        </div>
                        <div class="col-12">
                            <button type="submit" name="add_livro" class="btn btn-primary">Adicionar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>   <!-- end modal-qualifica-adicionar -->        
@endsection


