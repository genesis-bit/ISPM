@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-2">
            <div class="">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-2 w-1 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalEmpresa" onclick="limparEmpresa()">
                  <i class="bi bi-plus-circle"></i> Adicionar Empresa
                </button>
               

                <button type="button" class="btn btn-primary w-1 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalFuncionario">
                     <i class="bi bi-person-add"></i> Adicionar Funciónario
                </button>
                  
                
            </div>
          </div>
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">{{ __('Empresas') }}</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      <table class="table table-hover  table-striped">
                          <thead>
                              <tr class="table-secondary">
                                <th scope="col">Empresa</th>
                                <th scope="col">NIF</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Missão</th>
                                <th scope="col">Nº Funcionarios</th>
                                <th scope="col">Opções</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($Empresas as $E)
                                  <tr>
                                    <td>{{$E->nome}}</td>
                                    <td>{{$E->nif}}</td>
                                    <td>{{$E->endereco}}</td>
                                    <td>{{$E->tipoEmpresa->descricao}}</td>
                                    <td>
                                      <button type="button" class="btn btn-link" onclick="listaFuncionario({{$E->Funcionarios}},'{{$E->nome}}')" data-bs-toggle="modal" data-bs-target="#modalListaFuncionario">{{$E->Funcionarios->count()}}</button>
                                    </td>
                                    <td>
                                      @if($E->id != 1)
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" 
                                            data-bs-target="#modalEmpresa" onclick="atualizarEmpresa('{{$E->id}}','{{$E->nome}}','{{$E->nif}}','{{$E->endereco}}')">
                                          <i class="bi bi-pencil-fill"></i></button>
                                        <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></button> 
                                      @endif                                 
                                    </td>
                                  </tr>
                              @endforeach
                              
                            </tbody>
                      </table>
                  </div>
              </div>
          </div>       
      </div>
  </div>

<!-- Section Modal-->
    <div class="modal fade" id="modalEmpresa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEmpresa" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">      
            @include('empresa.addEmpresa')
        </div>
    </div>
    <div class="modal fade" id="modalFuncionario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFuncionario" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">      
          @include('empresa.addFuncionario')
      </div>
  </div>
  <div class="modal fade" id="modalListaFuncionario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFuncionario" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">      
        @include('empresa.listaFuncionario')
    </div>
</div>
@endsection
