@component('mail::message')
# Você possui um novo chamado ({{$codChamado}})

Olá prezado <b>{{$userName}}</b>,

O setor {{$setor}}, possui a seguinte demanda:
<p>
    {{$demanda}}
</p>

@component('mail::button', ['url' => $url])
Visualizar Chamado <i class='fa fa-chevron-right'>
@endcomponent

Atenciosamente,<br>
{{$userRemente}}
{{ config('app.name') }}
@endcomponent
