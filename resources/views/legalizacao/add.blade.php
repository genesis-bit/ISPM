<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="titlemodalEmpresa">Novo Processo de Legalização</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{route('legalizacao.store')}}" class="form-floating" method="POST">
        @csrf
        <input type="hidden" name="idEmpresa" id="idEmpresaid">
        <div class="modal-body">      
            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="bl" minlength="5" id="blid" required placeholder="numero de BL" >
                <label for="blid">Numero do BL</label>
            </div>
            <div class="form-floating mb-2">
                <input type="date" class="form-control" name="eta" id="etaid" placeholder="Eta" required>
                <label for="etaid">ETA</label>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="navioid" name="navio" placeholder="Navio" required>
                    <label for="navioid">Navio</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" name="viagem" class="form-control" id="viagemid" placeholder="Viagem" required>
                    <label for="viagemid">Viagem Nº</label>
                  </div>
                </div>
            </div>
            <div class="form-floating mb-2">
              <input type="text" class="form-control"  name="produto" id="produtoid" placeholder="Produto" required>
              <label for="produtoid">Produto</label>
          </div>
          <div class="form-floating mb-2">
                <select class="form-select" id="agenciaid" name="agencia" aria-label="Floating label select example">
                    @foreach ($Agencia as $A)
                        <option value="{{$A->id}}">{{$A->nome}}</option>
                    @endforeach 
                </select>
                <label for="agenciaid">Agência de Navegação</label>
          </div>
          <div class="form-floating ">
            <select class="form-select" name="funcionario" id="funcionarioid" aria-label="Floating label select example">
                @foreach ($Funcionario as $F)
                    <option value="{{$F->id}}">{{$F->nome}}</option>
                @endforeach 
            </select>
            <label for="funcionarioid">Funcionario</label>
      </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="">Salvar</button>
         </div>
    </form>
</div>