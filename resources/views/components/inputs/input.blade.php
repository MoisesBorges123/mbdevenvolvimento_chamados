@php
/**
 * Propridades:
 * text
 * value
 * name
 * placeholder
 * type
 */
$valid = 'is-valid';
$invalid = 'is-invalid'
@endphp
{{-- state-valid = success --}}
{{-- state-invalid = danger --}}


<input 
    class="form-control  mb-4  
    wire:model.debounce.500ms="{{$name}}" 
    id="{{$name}}}" 
    name="{{$name}}" 
    placeholder="{{$placeholder ?? ''}}"  
    type="{{$type}}" 
    value="{{$value ? ''}}"
>