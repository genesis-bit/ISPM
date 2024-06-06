<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="titlemodalEmpresa">Nova Empresa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>  
    <form action="{{route('empresa.store')}}" class="form-floating" method="POST">
        @csrf
        <input type="hidden" name="idEmpresa" id="idEmpresaid">
        <div class="modal-body">      
            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="nomeEmpresa" minlength="5" id="nomeEmpresaid" required placeholder="despachante" >
                <label for="nomeEmpresaid">Nome Da Empresa</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" minlength="8" name="nif" id="nifid" placeholder="NIF" required>
                <label for="nifid">NIF</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" minlength="4" name="endereco" id="enderecoid" placeholder="endereco" required>
                <label for="endereco">Endereço</label>
            </div>
            <div class="form ">
                <p> Seleciona o tipo de Empresa: </p>
                @foreach ($TipoEmpresa as $TP)
                    <input type="radio" class="btn-check" required name="tipoEmpresa" id="tipoEmpresaid{{$TP->id}}" autocomplete="off" value="{{$TP->id}}">
                    <label class="btn btn-outline-secondary" for="tipoEmpresaid{{$TP->id}}">{{$TP->descricao}}</label>
                @endforeach               
            </div>        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="buttonsalvarEmpresa">Salvar</button>
         </div>
    </form>
</div>