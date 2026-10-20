<form class="card-body" method="POST" action="{{ route('admin.participant.report.pdf') }}" target="_blank">
    @csrf
    <div class="modal fade" id="participantModal" tabindex="-1" role="dialog"
         aria-labelledby="participantModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="participantModalLabel">Relatório de Participantes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Estado <span class="text-danger">*</span></label>
                            <select required name="status" class="form-control">
                                <option value="">--Selecione um Estado--</option>
                                <option value="RECEBIDO">RECEBIDO</option>
                                <option value="APROVADO">APROVADO</option>
                                <option value="DUPLICADO">DUPLICADO</option>
                                <option value="TODAS">TODOS</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label>Residência <span class="text-danger">*</span></label>
                            <select required name="residency" class="form-control">
                                <option value="">--Selecione a Residência--</option>
                                <option value="RESIDENTE">RESIDENTES EM ANGOLA</option>
                                <option value="ESTRANGEIRO">ESTRANGEIROS</option>
                                <option value="TODAS">TODOS</option>
                            </select>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                        <div class="col-md-12 d-flex justify-content-between align-items-center mb-2">
                            <b>Incluir Colunas no Relatório</b>
                            <button type="button" id="toggleAllColumns" class="btn btn-sm btn-outline-secondary">
                                Marcar / Desmarcar todos
                            </button>
                        </div>

                        <div class="col-md-12">
                            <div class="row text-left mx-2">
                                @php
                                    $availableColumns = \App\Http\Controllers\Admin\ParticipantReportController::availableColumns();
                                    $defaultColumns   = \App\Http\Controllers\Admin\ParticipantReportController::defaultColumns();
                                @endphp

                                @foreach ($availableColumns as $key => $label)
                                    <div class="form-check col-md-4 mb-1">
                                        <input type="checkbox"
                                               class="form-check-input column-checkbox"
                                               id="column_{{ $key }}"
                                               name="columns[]"
                                               value="{{ $key }}"
                                               {{ in_array($key, $defaultColumns) ? 'checked' : '' }}>
                                        <small><label class="mb-0" for="column_{{ $key }}">{{ $label }}</label></small>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit"
                                formaction="{{ route('admin.participant.report.pdf') }}"
                                class="btn btn-primary">
                            <i class="fa fa-file-pdf-o"></i> Imprimir PDF
                        </button>

                        <button type="submit"
                                formaction="{{ route('admin.participant.report.excel') }}"
                                formtarget="_self"
                                class="btn btn-success">
                            <i class="fa fa-file-excel-o"></i> Exportar Excel
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('toggleAllColumns');
        if (!toggleButton) return;

        toggleButton.addEventListener('click', function () {
            const checkboxes = document.querySelectorAll('.column-checkbox');
            const shouldCheck = Array.from(checkboxes).some(box => !box.checked);
            checkboxes.forEach(box => box.checked = shouldCheck);
        });
    });
</script>
@endpush
