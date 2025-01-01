<div>
    <style>
        #swal2-html-container{
            overflow-x: hidden;
        }
    </style>
    <form id='form-tag' action="">
        <div class="form-row">
            <div class="form-group col-12">
                <label for="" class='text-left'>Nome</label>
                <input type="text" name='name' class="form-control form-control-sm">
            </div>
            <div class="form-group col-12">
                <label for="" class='text-left'>Descrição</label>
                <textarea name="description" id="descricao" cols="30" rows="10" class="form-control form-control-sm"></textarea>
            </div>
        </div>
        <div class="form-row">
            <button type="button" onclick="getFormData({{json_encode(['codigoForm'=>'tag','enviarPara'=>'saveTag'])}})" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>