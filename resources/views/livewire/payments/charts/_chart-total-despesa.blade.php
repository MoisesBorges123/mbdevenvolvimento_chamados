<div class="card overflow-hidden">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="mb-2 fs-18 text-muted">
                    Total Saída
                </div>
                <h1 class="font-weight-bold mb-1">{{$totalDespesas}}</h1>
                <span class="text-primary"> @if($totalDespesasAnterior > $this->totalDespesas)<i class="fa fa-arrow-down mr-1"></i> -@else<i class="fa fa-arrow-up mr-1"></i> +@endif{{$this->percentual}}%</span>
            </div>
            <div class="col col-auto">
                <div class="mx-auto chart-circle chart-circle-md chart-circle-primary mt-sm-0 mb-0" data-value="0.15" data-thickness="12" data-color="#60499a"><canvas width="96" height="96"></canvas>
                    <div class="mx-auto chart-circle-value text-center fs-20">15%</div>
                </div>
            </div>
        </div>
    </div>
</div>