<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">    
            <div class="container mt-4">    
                <h5 class="text-black">Filtrar livros</h5>
            </div>
            <form action="relatorio/emprestimo" method="POST" class="row p-lg-3 gy-2">
                @csrf
                <div class="col-12 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="solicitados" id="inlineCheckbox1" value="sol">
                        <label class="form-check-label" for="inlineCheckbox1">Solicitados</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Emprestados" value="emp">
                        <label class="form-check-label" for="inlineCheckbox2">Emprestados</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Devolvidos" value="dev">
                        <label class="form-check-label" for="inlineCheckbox2">Devolvidos</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationServer01" class="form-label">Data Inicio</label>
                    <input type="date" class="form-control" id="validationServer01" required name="dataI">
                </div>
                <div class="col-md-6">
                    <label for="validationServer02" class="form-label">Data Final</label>
                    <input type="date" class="form-control" id="validationServer02"  required name="dataF">
                </div>
                <div class="col-12  mb-3">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>    
        </div>
    </div>
</div>    
