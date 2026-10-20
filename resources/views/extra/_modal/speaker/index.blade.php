<form class="card-body" action="{{ route('admin.speaker.list') }}" target="_blank">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imprimir Lista de Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <hr>
                    <div class="form-group row">
                        <b class="col-md-12 text-center">Incluir Colunas no Documento</b>
                        <div class="col-md-12">
                            <div class="row text-left mx-2 mt-3">


                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="name" checked>
                                    <small>Nome</small>
                                </div>
                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="function">
                                    <small>Função</small>
                                </div>
                                <div class="form-check col-12 col-md-6 col-lg-6">
                                    <input type="checkbox" class="form-check-input" name="company" checked>
                                    <small>Empresa</small>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
</form>