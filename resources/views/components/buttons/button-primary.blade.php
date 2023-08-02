<button class='btn btn-indigo ' type='submit' 
@if($disabled) 
    disabled=true  
@endif
>
{{!empty($slot) ? $slot : 'Salvar'}}</button>