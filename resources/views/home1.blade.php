@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ __('Legalização') }}
                  <button type="button" class="btn btn-primary float-end rounded-circle"  data-bs-toggle="modal" data-bs-target="#modalLegalizacao" >Novo</button>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-hover  table-striped">
                      <thead>
                          <tr class="table-secondary">
                            <th scope="col">BL nº</th>
                            <th scope="col">ETA</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Agencia de Navegação</th>
                            <th scope="col">Opções</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($Legalizacao as $L)
                          <tr>
                            <td>{{$L->bl}}</td>
                            <td>{{$L->eta}}</td>
                            <td>{{$L->produto}}</td>
                            <td>{{$L->Agencia->nome}}</td>
                            <td> 
                              <button class="btn btn-outline-primary" onclick="informationLegalizacao({{$L}})" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-eye-fill" id="iconVer"></i></button>
                               <!-- <button type="button" onclick="mostrardadosBL()" class="btn btn-outline-primary"></button>-->
                              <button type="button" class="btn btn-outline-warning"><i class="bi bi-pencil-fill"></i></button>
                              <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></button>                                                            
                            </td>
                          </tr>
                      @endforeach
                        </tbody>
                  </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 overflow-auto vh-10 ">
            <div class="card " id="informacao">
                <div class="card-header">{{ __('Processo de Legalização') }}</div>

                <div class="card-body">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action " aria-current="true">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Inicio</h5>
                            <small></small>
                          </div>
                          <p class="mb-1">Nos é disponilizado o documento da China. entre eles o B.L</p>
                          <small>(BL, DUP, ARCCL, etc)</small>
                        </a>
                        <a  class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Legalização</h5>
                            <small class="text-muted">1 semana</small>
                          </div>
                          <p class="mb-1">Uma semana de antecedencia entregamos os documentos na agencia para legalizar o BL</p>
                          <small class="text-muted">(Maersk, Orey, Goldenan)</small>
                        </a>
                        <a class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Despachante</h5>
                            <small class="text-muted">1 semana</small>
                          </div>
                          <p class="mb-1">Depois de ter acesso ao BL original, Despachante recebe para dar o seu tratamento</p>
                          <small class="text-muted">(DU e nota de Liquidação</small>
                          <small class="text-muted">EP 14, Proveniente do Porto de Luanda</small>
                          <small class="text-muted">Ep17, ultima fatura, proveniente do terminal)</small>
                        </a>
                        <a  class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">Fim</h5>
                              <small class="text-muted"></small>
                            </div>
                            <p class="mb-1">Pagamos todas as faturas que despachante 
                                disponibiliza para nós, e esperamos eles trazerem a mercadoria na empresa</p>
                            <small class="text-muted">(Temos 5 dias gratis para levantar a mercadoria, caso passar seremos multados)</small>
                          </a>
                      </div>
                </div>
            </div>
            <div class="card" id="dadosProcessos" style="display: none">
              <div class="card-header">BL Nº 233575063</div>
              <div class="card-body">

              </div>
              <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!-- Section modal-->
    <div class="modal fade" id="modalLegalizacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLegalizacao" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          @include('legalizacao.add')
      </div>
    </div>
    <!--Snav vas-->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        @include('legalizacao.information')
    </div>
</div>
@endsection
