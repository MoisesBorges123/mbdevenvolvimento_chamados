@if ($errors->any())
<div class="alert alert-light-warning">
        <div {{ $attributes }}>
            <div class="font-medium text-red-600"><h3>{{ __('Ops! Algo deu errado.') }}</h3></div>
    
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

