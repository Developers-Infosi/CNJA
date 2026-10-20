@isset($speaker)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h3 class="page-title"><b>Foto Actual</b></h3>
            </div>
        </div>
        <div class="card-deck mb-4">

            <div class="border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("{{ Storage::url($speaker->photo) }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                </div>
            </div> <!-- .card -->
        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name" value="{{ isset($speaker->name) ? $speaker->name : '' }}"
            class="form-control border-secondary rounded" placeholder="Nome Completo" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="function">Função ou Grau Académico</label>
        <input type="text" name="function" id="function"
            value="{{ isset($speaker->function) ? $speaker->function : '' }}" class="form-control border-secondary rounded"
            placeholder="Função ou Grau Académico" required>
    </div>
</div> <!-- /.col -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="company">Empresa/Governo/Instituição</label>
        <input type="text" name="company" id="company"
            value="{{ isset($speaker->company) ? $speaker->company : '' }}" class="form-control border-secondary rounded"
            placeholder="Empresa/Governo/Instituição" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
        <label for="photo">Ordem de Prioridade</label>
        <div class="custom-file">
            <input value="{{ isset($speaker->priority) ? $speaker->priority : '' }}"
                class="form-control border-secondary rounded rounded" type="text" name="priority" id="priority">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-4">

    <div class="form-group">
        <label for="gender">Género</label>
        <select name="gender" id="gender" class="form-control rounded" required>
            @if (isset($speaker->gender))
                <option value="{{ $speaker->gender }}" class="text-primary h6" selected>
                    {{ $speaker->gender }}
                </option>
            @else
                <option disabled selected>selecione o género</option>
            @endif

            <option value="M">M</option>
            <option value="F">F</option>
        </select>
    </div>
</div>

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control rounded" required>

            @if (isset($speaker->status))
                <option value="{{ $speaker->status }}" class="text-primary h6" selected>
                    {{ $speaker->status }}
                </option>
            @else
                <option disabled selected>Selecione o Status</option>
            @endif

            <option value="APROVADO">APROVADO</option>
            <option value="EMITIDO">EMITIDO</option>
            <option value="DUPLICADO">DUPLICADO</option>
            <option value="RECEBIDO">RECEBIDO</option>
        </select>
    </div>
</div>

<div class="col-12 col-md-4 col-lg-4">
    <div class="form-group">
        <label for="type">Tipo</label>
        <select name="type" id="type" class="form-control rounded" required>

            @if (isset($speaker->type))
                <option value="{{ $speaker->type }}" class="text-primary h6" selected>
                    {{ $speaker->type }}
                </option>
            @else
                <option disabled selected>Selecione o Tipo</option>
            @endif

            <option value="ORADOR">ORADOR</option>
            <option value="MODERADOR">MODERADOR</option>
            <option value="MESTRE DE CERIMÓNIA">MESTRE DE CERIMÓNIA</option>

        </select>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-8">
    <div class="form-group">
        <label for="photo">Foto a carregar</label>
        <div class="custom-file">
            <input value="{{ isset($speaker->photo) ? $speaker->photo : '' }}" class="form-control border-secondary rounded"
                type="file" name="photo" id="photo">

        </div>
    </div>
</div> <!-- /.col -->



<div class="col-12 mt-4 mb-5">
    <div class="card shadow rounded">
        <div class="card-body">
            <h5 class="card-title">Descrição do Orador</h5>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($speaker->description) ? $speaker->description : old('description') }}
            </textarea>
        </div>
    </div>
</div>
