<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalFuncionario"><i class="bi bi-person-add"></i> Novo Funciónario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
     <form action="{{route('funcionario.store')}}" class="form-floating" method="POST">
        @csrf
        <div class="modal-body">       
            <div class="form-floating mb-2">
                <input type="text" name="nome" class="form-control" required id="nomeFuncionarioid" placeholder="despachante" >
                <label for="nomeFuncionarioid">Nome Completo</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="bilhete" id="biid" placeholder="NIF" required>
                <label for="floatingPassword">Numero de Identificação</label>
            </div>
            <div class="form-floating mb-2">
                <select class="form-select" name="empresa_id" aria-label="Default select example" id="floatingPassword2">
                    @foreach ($Empresas as $Ep)
                        <option value="{{$Ep->id}}">{{$Ep->nome}}</option>
                    @endforeach                    
                </select>
                <label for="floatingPassword2">Empresa</label>
            </div>
            <div class="form-floating mb-2">                
                <select class="form-select" name="cargo_id" aria-label="Default select example" id="floatingPassword1">
                    @foreach ($Cargo as $C)
                        <option value="{{$C->id}}">{{$C->descricao}}</option>
                    @endforeach
                </select>
                <label for="floatingPassword1">Cargo</label>
            </div>        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>