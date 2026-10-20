<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="theme">Tema</label>
        <input type="text" name="theme" id="theme"
               value="{{ isset($schedule->theme) ? $schedule->theme : old('theme') }}" class="form-control border-secondary rounded"
               placeholder="Tema" required>
    </div>
</div> <!-- /.col -->

<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="program">Programa</label>
        <input type="text" name="program" id="program"
               value="{{ isset($schedule->program) ? $schedule->program : old('program') }}"
               class="form-control rounded border-secondary" placeholder="Programa" required>
    </div>

</div> <!-- /.col -->


<div class="col-12 col-md-3 col-lg-3">
    <div class="form-group">
        <label for="day">Dia do Evento</label>
        <select name="day" id="day" class="form-control border-secondary rounded" required>
            @if (isset($schedule->day))
                <option value="{{ $schedule->day }}" class="text-primary h6" selected>
                    {{ $schedule->day }}
                </option>
            @else
                <option disabled selected>Selecione o dia do evento</option>
            @endif

            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>


        </select>
    </div>

</div>



<div class="col-12 col-md-3 col-lg-3">
    <div class="form-group">
        <label for="room">Sala</label>
        <input type="text" name="room" id="room"
               value="{{ isset($schedule->room) ? $schedule->room : old('room') }}" class="form-control rounded border-secondary"
               placeholder="Sala" >
    </div>
</div> <!-- /.col -->


<div class="col-12 col-md-2 col-lg-2">
    <div class="form-group">
        <label for="start_time">Hora de Início</label>
        <input type="time" name="start_time" id="start_time"
               value="{{ isset($schedule->start_time) ? $schedule->start_time : old('start_time') }}" class="form-control rounded border-secondary"
                >
    </div>
</div> <!-- /.col -->


<div class="col-12 col-md-2 col-lg-2">
    <div class="form-group">
        <label for="room">Hora de Término</label>
        <input type="time" name="end_time" id="end_time"
               value="{{ isset($schedule->end_time) ? $schedule->end_time : old('end_time') }}" class="form-control rounded border-secondary"
                >
    </div>
</div> <!-- /.col -->





<div class="col-12 col-md-2 col-lg-2">
    <div class="form-group">
        <label for="order">Ordem de Prioridade</label>
        <input type="number" name="order" id="order"
               value="{{ isset($schedule->order) ? $schedule->order : old('order') }}"
               class="form-control rounded border-secondary" placeholder="Ordem de Prioridade" required>
    </div>

</div>

<div class="col-12 col-md-6 col-lg-6">
    <div class="form-group">
        <label for="logo">Logo</label>
        <div class="custom-file">
            <input  class="form-control border-secondary rounded" type="file" name="logo" id="logo">
        </div>
    </div>
</div> <!-- /.col -->



<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Moderador </h5>
            <!-- Create the editor container -->
            <textarea name="moderator" id="editor2" style="min-height:300px; min-width:100%">
                {{ isset($schedule->moderator) ? $schedule->moderator : old('moderator') }}
            </textarea>
        </div>
    </div>
</div>

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Oradores</h5>
            <!-- Create the editor container -->
            <textarea name="speaker" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($schedule->speaker) ? $schedule->speaker : old('speaker') }}
            </textarea>
        </div>
    </div>
</div>
