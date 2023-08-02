<div class="input-group mb-4">
    @if(!empty($setores) && count($setores) > 0)
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-users"></i>
        </div>
    </div>
    <select name="department_id" id="department_id" class="form-control">
        <option value=""> - Selecione seu setor - </option>
        @foreach($setores as $setor)
            <option value="{{$setor->id}}">{{$setor->name}}</option>
        @endforeach
    </select>
   
    @endif
</div>

